<!-- サイドバー全体（メニュー）のコンテナ -->
<aside class="l-sidebar p-sidebar c-sidebar__grid">
    <!-- サイドバーを閉じるボタン -->
    <button class="p-sidebar__closeButton js-menuEvent">
        <span><?php esc_html_e( 'Close Menu', 'hamburger' ); ?></span>
    </button>
    <h2 class="p-sidebar__menu c-roboto"><?php esc_html_e( 'Menu', 'hamburger' ); ?></h2>
    <?php
    wp_nav_menu( array( // カスタムメニューの表示
        'theme_location' => 'sidebar_menu', // 'sidebar_menu'というテーマの位置に登録されたメニューを表示
        'container' => false,               // ここでのメニューを囲むコンテナは<aside>要素のため、余分コンテナ要素を出力しない
        'menu_class' => 'p-menu',           // メニューのul要素に'p-menu'というクラスを指定→CSSでスタイルを設定可に
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', // メニュー項目をラップするためのHTML
    ));
    ?>
</aside>
