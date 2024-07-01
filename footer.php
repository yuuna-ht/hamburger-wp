<footer class="l-footer p-footer c-footer__grid">
    <nav class="p-footer__nav">
        <?php
        // フッターメニューを表示する
        wp_nav_menu( array(
            'theme_location' => 'footer_menu', // 表示するメニューの場所をテーマのフッターメニューへ指定
            'container' => false, // デフォルトで生成されるコンテナを無効にする
            'menu_class' => 'p-footer__nav', // メニューに適用するクラス名を指定
            'items_wrap' => '<ul class="%2$s">%3$s</ul>', // メニュー項目をラップする方法を指定
        ) );
        ?>
    </nav>
    <small class="p-footer__copy">
        <?php esc_html_e('Copyright: RaiseTech', 'hamburger'); ?>
    </small>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
