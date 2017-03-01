<?php
/**
 * Шаблон формы поиска (searchform.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>

<div style="border:none;" class="sidebar-field">
	<form role="search" method="get" class="form-inline" action="<?php echo home_url( '/' ); ?>">
		<div class="form-group">
			
			<input type="search" class="form-control form-search" placeholder="Поиск по продукции" value="<?php echo get_search_query() ?>" name="s">
		</div>
		<button type="submit" class="btn btn-primary but-s">ПОИСК</button>
	</form>
</div>