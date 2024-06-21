<?php get_header(); ?>

<!-- メイン -->
<main class="l-main--single p-main c-main__grid">
    <!-- メインビジュアル -->
    <?php
    // 404ページと同じようにメインビジュアルを取得する
    $args = array(
        'post_type' => 'main_visual',
        'posts_per_page' => 1,
    );
    $main_visuals = new WP_Query($args);
    if ($main_visuals->have_posts()) :
        while ($main_visuals->have_posts()) : $main_visuals->the_post();
            $post_id = get_the_ID();
            $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full'); // アイキャッチ画像のURLを取得
    ?>
            <div class="p-mainVisual--404 c-mainVisual" style="background-image: url('<?php echo esc_url($post_thumbnail_url); ?>');">
                <h1 class="p-mainVisual__title--404 c-bold">Oops!<br> 404 - Page Not Found.</h1>
            </div>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        // メインビジュアルが見つからない場合のデフォルト表示
        echo '<div class="p-mainVisual c-mainVisual" style="background-image: url(\'path/to/default-image.jpg\');">';
        echo '<h2 class="p-mainVisual__title c-bold">Oops!<br> 404 - Page Not Found.</h2>';
        echo '</div>';
    endif;
    ?>
            <div class="p-404__wrapper c-wrapper">
                <article class="p-404__article">
                    <h2 class="p-404__title"><?php _e('The page you are looking for could not be found.', 'hamburger'); ?>(T_T)</h2>
                    <p class="p-404__text"><?php _e('The page you are looking for may have been moved or deleted.', 'hamburger'); ?><br>
                    <?php _e('We apologize for the inconvenience, but please search again from the top page.', 'hamburger'); ?></p>
                    <button class="p-article__button--404 c-button--gray c-margin--top"><a href="<?php echo esc_url(home_url('/')); ?>" class="p-404__homeLink"><?php _e('Back to top', 'hamburger'); ?></a></button>
                </article>
            </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
