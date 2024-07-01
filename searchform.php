<form class="p-searchForm" action="<?php echo esc_url(home_url('/')); ?>" method="get">
    <label class="screen-reader-text" for="search">検索</label>
    <div class="p-searchBox">
        <input class="p-searchBox__input c-input" type="search" name="s" id="s">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/search.ico" alt="虫眼鏡" class="p-searchBox__icon">
    </div>
    <input class="p-searchForm__submit c-button--gray" type="submit" value="検索">
</form>
