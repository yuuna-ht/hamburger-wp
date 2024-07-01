<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
    ?>
        <main id="post-<?php the_ID(); ?>" <?php post_class('l-main--single p-main c-main__grid'); ?>>
            <!-- mainタグには投稿のIDとCSSクラスを設定 -->
            <div class="p-mainVisual--single c-mainVisual" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
                <!-- 投稿のアイキャッチ画像をメインビジュアルの背景として使用 -->
                <h1 class="p-mainVisual--single__title c-bold"><?php the_title(); ?></h1>
                <!-- 投稿タイトルをメインビジュアルのタイトルとして使用 -->
            </div>
            <div class="p-article__wrapper c-wrapper">
                <article class="p-article">
                    <?php the_content(); ?>
                    <!-- articleタグ内で投稿の内容を表示 -->
                    <div class="p-content-hidden">
                        <?php the_tags(); ?>
                    </div>
                    <?php
                    $args = array(
                        'before'      => '<div class="page-split">',
                        // ラッパー用の開始タグ
                        'after'       => '</div>',
                        // ラッパーの閉じタグ
                        'link_before' => '<span>',
                        // リンクの前に表示するタグ
                        'link_after'  => '</span>',
                        // リンクの後ろに表示するタグ
                    );
                    wp_link_pages($args);
                    // 指定されたオプションを使って、ページ分割リンクを出力。
                    // 投稿が複数ページに分割されている場合にそれぞれのページへのリンクが生成され、指定されたHTMLが各要素に適用される
                    ?>
                </article>
            </div>
        </main>
    <?php
    endwhile;
else :
    ?>
    <!-- 投稿がない場合のメッセージ -->
    <p><?php esc_html_e('There are no articles to display.', 'hamburger'); ?></p>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>


