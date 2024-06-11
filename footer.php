<footer class="l-footer p-footer c-footer__grid">
    <nav class="p-footer__nav">
        <?php
            wp_nav_menu( array(
                'theme_location' => 'footer_menu',
                'container' => false,
                'menu_class' => 'p-footer__nav',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            ) );
        ?>
    </nav>
    <small class="p-footer__copy">Copyright: RaiseTech</small>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
