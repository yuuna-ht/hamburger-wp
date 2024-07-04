<?php if ( have_posts() ) : ?>
    <ul class="p-card__menu">
        <?php while ( have_posts() ) : the_post();
            // 投稿がある場合は、ループ内で以下を取得
            $post_id = get_the_ID();    // 投稿ID
            $post_thumbnail_url = get_the_post_thumbnail_url($post_id, 'full'); // アイキャッチ画像
            $post_title = get_the_title();  // 投稿のタイトル
            $post_excerpt = get_the_excerpt();  // 投稿の抜粋
            $post_content = get_the_content();  // // 投稿の内容
            $first_block_content = get_first_block_content($post_content);  // 現在の投稿の内容から最初のブロックを取得するカスタム関数
            
            // アイキャッチ画像がない場合はデフォルト画像を表示
            if (!$post_thumbnail_url) {
                $post_thumbnail_url = esc_url(get_template_directory_uri() . '/images/mainVisual-front.png');
            }
        ?>
            <li class="p-card__menuList">
                <figure class="p-card">
                    <img class="p-card__image" src="<?php echo esc_url($post_thumbnail_url); ?>" alt="<?php echo esc_attr($post_title); // 投稿のアイキャッチ画像を表示 ?>">
                    <figcaption class="p-card__content">
                        <div class="p-card__textBox">
                            <h3 class="p-card__title c-bold"><?php echo esc_html($post_title); // 投稿のタイトルを見出しとして使用 ?></h3>
                            <div class="p-card__title-sub c-bold"><?php echo wp_kses_post( wp_trim_words( $first_block_content, 15, '...' )); // 投稿の最初のブロックを小見出しとして使用 ?></div>
                            <p class="p-card__text"><?php echo esc_html( wp_trim_words( $post_excerpt, 60, '...' ) ); // 投稿の抜粋をテキストとして使用し、60文字以上は「…」で文字を省略 ?></p>
                        </div>
                        <a class="p-card__button c-button--white c-bold" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'Read More', 'hamburger' ); // 投稿のリンクを出力 ?></a>
                    </figcaption>
                </figure>
            </li>
        <?php endwhile; ?>
    </ul>
<?php else : //投稿がない場合のメッセージ ?>
    <p class=p-card__errorMessage><?php esc_html_e('There are no articles to display.', 'hamburger'); ?></p>
<?php endif; ?>
