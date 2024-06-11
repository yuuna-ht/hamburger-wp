<aside class="l-sidebar p-sidebar c-sidebar__grid">
    <button class="p-sidebar__closeButton js-menuEvent">
        <span>メニューを閉じる</span>
    </button>
    <h2 class="p-sidebar__menu c-roboto">Menu</h2>
    <?php
    wp_nav_menu( array(
        'theme_location' => 'sidebar_menu',
        'container' => false,
        'menu_class' => 'p-menu',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    ));
    ?>
</aside>
