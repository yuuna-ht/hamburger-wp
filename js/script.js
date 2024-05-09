$(function() {
    // ウィンドウのリサイズイベントが発生したときに実行
    function handleResize() {
        if ($(".l-sidebar").hasClass("is-open")) {
            $(".l-sidebar").removeClass("is-open");
        }
        if ($("body").hasClass("is-open")) {
            $("body").removeClass("is-open");
        }
        if ($(".p-overlay").hasClass("is-active")) {
            $(".p-overlay").removeClass("is-active");
        }
    }

    // ページ読み込み時とウィンドウのリサイズ時に実行される関数を指定
    $(window).on("load resize", handleResize);

    // '.js-nav__button' クリック時の処理
    $('.js-nav__button').on("click", function() {
        $(".l-sidebar").toggleClass("is-open");
        $("body").toggleClass("is-open");
        $(".p-overlay").toggleClass("is-active");
    });

    // '.js-menu-event' クリック時の処理
    $('.js-menuEvent').on("click", function() {
        $(".l-sidebar").removeClass("is-open");
        $("body").removeClass("is-open");
        $(".p-overlay").removeClass("is-active");
    });
});
