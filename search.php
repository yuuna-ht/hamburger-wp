<?php get_header(); ?>

<main class="l-main p-main c-main__grid">
    <!-- メインビジュアル -->
    <div class="p-mainVisual--archive c-mainVisual--left">
    <h1 class="p-mainVisual--archive__title c-roboto">Search:</h1>
        <p class="c-bold"><?php echo esc_html( get_search_query() ); // 検索フォームに入力したキーワードやフレーズを表示 ?></p>
    </div>

    <!-- イントロダクション -->
    <div class="p-archive c-wrapper">
        <section class="p-archive__main">
        <h2 class="p-introduction__title c-bold">「<?php echo esc_html(get_search_query()); ?>」の検索結果です。</h2>
            <?php if ( have_posts() ) : ?>
                <p class="p-introduction__text"><?php esc_html_e( 'A list of search results will be displayed.', 'hamburger' ); ?></p>
            <?php else : ?>
                <p class="p-introduction__text">「<?php echo esc_html(get_search_query()); ?>」は見つかりませんでした。</p>
            <?php endif; ?>

            <!-- メニューカード -->
            <?php get_template_part( 'card' ); ?>

        </section>

        <!-- ページネーション -->
        <?php if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi(); } ?>

    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
