<?php
/* sidebar.php *
	右側のサブカラム部分。複数ウィジェットに対応。
 */
?>
<!-- sidebar.php start -->
<div id="side">
<?php
	//サイドバー1
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) :
?>
<!--　サイドバー1が使われていない時に表示する内容　-->
	<aside class="widget">
    <h2>カレンダー</h2>
    <?php get_calendar(); ?>
    </aside> 
    
	<aside class="widget">
    <h2>カテゴリー</h2>
    <ul>
    <?php wp_list_categories('title_li='); ?>
    </ul>
    </aside> 

	<aside class="widget">
    <h2>最近の投稿</h2>
    <ul>
    <?php wp_get_archives('type=postbypost&limit=5'); ?>
    </ul>
    </aside> 

	<aside class="widget">
    <h2>月別の投稿一覧</h2>
    <ul>
    <?php wp_get_archives(); ?>
    </ul>
    </aside> 
<!--　ここまで　-->
<?php endif; ?>

<?php
	//サイドバー2
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : 
?>
<!--　サイドバー2が使われていない時に表示する内容を記述　-->
<!--　ここまで　-->  
<?php endif; ?>

</div><!-- / #side -->
<!-- /sidebar.php -->