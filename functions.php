<?php
/* functions.php *
	テーマにさまざまな付加機能を設定するためのファイル。
 */
 
//コンテンツ幅定義
if ( ! isset( $content_width ) )
	$content_width = 640;
 
// wp_head()の出力タグの消去
	remove_action('wp_head', 'wp_enqueue_scripts', 1);
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
	remove_action('wp_head', 'feed_links_extra',3,0);
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'parent_post_rel_link');
	remove_action('wp_head', 'start_post_rel_link');
	remove_action('wp_head', 'rel_canonical');

// ウィジェット有効化 
    register_sidebars( 5, array( //ここの数字で許可するウィジェット数を指定
		//ウィジェット項目の前後に出力するタグ
        'before_widget' => '<aside class="widget">',
        'after_widget' => '</aside>',
		//ウィジェット項目のタイトル前後に出力するタグ
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

// カスタムメニュー有効化 
	register_nav_menus( array(
		'global' => 'グローバルナビゲーション',
	//2つ目のメニューを作りたい時は上の行と同様に増やす
	//'menu-slug' => 'メニューの日本語名'
	));

//カスタムヘッダー機能有効化
add_theme_support( 'custom-header', array(
	'width'         => 940,
	'height'        => 240,
	'default-image' => get_template_directory_uri() . '/img/headerimg.jpg',
));

//背景画像をアップロードして変更できる機能を有効化
	add_theme_support( 'custom-background' );

//投稿とコメントの RSS フィードリンクを有効化
	add_theme_support('automatic-feed-links');

//　アイキャッチ画像に対応
	add_theme_support( 'post-thumbnails' );
	//　↓width,height,切り抜き(true)orリサイズ(false)
	set_post_thumbnail_size( 650, 160, true );

//ビジュアルエディタ用のCSSを有効化
	add_editor_style('editor-style.css');

//「続きを読む」クリック後のURLから#more-$id を削除
	function custom_content_more_link( $output ) {
		$output = preg_replace('/#more-[\d]+/i', '', $output );
		return $output;
	}
	add_filter( 'the_content_more_link', 'custom_content_more_link' );
