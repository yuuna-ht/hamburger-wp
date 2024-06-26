<?php
    // 翻訳ファイル読み込み
    function hamburger_theme_setup() {
        load_theme_textdomain('hamburger', get_template_directory().'/languages');
    }
    add_action('after_setup_theme', 'hamburger_theme_setup');

    /* テーマサポート */
    //  管理画面からタイトルタグを登録可能にする
    add_theme_support( 'title-tag' );
    //  投稿ページのアイキャッチ画像のサポートを有効化
    add_theme_support( 'post-thumbnails' );
    //  投稿とコメントのRSSフィードを有効に
    add_theme_support( 'automatic-feed-links' );
    //  カスタムロゴをサポートする
    add_theme_support('custom-logo', array(
        'height'      => 50,
        'width'       => 50,
        'flex-height' => true,  //画像が指定したサイズを超えても自動的にリサイズ
        'flex-width'  => true,  //画像が指定したサイズを超えても自動的にリサイズ
    ));
    //  テーマカスタマイザーでヘッダー画像を設定可能にする
    add_theme_support( "custom-header" );
    //  ブロックエディター（Gutenberg）で使用されるブロックスタイルを登録する
    add_theme_support('wp-block-styles');
    //  レスポンシブな埋め込みコンテンツをサポート
    add_theme_support('responsive-embeds');
    //  HTML5の新しい要素や属性をサポート
    add_theme_support( 'html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    //  「全幅」（Wide Alignment）と呼ばれるブロックの配置オプションをサポート
    add_theme_support('align-wide');
    //  カスタム背景機能を追加、管理画面から簡単に背景画像や色を設定できるようになる
    add_theme_support('custom-background');

    

    /*  管理画面からメニュー登録をする  */
    function hamburger_menus() {
        register_nav_menus( array(
            'sidebar_menu' => 'Sidebar Menu',
            'footer_menu' => 'Footer Menu',
        ));
    }
    add_action('after_setup_theme', 'hamburger_menus');

    /* タイトル出力 */
    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) {   //トップページかつホームページなら
            $title = get_bloginfo( 'name', 'display' ); //サイト名を取得してタイトルに設定
        } elseif ( is_singular() ) {    //シングルページなら
            $title = single_post_title( '', false );    //投稿タイトルを取得してタイトルに設定
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' );  //ドキュメントタイトルを生成する直前に呼び出され、条件に応じて異なるタイトルを設定

    /* Webフォント、CSS、JavaScriptの呼び出し */
    function hamburger_script() {
        // Google Fonts
        wp_enqueue_style( 'm-plus-1p', 'https://fonts.googleapis.com/css2?family=M+PLUS+1p&display=swap', array() );
        wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array() );
        // CSS読み込み
        wp_enqueue_style( 'ress', get_theme_file_uri( 'css/ress.css' ), array(), '5.0.2' );
        wp_enqueue_style( 'main-style', get_theme_file_uri( 'css/hamburger.css' ), array(), '1.0.0' );
        // jQueryを読み込む
        wp_enqueue_script( 'jquery' );
        // メインのスクリプトを読み込む
        wp_enqueue_script( 'main-script', get_theme_file_uri( 'js/script.js' ), array( 'jquery' ), '1.0.0', true );    //ヘッダーで読み込まれる
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    /* エディター側でのスタイリングを有効に */
    function hamburger_theme_add_editor_styles() {
        add_theme_support('editor-styles'); //テーマがエディタースタイルをサポートすることを知らせる
        add_editor_style('/css/editor-style.css');  //ブロックエディター用のスタイルシートを指定する
    }
    add_action('after_setup_theme', 'hamburger_theme_add_editor_styles');

    /* カテゴリー編集画面にカスタムフィールドを追加 */
    function add_category_custom_fields($tag) {
        $term_id = $tag->term_id;
        $category_subtitle = get_term_meta($term_id, 'category_subtitle', true);
        ?>  <!-- PHP終了タグ 下記へHTMLを記述する -->
        <tr class="form-field">
            <th scope="row" valign="top"><label for="category_subtitle">小見出し</label></th>
            <td>
                <input type="text" name="category_subtitle" id="category_subtitle" value="<?php echo esc_attr($category_subtitle) ? esc_attr($category_subtitle) : ''; ?>" />
                <p class="description">カテゴリーの小見出しを入力します。</p>
            </td>
        </tr>
        <?php
    }
    add_action('edit_category_form_fields', 'add_category_custom_fields');

    /* カテゴリー編集画面のカスタムフィールドを保存 */
    function save_category_custom_fields($term_id) {
        if (isset($_POST['category_subtitle'])) {
            update_term_meta($term_id, 'category_subtitle', sanitize_text_field($_POST['category_subtitle']));
        }
    }
    add_action('edited_category', 'save_category_custom_fields');
    add_action('create_category', 'save_category_custom_fields');

    /* ページネーション フィルターを使用してクラス名をカスタマイズ */
    function custom_pagenavi_html($html) {
    // クラス名の置換を正確に行う
    $html = preg_replace('/\bwp-pagenavi\b/', 'p-pagenation', $html);
    $html = preg_replace('/\bpages\b/', 'p-pagenation__pages c-roboto', $html);
    $html = preg_replace('/\bpreviouspostslink\b/', 'p-pagenation__link -pre', $html);
    $html = preg_replace('/\bnextpostslink\b/', 'p-pagenation__link -next', $html);
    $html = preg_replace('/\bcurrent\b/', 'p-pagenation__notspList c-pageNamber--this', $html);
    $html = preg_replace('/\bpage larger\b/', 'p-pagenation__notspList c-roboto', $html);
    $html = preg_replace('/\bpage smaller\b/', 'p-pagenation__notspList c-roboto', $html);
    $html = preg_replace('/\bfirst\b/', 'p-pagenation__notspList c-roboto', $html);
    $html = preg_replace('/\blast\b/', 'p-pagenation__notspList c-roboto', $html);
    $html = preg_replace('/\bextend\b/', 'p-pagenation__extend c-roboto', $html);
    return $html;
}
add_filter('wp_pagenavi', 'custom_pagenavi_html');

/* cardの小見出しで使用 投稿の最初のブロックを取得 */
function get_first_block_content($content) {
    $blocks = parse_blocks($content);       //投稿の本文コンテンツを解析し各ブロックを$blocks配列に格納
    if (!empty($blocks)) {                  //$blocks配列が空でないことを確認
        return render_block($blocks[0]);    //最初のブロックをレンダリングするためにrender_block()関数を使用。$blocks[0]は$blocks配列の最初の要素であり投稿の最初のブロックを示す
    }
    return '';                              //$blocks配列が空であれば空の文字列を返す
}