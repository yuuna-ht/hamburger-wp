<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main id="post-<?php the_ID(); ?>" <?php post_class('l-main--single p-main c-main__grid'); ?>>
        <div class="p-mainVisual--single c-mainVisual">
            <h1 class="p-mainVisual--single__title c-bold"><?php the_title(); ?></h1>
        </div>
        <div class="p-article__wrapper c-wrapper">
            <article class="p-article">
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php 
            $args = array(
                'before' => '<div class="page-split">',
                'after' => '</div>',
                'link_before' => '<span>',
                'link_after' => '</span>',
            );
            wp_link_pages($args); 
        ?>
            </article>
        </div>
    </main>
<?php endwhile; else : ?>
    <p>表示する記事がありません</p>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
