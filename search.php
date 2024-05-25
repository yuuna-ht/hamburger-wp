<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="オンラインスクールのRaiseTechでの最終課題です。">
    <title>Hamburger-site</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="../scss/foundation/_ress.scss" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="../images/H.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../jQuery/jquery-3.7.1.min.js"></script>
    <script src="../js/script.js" defer></script> 
</head>
<body>
<!-- サイドバー出現時のオーバーレイ -->
    <div class="p-overlay js-menuEvent"></div>
<!-- サイト全体のグリッドレイアウト -->
    <div class="p-container">
<!-- ヘッダー -->
        <header class="l-header p-header c-header__grid">
            <button class="p-header__menu c-roboto js-nav__button">Menu</button>
            <h1 class="p-header__logo c-roboto"><a href="/html/front-page.html">Hamburger</a></h1>
            <form class="p-searchForm" action="#" method="get">
                <label class="c-readerText" for="search">検索</label>
                <div class="p-searchBox">
                    <input class="p-searchBox__input c-input c-bold" type="search" name="search" value="チーズバーガー">
                    <img src="../images/search.ico" alt="虫眼鏡" class="p-searchBox__icon">
                </div>
                <input class="p-searchForm__submit c-button--gray" type="submit" value="検索">
            </form>
        </header>
<!-- メイン -->
        <main class="l-main p-main c-main__grid">
<!-- メインビジュアル -->
            <div class="p-mainVisual--archive c-mainVisual--left">
                <h1 class="p-mainVisual--archive__title c-roboto">Search:</h1>
                <p class="c-bold">チーズバーガー</p>
            </div>
<!-- イントロダクション -->
            <div class="p-archive c-wrapper">
                <section class="p-archive__main">
                    <h2 class="p-introduction__title c-bold">小見出しが入ります</h2>
                    <p class="p-introduction__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
<!-- メニューカード -->
                    <ul class="p-card__menu">
                        <li class="p-card__menuList">
                            <figure class="p-card">
                                <img class="p-card__image" src="/images/card-img.jpg" alt="メニュー画像">
                                <figcaption class="p-card__content">
                                    <div class="p-card__textBox">
                                        <h3 class="p-card__title c-bold">見出しが入ります</h3>
                                        <h4 class="p-card__title-sub c-bold">小見出しが入ります</h4>
                                        <p class="p-card__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    </div>
                                    <a class="p-card__button c-button--white c-bold" href="single.html">詳しく見る</a>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="p-card__menuList">
                            <figure class="p-card">
                                <img class="p-card__image" src="/images/card-img.jpg" alt="">
                                <figcaption class="p-card__content">
                                    <div class="p-card__textBox">
                                        <h3 class="p-card__title c-bold">見出しが入ります</h3>
                                        <h4 class="p-card__title-sub c-bold">小見出しが入ります</h4>
                                        <p class="p-card__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    </div>
                                    <a class="p-card__button c-button--white c-bold" href="#">詳しく見る</a>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="p-card__menuList">
                            <figure class="p-card">
                                <img class="p-card__image" src="/images/card-img.jpg" alt="">
                                <figcaption class="p-card__content">
                                    <div class="p-card__textBox">
                                        <h3 class="p-card__title c-bold">見出しが入ります</h3>
                                        <h4 class="p-card__title-sub c-bold">小見出しが入ります</h4>
                                        <p class="p-card__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    </div>
                                    <a class="p-card__button c-button--white c-bold" href="#">詳しく見る</a>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="p-card__menuList">
                            <figure class="p-card">
                                <img class="p-card__image" src="/images/card-img.jpg" alt="">
                                <figcaption class="p-card__content">
                                    <div class="p-card__textBox">
                                        <h3 class="p-card__title c-bold">見出しが入ります</h3>
                                        <h4 class="p-card__title-sub c-bold">小見出しが入ります</h4>
                                        <p class="p-card__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    </div>
                                    <a class="p-card__button c-button--white c-bold" href="#">詳しく見る</a>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="p-card__menuList">
                            <figure class="p-card">
                                <img class="p-card__image" src="/images/card-img.jpg" alt="">
                                <figcaption class="p-card__content">
                                    <div class="p-card__textBox">
                                        <h3 class="p-card__title c-bold">見出しが入ります</h3>
                                        <h4 class="p-card__title-sub c-bold">小見出しが入ります</h4>
                                        <p class="p-card__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                                    </div>
                                    <a class="p-card__button c-button--white c-bold" href="#">詳しく見る</a>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </section>
<!--  ページネーション  -->
                <ul class="p-pagenation">
                    <li class="p-pagenation__notspList c-roboto">page 1/10</li>
                    <li class="p-pagenation__list"><a class="p-pagenation__link -pre">前へ</a></li>
                    <li class="p-pagenation__notspList c-roboto"><a class="c-pageNamber--this">1</a></li>
                    <li class="p-pagenation__notspList c-roboto"><a class="c-pageNamber" href="#">2</a></li>
                    <li class="p-pagenation__notspList c-roboto"><a class="c-pageNamber" href="#">3</a></li>
                    <li class="p-pagenation__notspList c-roboto"><a class="c-pageNamber" href="#">4</a></li>
                    <li class="p-pagenation__notspList c-roboto"><a class="c-pageNamber" href="#">5</a></li>
                    <li class="p-pagenation__notspList c-roboto"><a class="c-pageNamber" href="#">6</a></li>
                    <li class="p-pagenation__notspList c-roboto"><a class="c-pageNamber" href="#">7</a></li>
                    <li class="p-pagenation__notspList c-roboto"><a class="c-pageNamber" href="#">8</a></li>
                    <li class="p-pagenation__notspList c-roboto"><a class="c-pageNamber" href="#">9</a></li>
                    <li class="p-pagenation__list"><a class="p-pagenation__link -next" href="#">次へ</a></li>
                </ul>
            </div>
        </main>
<!-- サイドバー -->
        <aside class="l-sidebar p-sidebar c-sidebar__grid">
            <button class="p-sidebar__closeButton js-menuEvent">
                <span>メニューを閉じる</span>
            </button>
            <h2 class="p-sidebar__menu c-roboto">Menu</h2>
            <ul class="p-menu">
                <li class="p-menu__title c-bold"><h3><a href="archive.html">ハンバーガー</a></h3>
                    <ul class="p-menu__item">
                        <li class="p-menu__list"><a href="single.html">ハンバーガー</a></li>
                        <li class="p-menu__list"><a href="single.html">チーズバーガー</a></li>
                        <li class="p-menu__list"><a href="single.html">テリヤキバーガー</a></li>
                        <li class="p-menu__list"><a href="single.html">アボカドバーガー</a></li>
                        <li class="p-menu__list"><a href="single.html">フィッシュバーガー</a></li>
                        <li class="p-menu__list"><a href="single.html">ベーコンバーガー</a></li>
                        <li class="p-menu__list"><a href="single.html">チキンバーガー</a></li>
                    </ul>
                <li class="p-menu__title c-bold"><h3><a href="archive.html">サイド</a></h3>
                    <ul class="p-menu__item">
                        <li class="p-menu__list"><a href="single.html">ポテト</a></li>
                        <li class="p-menu__list"><a href="single.html">サラダ</a></li>
                        <li class="p-menu__list"><a href="single.html">ナゲット</a></li>
                        <li class="p-menu__list"><a href="single.html">コーン</a></li>
                    </ul>
                <li class="p-menu__title c-bold"><h3><a href="archive.html">ドリンク</a></h3>
                    <ul class="p-menu__item">
                        <li class="p-menu__list"><a href="single.html">コーラ</a></li>
                        <li class="p-menu__list"><a href="single.html">ファンタ</a></li>
                        <li class="p-menu__list"><a href="single.html">オレンジ</a></li>
                        <li class="p-menu__list"><a href="single.html">アップル</a></li>
                        <li class="p-menu__list"><a href="single.html">紅茶（Ice/Hot）</a></li>
                        <li class="p-menu__list"><a href="single.html">コーヒー（Ice/Hot）</a></li>
                    </ul>
                </li>
            </ul>
        </aside>
<!-- フッター -->
        <footer class="l-footer p-footer c-footer__grid">
            <ul class="p-footer__nav">
                <li class="p-footer__navList"><a href="page.html">ショップ情報</a></li>
                <li class="p-footer__navList"><a href="#">ヒストリー</a></li>
            </ul>
            <small class="p-footer__copy">Copyright: RaiseTech</small>
        </footer>
    </div>
</body>
</html>