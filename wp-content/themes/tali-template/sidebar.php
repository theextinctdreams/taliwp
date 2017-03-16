<?php
/**
 * Шаблон сайдбара (sidebar.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<?php if (is_active_sidebar( 'sidebar' )) { // если в сайдбаре есть что выводить ?>
<div id="sidebar" class="col-md-3">
	<!-- <div class="sidebar-field visible-xs visible-sm">
		<div class="sidebar-box">
			<p class="text-center"><strong>8-800-700-88-47</a></strong><br />
			Звонок по России бесплатный</p>
			<p class="text-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mail1.png" /><a href="mailto:barnaul@tali.ru" target="_blank">barnaul@tali.ru</a></p>
			<p class="text-center hidden-xs hidden-sm">Для писем: 656037, г. Барнаул, а/я 1317</p>
		</div>
	</div> -->



        <div class="sidebar-field hidden-xs hidden-sm">
        <div class="sidebar-box">
            <div class="phone-left">
                <strong>8 (3852) 77-06-63<br />
                        8 (495) 798-97-28</strong>
            </div>
            <div class="phone-right">
                <strong>8 (3852) 39-88-46<br />
                        8 (3852) 39-88-47</strong>
            </div>
        </div>
                <div class="sidebar-text"><p class="text-center">Для писем: 656037, г. Барнаул, а/я 1317</p></div>
        </div>
        <div class="sidebar-field  hidden-xs hidden-sm">
            <div class="sidebar-text">
                <h4><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mail1.png" /><a href="mailto:barnaul@tali.ru" target="_blank">barnaul@tali.ru</a></h4>
                <h4><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/skype1.png" /><a href="skype:telfer.barnaul?call" target="_blank">telfer.barnaul</a></h4>
                <h4><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icq1.png">452081423</h4>
            </div>

        </div>


	<div style="border:none;" class="sidebar-field hidden-xs hidden-sm">
		<form role="search" method="get" class="form-inline" action="<?php echo home_url( '/' ); ?>">
			<div class="form-group">
				
				<input type="search" class="form-control form-search" placeholder="Поиск по продукции" value="<?php echo get_search_query() ?>" name="s">
			</div>
			<button type="submit" class="btn btn-primary">ПОИСК</button>

		</form>
		
		<div class="row s-icons">
			<div class="col-xs-1"><a href="http://ru-ru.facebook.com/pages/%D0%A2%D0%94-%D0%91%D0%B0%D1%80%D0%BD%D0%B0%D1%83%D0%BB%D1%8C%D1%81%D0%BA%D0%B8%D0%B5-%D1%82%D0%B0%D0%BB%D0%B8/168341286539483" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/facebook.png" /></a></div>
			<div class="col-xs-1"><a href="http://twitter.com/#!/barnaul_tali" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/twitter.png" /></a></div>
			<div class="col-xs-1"><a href="https://plus.google.com/111095550513775400299/posts" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/gplus.png" /></a></div>
		</div>
		<?php dynamic_sidebar('sidebar'); // выводим сайдбар, имя определено в functions.php ?>
	</div>
		
		
	
	



	
</div>
<?php } ?>