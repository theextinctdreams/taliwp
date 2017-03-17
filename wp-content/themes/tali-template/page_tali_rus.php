<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Тали электрические Россия
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
                <div class="col=xs-12 visible-xs visible-sm"><img class="img-responsive" src="<?php the_field( 'main-image' ); // картинка в мобильной версии ?>" /></div>
                <div class="col-md-9">
                    <p><strong>Грузоподъёмность: <?php the_field( 'load-capacity' ); ?><br />
                            Высота подъёма: <?php the_field( 'liftingheight' ); ?></strong></p>


                </div>
                <div class="col-md-3">
                    <button class="fb-btn" data-toggle="modal" data-target="#myModal"><?php the_field( 'button_text' ); ?> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/coins.png"></button>

                    <button class="fb-btn"><a style="color:#fff; text-decoration: none" href="<?php echo esc_url( home_url( '/' ) ); ?>/contacts">Контакты <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/phone.png"></a></button>
                    <button class="fb-btn visible-xs visible-sm"  data-toggle="modal" data-target="#myModal2">Оставить заявку</button>
                </div>

                <div class="col-md-12 hidden-xs hidden-sm">
                    <div style="display:flex; justify-content: center; height: 400px;">

                        <a href="<?php the_field('image1'); ?>" data-lightbox="product" ><img src="<?php the_field( 'image1' ); ?>" height="350" /></a> <a href="<?php the_field( 'image2' ); ?>" data-lightbox="product"><img src="<?php the_field( 'image2' ); ?>" height="350" /></a>

                    </div>
                    <div style="display: flex; justify-content: center;">
                        <?php the_field( 'table' ); ?>
                    </div>
                </div>

                <div style="margin-top: 20px;" class="col-md-12">
                    <h4>Технические характеристики:</h4>
                    <table style="border: 1px solid #fff!important; padding: 5px;" class="table-page table-hover table-striped visible-lg visible-md visible-sm visible-xs">
                        <tbody>
                            <tr>
                                <td width="70%">Грузоподъёмность:</td>
                                <td><?php the_field( 'load-capacity' ); ?></td>
                            </tr>
                            <tr>
                                <td width="30%">Высота подъёма:</td>
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
                                <td>Группа режима работы по ИСО 4301/ГОСТ 25853:</td>
                                <td><?php the_field( 'iso-4301' ); ?></td>
                            </tr>

                            <tr>
                                <td>Температурный режим:</td>
                                <td><?php the_field( 'temperature' ); ?></td>
                            </tr>
                            <tr>
                                <td>Установленная мощность механизма:</td>
                                <td><?php the_field( 'power' ); ?></td>
                            </tr>
                            <tr>
                                <td>Кратность полиспаста:</td>
                                <td><?php the_field( 'folding_speed' ); ?></td>
                            </tr>
                            <tr>
                                <td>Питающее напряжение:</td>
                                <td><?php the_field( 'voltage' ); ?></td>
                            </tr>

                            <tr>
                                <td>Монорельсовый путь ГОСТ 19425:</td>
                                <td><?php the_field( 'monorail-track' ); ?></td>
                            </tr>
                            <tr>
                                <td>Степень защиты электрооборудования:</td>
                                <td><?php the_field( 'protection' ); ?></td>
                            </tr><tr>
                                <td>Способ подвода к тали:</td>
                                <td>гибкий кабель</td>
                            </tr>
                        </tbody>
                    </table>
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

                <div style="margin: 20px;" class="col-md-12">

                    <p><strong>Внимание!</strong> Технические характеристики могут быть изменены в связи с модернизацией. Также на некоторые модели может устанавливаться дополнительное оборудование, что может влиять на  определенные характеристики.</p>
                    <p><strong>Для получения актуальной информации обращайтесь к нашим специалистам в отдел продаж, тел. 8 (3852) 39-88-46, e-mail: <a href="mailto:barnaul@tali.ru" target="_blank">barnaul@tali.ru</a></strong></p>

                </div>



                <div style="margin: 20px auto;" class="col-md-12 hidden-xs hidden-sm">
                    <?php the_field( 'related_products' ); ?>
                </div>

			</div>

			
	</div>

    <!-- Modal 1 -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class=" winmodal">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/close.png"></button>
                        <h4 class="modal-title" id="myModalLabel">Запрос цены<br />
                            <?php the_title(); // заголовок поста ?></h4>
                    </div>
                    <div class="modal-body">
                        <?php the_field( 'modal' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
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