<?php get_header(); ?>

<main class="l-main--single p-main c-main__grid">
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
                $post_thumbnail_url = get_template_directory_uri() . '/images/mainVisual-front.png';
            }
    ?>
            <div class="p-mainVisual--404 c-mainVisual" style="background-image: url('<?php echo esc_url($post_thumbnail_url); ?>');">
                <h1 class="p-mainVisual__title--404 c-bold">Oops!<br> 404 - Page Not Found.</h1>
            </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else : // 投稿が見つからない場合のデフォルト表示
        ?>
        <div class="p-mainVisual c-mainVisual" style="background-image: url('<?php echo esc_url(get_template_directory_uri() . '/images/mainVisual-front.png'); ?>');">
            <h2 class="p-mainVisual__title c-bold">Oops!<br> 404 - Page Not Found.</h2>
        </div>
    <?php
    endif;
    ?>
    <!-- エラーメッセージ、ホームリンクボタン -->
    <div class="p-404__wrapper c-wrapper">
        <article class="p-404__article">
            <h2 class="p-404__title"><?php esc_html_e('The page you are looking for could not be found.', 'hamburger'); ?>(T_T)</h2>
            <p class="p-404__text">
                <?php esc_html_e('The page you are looking for may have been moved or deleted.', 'hamburger'); ?><br>
                <?php esc_html_e('We apologize for the inconvenience, but please search again from the top page.', 'hamburger'); ?>
            </p>
            <button class="p-article__button--404 c-button--gray">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="p-404__homeLink"><?php esc_html_e('Back to top', 'hamburger'); ?></a>
            </button>
        </article>
    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
