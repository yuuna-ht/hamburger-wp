<?php get_header(); ?>

<!-- メイン -->
<main class="l-main p-main c-main__grid">
    <!-- メインビジュアル -->
    <?php
    $args = array(
        'post_type' => 'main_visual',
        'posts_per_page' => 1, // 表示するメインビジュアルの数
    );
    $main_visuals = new WP_Query($args);
    if ($main_visuals->have_posts()) :
        while ($main_visuals->have_posts()) : $main_visuals->the_post();
            $post_id = get_the_ID();
            $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full'); // アイキャッチ画像のURLを取得
    ?>
            <div class="p-mainVisual c-mainVisual" style="background-image: url('<?php echo esc_url($post_thumbnail_url); ?>');">
                <h2 class="p-mainVisual__title c-bold"><?php the_title(); ?></h2>
            </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>メインビジュアルがありません。</p>';
    endif;
    ?>

    <!-- ブランチメニュー -->
    <div class="c-wrapper">
        <div class="p-branchMenu">
        <?php
$args = array(
    'post_type' => 'branch_menu',
    'posts_per_page' => 2, // 表示するメニューの数
);
$branch_menus = new WP_Query($args);
if ($branch_menus->have_posts()) :
    while ($branch_menus->have_posts()) : $branch_menus->the_post();
        $post_id = get_the_ID();
        $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full'); // アイキャッチ画像のURLを取得

        // カスタムタクソノミーからカテゴリータームを取得
        $terms = get_the_terms($post_id, 'branch_menu_category');

        $category_link = '#'; // デフォルトリンク（カテゴリが見つからない場合）

        if ($terms && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                if ($term->slug == 'takeout' || $term->slug == 'eatin') {
                    // カテゴリーのリンクを取得
                    $category_slug = $term->slug;
                    $category_id = get_term_by('slug', $category_slug, 'category')->term_id;
                    $category_link = esc_url(get_category_link($category_id));
                    break;
                }
            }
        }
        ?>
        <a href="<?php echo $category_link; ?>" class="p-branchMenu__list c-background__image" style="background-image: url('<?php echo esc_url($post_thumbnail_url); ?>');">
            <h2 class="p-branchMenu__title c-roboto"><?php the_title(); ?></h2>
            <div class="p-branchMenu__about">
                <dl class="p-content">
                    <dd class="p-content__title c-bold"><?php the_title(); ?></dd>
                    <dt class="p-content__text"><?php the_content(); ?></dt>
                </dl>
                <dl class="p-content">
                    <dd class="p-content__title c-bold"><?php the_title(); ?></dd>
                    <dt class="p-content__text"><?php the_content(); ?></dt>
                </dl>
                <!-- 他のカスタムフィールドや内容を表示 -->
            </div>
        </a>
    <?php
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>ブランチメニューがありません。</p>';
endif;
?>
        </div>
    </div>

    <!-- アクセス -->
    <?php
    $args_access_section = array(
        'post_type' => 'access_section',
        'posts_per_page' => 1,
    );
    $access_sections = new WP_Query($args_access_section);
    if ($access_sections->have_posts()) :
        while ($access_sections->have_posts()) : $access_sections->the_post();
            $post_id_access = get_the_ID();
            $access_content = get_the_content();
            $map_embed_code = get_field('map_embed_code'); // ACFで追加したフィールドの値を取得
    ?>
            <section class="p-access c-background__image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
            <?php if ($map_embed_code) : ?>
                <div class="p-access__embedCode">
                    <?php echo $map_embed_code; ?>
                </div>
            <?php endif; ?>
                <div class="p-map__overlay"></div>
                <div class="p-access__overlay"></div>
                <div class="p-access__inner c-bold">
                    <h2 class="p-access__title"><?php the_title(); ?></h2>
                    <div class="p-access__text"><?php echo $access_content; ?></div>
                </div>
            </section>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>アクセスセクションがありません。</p>';
    endif;
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
