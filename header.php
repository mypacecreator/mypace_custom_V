<?php
/* header.php *
　すべてのページにおいて共通で読み込むヘッダーテンプレート。
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<!--<meta name="description" content="サイトの説明とか" />
<meta name="keywords" content=",,,,,," />-->
<?php if ( is_front_page()): /* トップページでのタイトルタグ表記 */ ?>
<title><?php bloginfo('name'); ?>｜<?php bloginfo('description'); ?></title>
<?php else: /* それ以外のページでのタイトルタグ表記 */ ?>
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo '｜'; } ?><?php bloginfo('name'); ?></title>
<?php endif; ?>
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo '｜'; } ?><?php bloginfo('name'); ?></title>
<?php endif; ?>
<?php wp_enqueue_style( 'bace-style', //cssのID名（任意に指定）
  get_template_directory_uri() . '/style.css', //CSSファイルへのパス
  array(), //もし、依存CSSファイル（ここで指定したCSSより先に読みこまないといけないもの）があるなら、そのIDをarray内に記述。ファイルが1枚しかないなら空でOK
  date('Ymd'), //付与されるバージョン番号。ここでは日付をバージョン番号として使用。必要ないなら空でもOK
  'all' //CSSのmedia type（printとかscreenとか）。空だとallになる。
); ?>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
<header id="header">
	<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
    <p><?php bloginfo('description'); ?></p>
</header><!-- /#header -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<nav id="global">
<?php wp_nav_menu( //カスタムメニュー未使用時は　<div class="menu"><ul><li>...</li></ul></div>　と出力される
	array( //カスタムメニュー使用時は　<ul id="menu-***" class="menu"><li>...</li></ul>（***は作成したメニュー名）となる
        'container' => '',//カスタムメニュー使用時に、ulを囲む要素を指定（指定できるのはdivかnav。空白の場合は囲まない）
        'theme_location' => 'global' //カスタムメニューの識別スラッグ（functions.phpに記載したもの）
 ) ); ?>
</nav>
<!-- /header.php -->