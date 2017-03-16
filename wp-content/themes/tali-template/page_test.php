<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: TEST
 */
get_header(); // подключаем header.php ?>

	
			<div class="row">
                <div class="col-md-12"><h1 class="title-post"><?php the_title(); // заголовок поста ?></h1></div>
                <div style="background: transparent" class="col-md-12 breadcrumb"><?php if (function_exists('breadcrumbs')) breadcrumbs(); ?></div>
                <div class="col=xs-12 visible-xs visible-sm"><img class="img-responsive" src="<?php the_field( 'main-image' ); // картинка в мобильной версии ?>" /></div>


                <div class="col-md-12 hidden-xs hidden-sm">
                    <div style="display:flex; justify-content: center; height: 400px;">
                        <img src="<?php the_field( 'image1' ); ?>" height="400" /> <img src="<?php the_field( 'image2' ); ?>" height="400" />

                    </div>
                    <div>
                        <p><?php if (the_field('field1')): ?>

                                <?php echo the_field('field1'); ?>
                        <?php endif; ?></p>
                        <p><?php if (the_field('field2')): ?>
                                <?php echo the_field('field2'); ?>
                        <?php endif; ?></p>

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



			</div>

			
	</div>



<?php get_footer(); // подключаем footer.php ?>