<?php get_header(); ?>

<main class="l-main p-main c-main__grid">
    <!-- メインビジュアル -->
    <?php
    // カスタム投稿タイプの'main_visual'から投稿を1つ取得
    $args = array(
        'post_type' => 'main_visual',
        'posts_per_page' => 1,
    );
    $main_visuals = new WP_Query($args);
    if ($main_visuals->have_posts()) :
        while ($main_visuals->have_posts()) : $main_visuals->the_post();
            // 投稿がある場合はループ内で投稿IDとアイキャッチ画像URLを取得
            $post_id = get_the_ID();
            $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');

            // アイキャッチ画像がない場合はデフォルト画像を表示
            if (!$post_thumbnail_url) {
                $post_thumbnail_url = esc_url(get_template_directory_uri() . '/images/mainVisual-front.png');
            }
    ?>
            <div class="p-mainVisual c-mainVisual" style="background-image: url('<?php echo esc_url($post_thumbnail_url); ?>');">
                <h2 class="p-mainVisual__title c-bold"><?php the_title(); ?></h2>
            </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        ?>
        <!-- 投稿が見つからない場合のデフォルト表示 -->
        <div class="p-mainVisual c-mainVisual" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/images/mainVisual-front.png'); ?>');">
            <h2 class="p-mainVisual__title c-bold"><?php esc_html_e('Dummy Site', 'hamburger'); ?></h2>
        </div>
    <?php
    endif;
    ?>

    <!-- ブランチメニュー -->
    <div class="c-wrapper">
        <div class="p-branchMenu">
            <?php
            // カスタム投稿タイプの'branch_menu'から投稿を2つ取得
            $args = array(
                'post_type' => 'branch_menu',
                'posts_per_page' => 2,
            );
            $branch_menus = new WP_Query($args);
            if ($branch_menus->have_posts()) :
                while ($branch_menus->have_posts()) : $branch_menus->the_post();
                    // 投稿がある場合はループ内で投稿IDとアイキャッチ画像URLを取得
                    $post_id = get_the_ID();
                    $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');

                    // 指定した投稿のカスタムタクソノミー(branch_menu_category)のタームを取得
                    $terms = get_the_terms($post_id, 'branch_menu_category');
                    // デフォルトリンク（カテゴリが見つからない場合）
                    $category_link = '#';

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
                    <a href="<?php echo esc_url($category_link); ?>" class="p-branchMenu__list c-background__image" style="background-image: url('<?php echo esc_url($post_thumbnail_url); ?>');">
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
                        </div>
                    </a>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>' . esc_html_e('There is no brunch menu.', 'hamburger') . '</p>';
            endif;
            ?>
        </div>
    </div>

    <!-- アクセス -->
    <?php
    $args_access_section = array(
        // カスタム投稿タイプの'access_section'から投稿を1つ取得
        'post_type' => 'access_section',
        'posts_per_page' => 1,
    );
    $access_sections = new WP_Query($args_access_section);
    if ($access_sections->have_posts()) :
        while ($access_sections->have_posts()) : $access_sections->the_post();
            // 投稿がある場合はループ内で投稿IDと投稿の本文とACFで追加したフィールドの値(mapの埋め込みコード)を取得
            $post_id_access = get_the_ID();
            $access_content = get_the_content();
            $map_embed_code = get_field('map_embed_code');
    ?>
            <section class="p-access c-background__image" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
                <?php if ($map_embed_code) : ?>
                    <!-- mapの埋め込みコードが存在する場合にはそれを表示 -->
                    <div class="p-access__embedCode">
                        <?php echo $map_embed_code; ?>
                    </div>
                <?php endif; ?>
                <div class="p-map__overlay"></div>
                <div class="p-access__overlay"></div>
                <div class="p-access__inner c-bold">
                    <h2 class="p-access__title"><?php the_title(); ?></h2>
                    <div class="p-access__text"><?php echo wp_kses_post($access_content); ?></div>
                </div>
            </section>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>' . esc_html_e('There is no access section.', 'hamburger') . '</p>';
    endif;
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
