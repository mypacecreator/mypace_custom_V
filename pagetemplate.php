<?php
/*
Template Name: サイドバーなし1カラム（このテンプレート名は自由に変更してください）
	カスタムページテンプレートを自由に作れます。ファイル名は適当に変えてください。例えば固定ページをサイトのトップページにしたい場合、"toppage.php"とか作っておくと良い。
*/
?>
<?php get_header(); ?>

<div id="main">

<!--自分は、トップページは↓のページタイトル出力せずに、代わりにメインイメージを入れることが多いです。-->
<h1 class="pagetitle"><?php the_title(); ?></h1>

<p>例えばここに、トップページだけで表示させる画像とか、あいさつ文とか、バナーとか入れておくとそれっぽくなる！</p>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><a href="<?php echo $c_pagelink; ?>"><?php echo $c_title; ?></a></h1>
		<?php echo $c_content; ?>
</section>

</div><!-- /#main -->
<?php get_sidebar();?>
<?php get_footer(); ?>
<!-- /pagetemplate.php -->