<?php
    /* 翻訳ファイル読み込み */
    function hamburger_theme_setup(){
        load_theme_textdomain( 'hamburger', get_template_directory() . '/languages' );
        }
    add_action( 'after_setup_theme', 'hamburger_theme_setup' );    

    /* テーマサポート */
    //  カスタムメニューの有効化
    add_theme_support( 'menus' );
    //  管理画面からタイトルタグを登録可能にする
    add_theme_support( 'title-tag' );
    //  投稿ページのアイキャッチ画像のサポートを有効化
    add_theme_support( 'post-thumbnails' );

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
        wp_enqueue_style( 'main-style', get_theme_file_uri( 'css/style.css' ), array(), '1.0.0' );
        // Font Awesome
        wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0', 'all' );
        // jQueryを読み込む
        wp_enqueue_script( 'jquery' );
        // メインのスクリプトを読み込む
        wp_enqueue_script( 'main-script', get_theme_file_uri( 'js/script.js' ), array( 'jquery' ), '1.0.0', true );    //ヘッダーで読み込まれる
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    /* エディター側でのスタイリングを有効に */
    function hamburger_theme_add_editor_styles() {
        add_editor_style( get_template_directory_uri() . "css/editor-style.css" );
    }
    add_action( 'admin_init', 'hamburger_theme_add_editor_styles' );

    /* ファビコン設定でICOファイルを使用できるようにする */
    function temporary_allow_all_uploads($mimes) {
        $mimes['*'] = 'application/octet-stream';
        return $mimes;
    }if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    => 'Theme General Settings',
            'menu_title'    => 'Theme Settings',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_theme_options',
            'redirect'      => false
        ));
    }
    add_filter('upload_mimes', 'temporary_allow_all_uploads');

    function custom_upload_mimes( $existing_mimes ) {
        // ICOファイルを追加する
        $existing_mimes['ico'] = 'image/vnd.microsoft.icon';
        return $existing_mimes;
    }
    add_filter( 'upload_mimes', 'custom_upload_mimes' );

    /* カスタム投稿タイプの利用 */
    function create_custom_post_types() {
        // ブランチメニューのカスタム投稿タイプ
        $args_branch_menu = array(
            'public' => true,
            'label'  => 'ブランチメニュー',
            'supports' => array( 'title', 'editor', 'thumbnail' ), // アイキャッチ画像をサポートする
            'menu_icon' => 'dashicons-portfolio', // ダッシュアイコンからアイコンを選択
        );
        register_post_type( 'branch_menu', $args_branch_menu );

        // メインビジュアルのカスタム投稿タイプ
        $args_main_visual = array(
            'public' => true,
            'label'  => 'Main Visual', // カスタム投稿タイプのラベル
            'supports' => array( 'title', 'thumbnail' ), // タイトルとアイキャッチ画像をサポート
            'menu_icon' => 'dashicons-format-image', // メニューアイコンを指定
        );
        register_post_type( 'main_visual', $args_main_visual );

        // アクセスセクションのカスタム投稿タイプ
        $args_access_section = array(
            'public' => true,
            'label'  => 'Access', // カスタム投稿タイプのラベル
            'supports' => array( 'title', 'editor', 'thumbnail' ), // タイトル、エディター、アイキャッチ画像をサポート
            'menu_icon' => 'dashicons-location', // メニューアイコンを指定
        );
        register_post_type( 'access_section', $args_access_section );
    }
    add_action( 'init', 'create_custom_post_types' );

    /* カスタムタクソノミーの登録 */
    function custom_taxonomy() {
        register_taxonomy(
            'branch_menu_category', // タクソノミーのスラッグ
            'branch_menu', // 関連付けるカスタム投稿タイプのスラッグ
            array(
                'label' => 'Branch Menu Categories', // タクソノミー名
                'rewrite' => array( 'slug' => 'branch-menu-category' ), // スラッグの設定
                'hierarchical' => true, // 階層型（カテゴリー形式）
            )
        );
    }
    add_action( 'init', 'custom_taxonomy' );

    /* カテゴリー編集画面にカスタムフィールドを追加 */
    function add_category_custom_fields($tag) {
        $term_id = $tag->term_id;
        $category_subtitle = get_term_meta($term_id, 'category_subtitle', true);
        ?>
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

    // カテゴリーのカスタムフィールドを保存
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

    return $html;
}
add_filter('wp_pagenavi', 'custom_pagenavi_html');

