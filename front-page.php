<?php get_header(); ?>

<!-- メイン -->
<main class="l-main p-main c-main__grid">
    <!-- メインビジュアル -->
    <div class="p-mainVisual c-mainVisual">
        <h2 class="p-mainVisual__title c-bold">ダミーサイト</h2>
    </div>

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
                    $category_id = get_term_by('slug', 'eatin', 'category')->term_id; // 'eatin' を対象に変更する場合は必要に応じて変更
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
    <section class="p-access c-background__image">
        <div class="p-map__overlay"></div>
        <div class="p-access__overlay"></div>
        <div class="p-access__inner c-bold">
            <h2 class="p-access__title">見出しが入ります</h2>
            <p class="p-access__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
    </section>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
