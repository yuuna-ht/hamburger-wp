<?php get_header(); ?>

<!-- メイン -->
<main class="l-main p-main c-main__grid">
    <!-- メインビジュアル -->
    <div class="p-mainVisual--archive c-mainVisual--left">
        <h1 class="p-mainVisual--archive__title c-roboto">Search:</h1>
        <p class="c-bold"><?php echo get_search_query(); ?></p>
    </div>
    <!-- イントロダクション -->
    <div class="p-archive c-wrapper">
        <section class="p-archive__main">
            <h2 class="p-introduction__title c-bold">「<?php echo esc_html(get_search_query()); ?>」の検索結果です。</h2>
            <?php if ( have_posts() ) : ?>
                <p class="p-introduction__text"><?php _e('A list of search results will be displayed.', 'hamburger'); ?></p>
            <?php else : ?>
                <p class="p-introduction__text">「<?php echo esc_html(get_search_query()); ?>」は見つかりませんでした。</p>
            <?php endif; ?>
            <!-- メニューカード -->
            <ul class="p-card__menu">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        $post_id = get_the_ID();
                        $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full'); //アイキャッチ画像
                        $post_title = get_the_title();  //投稿のタイトル
                        $post_excerpt = get_the_excerpt();  //投稿の抜粋
                        
                        // 投稿の内容から最初のh2見出しを取得する
                        $post_content = get_the_content();
                        preg_match('/<h2>(.*?)<\/h2>/', $post_content, $matches);
                        $post_subtitle = isset($matches[1]) ? $matches[1] : '';
                        ?>
                        <li class="p-card__menuList">
                            <figure class="p-card">
                                <img class="p-card__image" src="<?php echo esc_url($post_thumbnail_url); ?>" alt="<?php echo esc_attr($post_title); ?>">
                                <figcaption class="p-card__content">
                                    <div class="p-card__textBox">
                                        <h3 class="p-card__title c-bold"><?php echo esc_html($post_title); ?></h3>
                                        <h4 class="p-card__title-sub c-bold"><?php echo esc_html($post_subtitle); ?></h4>
                                        <p class="p-card__text"><?php echo esc_html($post_excerpt); ?></p>
                                    </div>
                                    <a class="p-card__button c-button--white c-bold" href="<?php the_permalink(); ?>">詳しく見る</a>
                                </figcaption>
                            </figure>
                        </li>
                        <?php
                    endwhile;
                else : ?>
                    <p><?php _e('There are no posts to display.', 'hamburger'); ?></p>
                <?php 
            endif;
            ?>
            </ul>
        </section>
        <!--  ページネーション  -->
        <?php wp_pagenavi(); ?>
    </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
