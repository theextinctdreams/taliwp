<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Прайс-лист на тали электрические Болгарии
 */
get_header(); // подключаем header.php ?>

<?php get_sidebar(); // подключаем sidebar.php ?>

	<div class="col-md-9">
		<div class="banner"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/background-header.jpg" /></div>
	

                <div class="col-md-12"><h1 class="title-post"><?php the_title(); // заголовок поста ?></h1></div>
                <div style="background: transparent" class="col-md-12 breadcrumb"><?php if (function_exists('breadcrumbs')) breadcrumbs(); ?></div>


                <div class="col-md-12">
                    <?php include_once 'price_page.php'; ?>
                </div>

                <br /><br />

                <div class="col-md-12 hidden-xs hidden-sm">
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>

                            <?php the_content(); // контент ?>
                        </article>
                    <?php endwhile; // конец цикла ?>
                </div>

			</div>

			
	</div>

    <!-- Modal 1 -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Запрос цены<br />
                        <?php the_title(); // заголовок поста ?></h4>
                </div>
                <div class="modal-body">
                    <?php the_field( 'modal' ); ?>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Оставить заявку</h4>
                </div>
                <div class="modal-body">
                    <?php the_field( 'modal2' ); ?>
                </div>

            </div>
        </div>
    </div>


<?php get_footer(); // подключаем footer.php ?>