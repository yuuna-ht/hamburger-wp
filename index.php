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
                    <input class="p-searchBox__input c-input" type="search" name="search">
                    <img src="../images/search.ico" alt="虫眼鏡" class="p-searchBox__icon">
                </div>
                <input class="p-searchForm__submit c-button--gray" type="submit" value="検索">
            </form>
        </header>
<!-- メイン -->
        <main class="l-main p-main c-main__grid">
<!-- メインビジュアル -->
            <div class="p-mainVisual c-mainVisual">
                <h2 class="p-mainVisual__title c-bold">ダミーサイト</h2>
            </div>
<!-- ブランチメニュー -->
            <div class="c-wrapper">
                <div class="p-branchMenu">
                    <section class="p-branchMenu__list --takeOut c-background__image">
                        <h2 class="p-branchMenu__title c-roboto">Take Out</h2>
                        <div class="p-branchMenu__about">
                            <dl class="p-content">
                                <a href="">
                                    <dd class="p-content__title c-bold">Take Out</dd>
                                    <dt class="p-conten__text">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</dt>
                                </a>
                            </dl>
                            <dl class="p-content">
                                <a href="">
                                    <dd class="p-content__title c-bold">Take Out</dd>
                                    <dt class="p-conten__text">当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています当店のテイクアウトで利用できる商品を掲載しています</dt>
                                </a>
                            </dl>
                        </div>
                    </section>
                    <section class="p-branchMenu__list --eatIn c-background__image">
                        <h2 class="p-branchMenu__title c-roboto">Eat In</h2>
                        <div class="p-branchMenu__about">
                            <dl class="p-content">
                                <a href="">
                                    <dd class="p-content__title c-bold">Eat In</dd>
                                    <dt class="p-conten__text">店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです</dt>
                                </a>
                            </dl>
                            <dl class="p-content">
                                <a href="">
                                    <dd class="p-content__title c-bold">Eat In</dd>
                                    <dt class="p-conten__text">店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです店内でお食事いただけるメニューです</dt>
                                </a>
                            </dl>
                        </div>
                    </section>
                </div>
            </div>
<!--  アクセス  -->
            <section class="p-access c-background__image">
                <div class="p-map__overlay"></div>
                <div class="p-access__overlay"></div>
                <div class="p-access__inner c-bold">
                    <h2 class="p-access__title">見出しが入ります</h2>
                    <p class="p-access__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
            </section>
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