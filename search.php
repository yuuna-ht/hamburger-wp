<?php get_header(); ?>

<main class="l-main p-main c-main__grid">
    <div class="p-mainVisual--archive c-mainVisual--left">
        <h1 class="p-mainVisual--archive__title c-roboto">Search:</h1>
        <p class="c-bold"><?php echo esc_html( get_search_query() ); ?></p>
    </div>

    <div class="p-archive c-wrapper">
        <section class="p-archive__main">
            <?php
            $search_query = get_search_query(); // 検索クエリを取得
            $search_count = $wp_query->found_posts; // 検索結果の投稿数を取得
            ?>
            <h2 class="p-introduction__title c-bold"><?php printf( esc_html__( 'Search results for "%s" are %d.', 'hamburger' ), esc_html( $search_query ), $search_count ); ?></h2>
            <?php if ( have_posts() ) : ?>
                <p class="p-introduction__text"><?php esc_html_e( 'A list of search results will be displayed.', 'hamburger' ); ?></p>
            <?php else : ?>
                <p class="p-introduction__text"><?php printf( esc_html__( 'No results found for "%s".', 'hamburger' ), esc_html( $search_query ) ); ?></p>
            <?php endif; ?>

            <?php get_template_part( 'card' ); ?>

        </section>

        <?php if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi(); } ?>

    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

