<div class="p-article__wrapper c-wrapper">
    <article class="p-article">
        <!-- articleタグ内で投稿の内容を表示 -->
        <?php the_content(); ?>
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