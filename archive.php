<?php get_header(); ?>

<main class="l-main p-main c-main__grid">
    <div class="p-mainVisual--archive c-mainVisual--left">
        <?php
        $prefix = 'Menu: '; //カテゴリー名の前につける$prefixという変数に'Menu:'という文字列を代入
        $cat_title = single_cat_title('', false);   //現在のカテゴリーのタイトルを取得。第二引数はfalseにしてタイトルを返り値として取得することで、適切にエスケープ処理された後に最終的にechoで出力される(二重出力とならない)
        ?>
        <h1 class="p-mainVisual--archive__title c-roboto"><?php echo esc_html($prefix); ?></h1>
        <p class="c-bold"><?php echo esc_html($cat_title); ?></p>
    </div>

    <div class="p-archive c-wrapper">
        <section class="p-archive__main">
            <?php
            $category = get_queried_object();   // 現在のカテゴリーの情報を取得
            $category_subtitle = get_term_meta($category->term_id, 'category_subtitle', true);  //現在のカテゴリーのタームIDを元に、指定したタームのカスタムフィールド(ここではcategory_subtitle)を取得。取得したいカスタムフィールドの値が単一の場合はtrueを指定。
            ?>
            <h2 class="p-introduction__title c-bold"><?php echo esc_html($category_subtitle); ?></h2>
            <p class="p-introduction__text"><?php echo wp_kses_post(category_description($category->term_id)); // $category->term_idを使って、そのカテゴリーの説明を取得 ?></p>

            <?php get_template_part('card'); ?>

        </section>

        <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

