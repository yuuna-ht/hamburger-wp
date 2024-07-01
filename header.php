<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="オンラインスクールのRaiseTechでの最終課題です。">
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>    <!-- プラグインや他のテーマ機能が<body>タグの直後にコンテンツを挿入できるようになる -->
        <!-- サイドバー出現時のオーバーレイ -->
        <div class="p-overlay js-menuEvent"></div>
        <!-- サイト全体のグリッドレイアウト -->
        <div class="p-container">
            <!-- ヘッダー -->
            <header class="l-header p-header c-header__grid">
                <button class="p-header__menu c-roboto js-nav__button">Menu</button>
                <h1 class="p-header__logo c-roboto"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <?php get_search_form(); ?>
            </header>