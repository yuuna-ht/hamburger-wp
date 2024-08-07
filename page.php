<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>

        <main id="post-<?php the_ID(); ?>" <?php post_class('l-main--single p-main c-main__grid'); //mainタグには投稿のIDとCSSクラスを設定 ?>>
            <div class="p-mainVisual--page c-mainVisual" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url()); // 投稿のアイキャッチ画像をメインビジュアルの背景として使用 ?>');">
                <h1 class="p-mainVisual--page__title c-bold"><?php the_title(); // 投稿タイトルをメインビジュアルのタイトルとして使用 ?></h1>
            </div>
            <?php get_template_part('article'); // 投稿の内容を表示 ?>
        </main>

    <?php
        endwhile;
        else : // 投稿がない場合のメッセージ
    ?>
        <p><?php esc_html_e('No posts to display.', 'hamburger'); ?></p>
    <?php
    endif;
    ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
