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
        <main class="l-main--single p-main c-main__grid">
<!-- メインビジュアル -->
            <div class="p-mainVisual--single c-mainVisual">
                <h1 class="p-mainVisual--single__title c-bold">h1 チーズバーガー</h1>
            </div>
<!-- アーティクル -->
            <div class="p-article__wrapper c-wrapper">
                <article class="p-article">
                    <h2 class="c-bold c-margin--top">見出しh2</h2>
                    <p class="c-margin--top">Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。</p>
                    <h3 class="c-bold c-margin--top">見出しh3</h3>
                    <h4 class="c-bold c-margin--top">見出しh4</h4>
                    <h5 class="c-bold c-margin--top">見出しh5</h5>
                    <h6 class="c-bold c-margin--top">見出しh6</h6>
<!-- 引用 -->
                    <div class="p-quote c-margin--top">
                        <blockquote>
                            <p>Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
                        </blockquote>
                        <p class="p-quote__cite c-margin--top">出典元：<cite><a class="c-link" href="#"> ○○○○○○○○○○○○</a></cite></p>
                    </div>
<!-- 画像と説明文 -->
                    <img src="../images/article-image.jpg" alt="ハンバーガーとポテトとドリンクのセット" class="p-article__image c-margin--top">
                    <figure class="p-figure --left c-margin--top">
                        <img src="../images/article-image.jpg" alt="" class="p-figure__image">
                        <figcaption class="p-figure__caption"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります </figcaption>
                    </figure>
                    <figure class="p-figure --right c-margin--top">
                        <img src="../images/article-image.jpg" alt="" class="p-figure__image">
                        <figcaption class="p-figure__caption"> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります </figcaption>
                    </figure>
                    <img src="../images/article-image.jpg" alt="ハンバーガーとポテトとドリンクのセット" class="p-article__image--center c-margin--top">
                    <div class="p-gallery c-margin--top">
                        <img src="../images/article-image.jpg" alt="ハンバーガーとポテトとドリンクのセット" class="p-gallery__image">
                        <img src="../images/article-image.jpg" alt="ハンバーガーとポテトとドリンクのセット" class="p-gallery__image">
                        <img src="../images/article-image.jpg" alt="ハンバーガーとポテトとドリンクのセット" class="p-gallery__image">
                        <img src="../images/article-image.jpg" alt="ハンバーガーとポテトとドリンクのセット" class="p-gallery__image">
                        <img src="../images/article-image.jpg" alt="ハンバーガーとポテトとドリンクのセット" class="p-gallery__image">
                        <img src="../images/article-image.jpg" alt="ハンバーガーとポテトとドリンクのセット" class="p-gallery__image">
                        <img src="../images/article-image.jpg" alt="ハンバーガーとポテトとドリンクのセット" class="p-gallery__image">
                        <img src="../images/article-image.jpg" alt="ハンバーガーとポテトとドリンクのセット" class="p-gallery__image">
                        <img src="../images/article-image.jpg" alt="ハンバーガーとポテトとドリンクのセット" class="p-gallery__image">
                    </div>
<!-- リスト -->
                    <ol class="p-article__list c-margin--top">
                        <li class="c-list--ordered">リストリストリスト</li>
                        <li class="c-list--ordered">リストリストリスト</li>
                            <ol class="p-article__sublist">
                                <li class="c-list--ordered">リストリストリスト2</li>
                                <li class="c-list--ordered">リストリストリスト2</li>
                            </ol>
                        <li class="c-list--ordered">リストリストリスト</li>
                        <li class="c-list--ordered">リストリストリスト</li>
                    </ol>
                    <ul class="p-article__list c-margin--top">
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                            <ul class="p-article__sublist">
                                <li>リストリストリスト2</li>
                                <li>リストリストリスト2</li>
                            </ul>
                        <li>リストリストリスト</li>
                        <li>リストリストリスト</li>
                    </ul>
<!-- コード表示 -->
                    <pre class="p-article__codeBlock c-margin--top">
<code class="p-article__codeBlock__code">&lt;html&gt;
    &lt;head&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
<!-- 表 -->
                    <table class="p-table c-margin--top">
                        <tr class="p-table__row">
                            <td class="p-table__column --1">テーブル</td><td class="p-table__column --2">テーブル</td>
                        </tr>
                        <tr class="p-table__row">
                            <td class="p-table__column --1">テーブル</td><td class="p-table__column --2">テーブル</td>
                        </tr>
                        <tr class="p-table__row">
                            <td class="p-table__column --1">テーブル</td><td class="p-table__column --2">テーブル</td>
                        </tr>
                        <tr class="p-table__row">
                            <td class="p-table__column --1">テーブル</td><td class="p-table__column --2">テーブル</td>
                        </tr>
                        <tr class="p-table__row">
                            <td class="p-table__column --1">テーブル</td><td class="p-table__column --2">テーブル</td>
                        </tr>
                    </table>
<!-- ボタン -->
                    <button class="p-article__button c-button--gray c-margin--top">ボタン</button>
<!-- テキスト -->
                    <p class="p-article__text c-bold c-margin--top">boldboldboldboldboldboldbold</p>
                </article>
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