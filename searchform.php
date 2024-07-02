<form class="p-searchForm" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <label class="screen-reader-text" for="s"><?php esc_html_e( 'Search', 'hamburger' ); ?></label>
    <div class="p-searchBox">
        <input class="p-searchBox__input c-input" type="search" name="s" id="s">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/search.ico' ); ?>" alt="<?php esc_attr_e( 'Search Icon', 'hamburger' ); ?>" class="p-searchBox__icon">
    </div>
    <input class="p-searchForm__submit c-button--gray" type="submit" value="<?php esc_attr_e( 'Search', 'hamburger' ); ?>">
</form>

