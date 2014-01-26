#HTML5版！PHPの分からない初心者向けフリーWordPressテーマ『mypace custom V(five)』
* by Kei Nomura(@mypacecreator) / ozone notes
* http://mypacecreator.net/theme/


##お約束事


* ライセンスは、WorePress本体と同じGPLライセンスを適用します。その範囲内で商用・非商用にかかわらず無償で自由に改変・複製してご利用いただけます。
（WordPressのテーマライセンスについては、作者ブログ『自作WordPressテーマのライセンスについて調べてみた | マイペースクリエイターの覚え書き』をご一読ください。
　http://mypacecreator.net/blog/archives/169）
* 著作権表記はstyle.cssとfooter.phpに記載してあります。どちらも残していただければ幸いですが、上記のルールをしっかり理解したうえで、ちゃんと自分で手を加えたものに対して私の名前をそっと消していただく分には、構わないかと思います。最悪style.cssの表記くらい残してもらえればOKです。
* うまくカスタマイズできた成功例や、逆にここつまづいたけどこうやったら出来た、等の情報はできるだけブログやソーシャルメディア等にUPしてみんなで共有しましょう。
* 質問があれば受けたいと思いますが、仕事の合間に有志で行っていますので、出来る範囲での対応となります。
* でも、ぐーぐるさんや書籍などを駆使してなるべく自分で調べてください。自分で苦労しながら調べることが上達への近道です。
* 一刻も早い回答や手厚いサポートをお求めの方は、有償サポート（ozone notes http://www.ozonenotes.jp/ )までご連絡ください。

##動作確認Ver

WordPress日本語版 3.4～3.5.1


##ファイル構成（HTML5版：mypace custom V(five) 1.1）
（☆印はこのテーマでの必要最低限のファイル 無印はなくても一応動くファイル）

* style.css☆
* archive.php 
* header.php☆
* index.php☆
* home.php
* loop.php☆
* footer.php☆
* sidebar.php☆
* page.php
* pagetemplate.php
* comments.php
* single.php
* 404.php
* functions.php
* screenshot.png
* img/headerimg.jpg


##当バージョンでの変更箇所（HTML5版：mypace custom V(five) 1.1）

* bloginfo('url')タグ　→　echo home_url()に差し替え
* bloginfo('template_url')タグ　→　echo get_template_directory_uri()に差し替え
* プラグイン無しで「WP-PageNavi」プラグイン風のページャーを出力する機能を廃止。（初心者にはコードが難解なため）
* head要素のlang指定を<?php language_attributes(); ?>タグに差し替え
* 投稿表示部分に<?php the_ID(); ?><?php post_class(); ?>を追加
* functions.phpに$content_width（コンテンツ幅）定義を追加
* functions.phpにadd_theme_support('automatic-feed-links');を追加
* 以下のファイルの<?php get_header(); ?>上のコメント（<!-- *****.php start -->）を削除（IEの後方互換問題解消のため）［index.php/archive.php/header.php/home.php/page.php/pagetemplate.php/single.php/404.php］
* ページタイトルの出力コードをloop.php内→index.php/archive.php内へ移動
* single.php内　次のページ／前のページへのテキストリンクを、投稿の下部のみに変更
* comments.php内　コメント表示部分に<?php comment_class(); ?>を追加


##過去の変更履歴（HTML5版：mypace custom V 1.1）
* 2011.04.30　またもや勢いだけで公開
* 2012.06.15　Ver1.1配布開始。WordPress3.4の関数推奨状況を踏まえ、記述をいくつか変更。エディタ用CSS、カスタムヘッダー機能を今さら追加。など。

では！良いWordPressライフを★