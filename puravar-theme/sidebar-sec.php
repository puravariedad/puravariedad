<aside class="sidebar sidebar_vertical col grid4">
	<?php if( is_active_sidebar('main_sidebar2') ) {
		dynamic_sidebar ('main_sidebar2');
		} else  { ?>
		<div class="widget">
			<?php get_search_form(); ?>
		</div>
	<?php } ?>
</aside>
