<?php
/*single.php*
	各投稿の個別ページ。まぁほぼ必須。個別記事のページにだけブクマボタンや広告表示をつけたり等活躍します。
 */
?>
<?php get_header(); ?>

<div id="main">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header>
<h1 class="posttitle"><?php the_title(); ?></h1>
<time pubdate="pubdate" class="postdate">Posted on <?php the_time('Y年n月j日(D) H:i'); ?></time>
</header>

<?php the_post_thumbnail(); 
	//アイキャッチ画像の出力 ?>

<?php the_content();
	//投稿本文の出力 ?>
	
<?php //ページ分割<!--nextpage-->を使った場合に、ページャーを出力
	wp_link_pages('before=<nav class="pagerSinglepage"><ul><li>ページ</li>&after=</ul></nav>&next_or_number=number&pagelink=<li>%</li>'); ?>

<footer class="postinfo">
<!--　自分は↓こんな感じでsingleページにだけTweetボタンやソーシャルブクマのボタンを入れたりします。　
<a href="http://twitter.com/share" target="_blank" class="twitter-share-button" data-count="horizontal" data-lang="ja">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>-->
カテゴリー: <?php the_category(', ') ?><?php the_tags('｜タグ: ', ', ', ''); ?><br />
<?php comments_popup_link('コメントorトラックバックはまだありません', '1 件のコメントorトラックバック', '% 件のコメントorトラックバック'); ?><?php edit_post_link('この投稿を編集する', '｜', ''); ?>
</footer>

</article><!-- /.entry -->

<?php comments_template(); 
	//コメント欄の出力 ?>

<?php endwhile; endif; ?>

<!-- 次のページ／前のページへのテキストリンクを出力 -->
<nav class="pagelink">
<span class="pageprev"><?php previous_post_link('&laquo; %link') ?></span>
<span class="pagenext"><?php next_post_link('%link &raquo;') ?></span>
</nav>
<!-- /ページ送りのリンクここまで -->
</div><!-- /#main -->

<?php get_sidebar();?>

<?php get_footer(); ?>
<!-- /single.php -->