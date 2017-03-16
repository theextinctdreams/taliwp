<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!-- BEGIN FOOTER -->



<hr />		
<div id="footer" class="container">
		<div class="row">
            <div class="col-md-6">
            	<div class="phone-left-f">
                    <dl>
                        <dt>1999-<?= date('Y'); ?> &copy; ТД "Барнаульские тали"</dt>
				        <dd>Все права защищены.</dd>
                    </dl>
				</div>
            </div>

            <div class="col-md-6 fcent hidden-xs hidden-sm text-right">
                <dl>
                    <dt>8-800-700-88-47</dt>
                    <dd>Звонок по России бесплатный</dd>
                </dl>
            </div>

        </div>
    	
		
			
</div>

	
	


	<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>

<!-- END FOOTER -->