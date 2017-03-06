<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Тали электрические Россия
 */
get_header(); // подключаем header.php ?>

<?php get_sidebar(); // подключаем sidebar.php ?>
	<div class="col-md-9">
		<div class="banner"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/background-header.jpg" /></div>
	
			<div class="row">
                <div style="background: transparent" class="col-md-12 breadcrumb"><?php if (function_exists('breadcrumbs')) breadcrumbs(); ?></div>
                <div class="col=xs-12 visible-xs visible-sm"><img class="img-responsive" src="<?php the_field( 'main-image' ); ?>" /></div> // картинка в мобильной версии
                <div class="col-md-10">
                    <h1 class="title-post"><?php the_title(); // заголовок поста ?></h1>
                    <h4>Технические характеристики:</h4>
                    <table style="width:100%; max-width: 450px;" class="table visible-lg visible-md visible-sm visible-xs">
                        <tbody>
                            <tr>
                                <td>Грузоподъёмность:</td>
                                <td><?php the_field( 'load-capacity' ); ?></td>
                            </tr>
                            <tr>
                                <td>Высота подъёма:</td>
                                <td><?php the_field( 'lifting-height' ); ?></td>
                            </tr>
                            <tr>
                                <td>Скорость подъёма:</td>
                                <td><?php the_field( 'lifting-speed' ); ?></td>
                            </tr>
                            <tr>
                                <td>Скорость передвижения:</td>
                                <td><?php the_field( 'movement-speed' ); ?></td>
                            </tr>
                            <tr>
                                <td>Температурный режим:</td>
                                <td><?php the_field( 'temperature' ); ?></td>
                            </tr>
                            <tr>
                                <td>Установленная мощность:</td>
                                <td><?php the_field( 'power' ); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-2">
                    <button class="fb-btn"><?php the_field( 'button_text' ); ?> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/coins.png"></button>
                    <br />
                    <button class="fb-btn">Контакты <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/phone.png"></button>
                </div>
                <div class="col-md-12">
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>

                            <?php the_content(); // контент ?>
                        </article>
                    <?php endwhile; // конец цикла ?>
                </div>
                <div class="col-md-12 hidden-xs hidden-sm">
                    <?php the_field( 'textblock1' ); ?> // текстовый блок 1
                </div>
			</div>

			
	</div>
	

<?php get_footer(); // подключаем footer.php ?>