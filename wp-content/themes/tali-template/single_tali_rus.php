<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * Template Name Posts: Тали электрические Россия
 */

get_header(); // подключаем header.php ?>

	<div class="container">
<?php get_sidebar(); // подключаем sidebar.php ?>
		<div class="row">
			<div class="<?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
						<h1><?php the_title(); // заголовок поста ?></h1>
                        <?php the_field( 'load-capacity' ); ?>
						<?php the_content(); // контент ?>
					</article>
				<?php endwhile; // конец цикла ?>
				
			</div>

		</div>
	</div>

<?php get_footer(); // подключаем footer.php ?>
