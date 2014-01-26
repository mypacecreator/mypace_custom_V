<?php
/* footer.php *
　すべてのページにおいて共通で読み込むフッターテンプレート。
 */
?>
<!-- footer.php start -->
<p class="pagetop"><a href="#wrapper">▲Pagetop</a></p>
<footer id="footer">

<div class="footerWidget">
<?php
	//サイドバー3
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) :
?>
<!--　ウィジェット3が使われていない時に表示する内容を記述　-->   
	<aside class="widget"> 
    <h2>カテゴリー</h2>
    <ul>
    <?php wp_list_categories('title_li='); ?>
    </ul>
    </aside>
<!--　ここまで　-->    
<?php endif; ?>
</div>

<div class="footerWidget">
<?php
	//サイドバー4
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) : 
?>
<!--　サイドバー4が使われていない時に表示する内容を記述　-->
<!--　ここまで　-->
<?php endif; ?>
</div>

<div class="footerWidget">
<?php
	//サイドバー5
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(5) ) : 
?>
<!--　サイドバー5が使われていない時に表示する内容を記述　-->
<!--　ここまで　-->
<?php endif; ?>
</div>

<p class="copyright">Copyright(c)<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>. All rights reserved.</p>
<p class="credit">Powered by <a href="http://ja.wordpress.org/">WordPress</a> / <a href="http://mypacecreator.net/theme/category/mypace-custom-v/">mypace custom V theme</a></p>
</footer><!-- /#footer-->
</div><!-- /#wrapper-->
<?php wp_footer(); ?>
</body>
</html>