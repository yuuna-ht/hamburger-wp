<?php get_header(); ?>
    <main class="l-main--single p-main c-main__grid">
        <div class="p-mainVisual--404 c-mainVisual">
                <h1 class="p-mainVisual__title--404 c-bold">Oops!<br> 404 - Page Not Found.</h1>
            </div>
        <div class="p-404__wrapper c-wrapper">
            <article class="p-404__article">
                <h2 class="p-404__title"><?php _e('The page you are looking for could not be found', 'hamburger'); ?>(T_T)</h2>
                    <p class="p-404__text"><?php _e('The page you are looking for may have been moved or deleted.', 'hamburger'); ?><br>
                    <button class="p-article__button--404 c-button--gray c-margin--top"><a href="<?php echo esc_url(home_url('/')); ?>" class="p-404__homeLink"><?php _e('Back to top', 'hamburger'); ?></a></button>
            </article>
        </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>