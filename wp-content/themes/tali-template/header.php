<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>

<div class="container">
	<header class="row">
	<div class="col-md-4">
		<a href="index.html"><img class="mainlogo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png"></a>
		<h2 class="title"><a style="color:#000" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
	</div>
	<div class="col-md-6">

		<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav" aria-expanded="false">
								<span class="sr-only">Меню</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="topnav">
							<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
								'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
								'container'=> false, // обертка списка, тут не нужна
						  		'menu_id' => 'top-nav-ul', // id для ul
						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
						  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false		  		
					  			);
								wp_nav_menu($args); // выводим верхнее меню
							?>
						</div>
		</nav>
	</div>
	<div id="top-phone" class="col-md-2 text-right">
	
		<strong>8-800-700-88-47</strong><br>
		Звонок по России бесплатный
	</div>
	<!-- 
	<div id="icons" class="col-md-7">
		<ul class="list-inline mainmenu text-center icons_top">
		  <li><a href=""><div  id="tali_rus"></div></a></li>
		  <li><a href=""><div  id="tali_rus_zap"></div></a></li>
		  <li><a href=""><div  id="tali_bolg"></div></a></li>
		  <li><a href=""><div  id="tali_bolg_zap"></div></a></li>
		  <li><a href=""><div  id="tali_ruh"></div></a></li>
		  <li><a href=""><div  id="kranes"></div></a></li>
		  <li><a href=""><div  id="kranes_zap"></div></a></li>
		  <li><a href=""><div  id="gruz_magne"></div></a></li>
		  <li><a href=""><div  id="greyfers"></div></a></li>
		  <li><a href=""><div  id="vesy"></div></a></li>
		  <li><a href=""><div  id="chertezhy"></div></a></li>
		  <li><a href=""><div  id="electrika"></div></a></li>
		</ul>
	</div>  -->
	
	
	
	
</header>
</div>

	
<div class="container">
<div id="wrapper">
