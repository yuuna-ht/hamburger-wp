<form class="p-searchForm" action="#" method="get" action="<!?php echo home_url('/'); ?>">
    <label class="c-readerText" r="search">検索</label>
    <div class="p-searchBox">
        <input class="p-searchBox__input c-input" type="search" name="s" id="s">
        <img src="<?php echo get_template_directory_uri(); ?>/images/search.ico" alt="虫眼鏡" class="p-searchBox__icon">
    </div>
    <input class="p-searchForm__submit c-button--gray" type="submit" value="検索">
</form>