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
	<div class="col-md-3 col-sm-3 col-xs-6 head-logo">
		<a href="<?php echo get_site_url(); ?>"><img class="mainlogo hidden-xs hiden-sm" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png"></a>
		<h1 class="title"><a style="color:#000" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Барнаульские<br />тали</a></h1>
	</div>
	<div class="col-md-9">
        <div class="row">
            <nav class="navbar nav-flex col-md-9 col-sm-9 col-xs-6">
                <div class="navbar-header text-right">

                    <button id="bt-menu" type="button" class="navbar-toggle btn btn-primary" data-toggle="collapse" data-target="#navmenu" aria-expanded="false">
                        Меню
                    </button>

                    <div class="collapse navbar-collapse" id="navmenu"> <!-- верхнее меню -->
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

                </div>




            </nav>
            <div id="top-phone" class="col-md-3 text-right">

                <strong>8-800-700-88-47</strong><br>
                Звонок по России бесплатный
            </div>
            <div class="col-md-12">
                <div class="icons hidden-xs hidden-sm">
                    <ul class="list-inline text-center">
                        <li><a href="<?php echo get_site_url(); ?>/catalog/tali_electrich_rossij/"><div  id="tali_rus"></div></a></li>
                        <li><a href="<?php echo get_site_url(); ?>/catalog/zapchasti/"><div  id="tali_rus_zap"></div></a></li>
                        <li><a href="<?php echo get_site_url(); ?>/tali_electrich_bolgarij"><div  id="tali_bolg"></div></a></li>
                        <li><a href="<?php echo get_site_url(); ?>/catalog/zapchasti_bolgariya/"><div  id="tali_bolg_zap"></div></a></li>
                        <li><a href="<?php echo get_site_url(); ?>/catalog/tali_ruchnie/"><div  id="tali_ruh"></div></a></li>
                        <li><a href="<?php echo get_site_url(); ?>/catalog/krani"><div  id="kranes"></div></a></li>
                        <li><a href="<?php echo get_site_url(); ?>/catalog/zapchasti-kran"><div  id="kranes_zap"></div></a></li>
                        <li><a href="<?php echo get_site_url(); ?>/catalog/elektro-magnity"><div  id="gruz_magne"></div></a></li>
                        <li><a href="<?php echo get_site_url(); ?>/catalog/greyfery"><div  id="greyfers"></div></a></li>
                        <li><a href="<?php echo get_site_url(); ?>/catalog/kranovye-vesy"><div  id="vesy"></div></a></li>
                        <li><a href="<?php echo get_site_url(); ?>/catalog/izgotovlenie-po-chertezham"><div  id="chertezhy"></div></a></li>
                        <li><a href="<?php echo get_site_url(); ?>/catalog/electrika"><div  id="electrika"></div></a></li>
                    </ul>
                </div>
            </div>


	</div>


        <div class="row visible-xs visible-sm">

            <div class="col-xs-6">
                <dl>
                    <dt>8-800-700-88-47</dt>
                    <dd>Звонок по России бесплатный</dd>
                </dl>
            </div>
            <div class="col-xs-6 text-right">
                <dd>
                    <dd><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mail1.png" /> <a href="mailto:barnaul@tali.ru" target="_blank">barnaul@tali.ru</a></dd>
                    <dd><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/skype1.png" /> <a href="skype:telfer.barnaul?call" target="_blank">telfer.barnaul</a></dd>
                    <dd><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icq1.png"> 452081423</dd>
                </dd>
            </div>


        </div>


</header>
</div>

	
<div class="container">
<div id="wrapper">
