$(function() {
    // ウィンドウのリサイズイベントが発生したときに実行
    function handleResize() {
        if ($(".p-sidebar").hasClass("is-open")) {
            $(".p-sidebar").removeClass("is-open");
        }
        if ($(".p-overlay").hasClass("is-active")) {
            $(".p-overlay").removeClass("is-active");
        }
        if ($(".c-nav__button--close").hasClass("is-active")) {
            $(".c-nav__button--close").removeClass("is-active");
        }
    }

    // ページ読み込み時とウィンドウのリサイズ時に実行される関数を指定
    $(window).on("load resize", handleResize);

    // '.c-nav__button' クリック時の処理
    $('.c-nav__button').on("click", function() {
        $(".p-sidebar").toggleClass("is-open");
        $(".p-overlay").toggleClass("is-active");
        $(".c-nav__button--close").toggleClass("is-active");
    });

    // '.js-menu-event' クリック時の処理
    $('.js-menu-event').on("click", function() {
        $(".p-sidebar").removeClass("is-open");
        $(".p-overlay").removeClass("is-active");
        $(".c-nav__button--close").removeClass("is-active");
    });
});