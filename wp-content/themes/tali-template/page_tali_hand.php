<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Тали ручные
 */
get_header(); // подключаем header.php ?>

<?php get_sidebar(); // подключаем sidebar.php ?>

    <div id="temn" class="transparent" style="posision: relative; width: 100%; height: 100%; min-height: 100%; top: 0px; left: 0px; background: rgba(0,0,0,.5); position: fixed; overflow: auto; display: none;"></div>
    <div id="send_ok" style="position: absolute; border-radius: 10px; background-color: #e4f6f8; display: none; width: 150px; height: 100px;">
        <p style="vertical-align: middle; text-align: center;">Ваши данные были отправлены.
            <button id="exit" style="margin-top: 25px;">Закрыть</button></p>

    </div>
	<div class="col-md-9">
		<div class="banner"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/background-header.jpg" /></div>
	
			<div class="row">
                <div class="col-md-12"><h1 class="title-post"><?php the_title(); // заголовок поста ?></h1></div>
                <div style="background: transparent" class="col-md-12 breadcrumb"><?php if (function_exists('breadcrumbs')) breadcrumbs(); ?></div>
                <div class="col=xs-12 visible-xs visible-sm"><img style="max-height:300px;" class="img-responsive" src="<?php the_field( 'main-image' ); // картинка в мобильной версии ?>" /></div>
                <div class="row">
                    <div class="col-md-9">
                        <?php the_field('text_intro'); ?>

                    </div>
                    <div class="col-md-3">
                        <button class="fb-btn" data-toggle="modal" data-target="#myModal">Узнать цену <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/coins.png"></button>

                        <button class="fb-btn"><a style="color:#fff; text-decoration: none" href="<?php echo esc_url( home_url( '/' ) ); ?>/contacts">Контакты <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/phone.png"></a></button>
                        <!-- <button class="fb-btn visible-xs visible-sm"  data-toggle="modal" data-target="#myModal2">Оставить заявку</button> -->
                    </div>
                </div>
                <div style="display: flex; justify-content: space-between" class="row">

                    <div class="col-md-2  hidden-xs hidden-sm"><img style="max-height:250px;" class=" img-responsive" src="<?php the_field( 'image1' ); ?>" /></div>

                    <div class="col-md-9">
                        <table class="trest table-border">
                            <tbody>
                            <tr>
                                <th class="thead" colspan="2" style="text-align: center; font-size: 14px;">Характеристики тали:</th>
                            </tr>
                            <tr>
                                <td style="height: 20px; width: 60%; text-align: left;">Грузоподъемность тали:</td>
                                <td style="width: 40%; text-align: center;"><?php the_field('load-capacity'); ?></td>
                            </tr>
                            <tr>
                                <td style="height: 20px; text-align: left;">Высота подъема:</td>
                                <td style="text-align: center;">3, 6, 9, 12 метров</td>
                            </tr>
                            <tr>
                                <td style="height: 20px; text-align: left;">Строительная высота:</td>
                                <td style="text-align: center;"><?php the_field('height_constr'); ?> мм</td>
                            </tr>
                            <tr>
                                <td style="height: 20px; text-align: left;">Масса тали:</td>
                                <td style="text-align: center;"><?php the_field('mass'); ?> кг</td>
                            </tr>
                            <tr>
                                <td style="height: 20px; text-align: left;">Температура эксплуатации:</td>
                                <td style="text-align: center;">-40°C +40°C</td>
                            </tr>

                            <?php if (the_field('chain_travel')):?>

                                <tr>
                                    <td style="height: 20px; text-align: left;">Ход тяговой цепи при подъеме груза на 1 м:</span></td>
                                    <td style="text-align: center;"><?php the_field('chain_travel'); ?></td>
                                </tr>

                            <?php endif; ?>

                            <tr>
                                <td style="height: 20px; text-align: left;">Количество ветвей цепи:</td>
                                <td style="text-align: center;"><?php the_field('chain_branches'); ?></td>
                            </tr>



                                <tr>
                                    <td style="height: 20px; text-align: left;">Тяговое усилие при номинальной нагрузке:</td>
                                    <td style="text-align: center;"><?php the_field('force'); ?> Н</td>
                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-12">
                    <button class="btn btn-primary btn-lg hidden-lg"><a style="color:#fff; text-decoration: none" href="<?php the_field( 'pdf' ); ?>">Все характеристики в PDF</a></button>
                </div>

                <div class="col-md-12 hidden-xs hidden-sm">
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>

                            <?php the_content(); // контент ?>
                        </article>
                    <?php endwhile; // конец цикла ?>
                </div>





                <div style="margin: 20px auto;" class="col-md-12 hidden-xs hidden-sm">
                    <?php the_field( 'related_products' ); ?>
                </div>

			</div>

			
	</div>

    <!-- Modal 1 -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content winmodal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/close.png"></button>
                    <h4 class="modal-title" id="myModalLabel">Запрос цены<br />
                        <?php the_title(); // заголовок поста ?></h4>
                </div>
                <div class="modal-body">

                        <h4>Стандартное исполнение. Высота подъема, м / цена, руб:</h4>
                        <div class="table-responsive">
                            <table class="thand table table-bordered table-condensed visible-xs visible-sm visible-md visible-lg">
                                <tbody>
                                <tr class="text-center">
                                    <td><?php the_field('prc1_label'); ?></td>
                                    <td><?php the_field('prc2_label'); ?></td>
                                    <td><?php the_field('prc3_label'); ?></td>
                                    <td><?php the_field('prc4_label'); ?></td>
                                </tr>
                                <tr class="text-center" style="font-weight:700">
                                    <td><?php the_field('prc1_value'); ?></td>
                                    <td><?php the_field('prc2_value'); ?></td>
                                    <td><?php the_field('prc3_value'); ?></td>
                                    <td><?php the_field('prc4_value'); ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    <?php the_field( 'modal' ); ?>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content winmodal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/close.png"></button>
                    <h4 class="modal-title" id="myModalLabel">Оставить заявку</h4>
                </div>
                <div class="modal-body">
                    <?php the_field( 'modal2' ); ?>
                </div>

            </div>
        </div>
    </div>


<?php get_footer(); // подключаем footer.php ?>