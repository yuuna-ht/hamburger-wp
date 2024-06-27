<?php get_header(); ?>

<!-- メイン -->
<main class="l-main p-main c-main__grid">
    <!-- メインビジュアル -->
    <div class="p-mainVisual--archive c-mainVisual--left">
        <h1 class="p-mainVisual--archive__title c-roboto">Menu:</h1>
        <p class="c-bold"><?php single_cat_title(); ?></p>
    </div>

    <!-- イントロダクション -->
    <div class="p-archive c-wrapper">
        <section class="p-archive__main">
            <?php
            // 現在のカテゴリーの情報を取得
            $category = get_queried_object();
            $category_subtitle = get_term_meta($category->term_id, 'category_subtitle', true);
            ?>
            <h2 class="p-introduction__title c-bold"><?php echo esc_html($category_subtitle); ?></h2>
            <p class="p-introduction__text"><?php echo wp_kses_post(category_description($category->term_id)); ?></p>

            <!-- メニューカード -->
            <?php get_template_part('card'); ?>

        </section>

        <!--  ページネーション  -->
        <?php wp_pagenavi(); ?>

    </div>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
