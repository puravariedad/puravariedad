<aside class="sidebar col grid4">
	<?php if( is_active_sidebar('main_sidebar') ) {
		dynamic_sidebar ('main_sidebar');
		} else  { ?>
		<div class="widget">
			<?php get_search_form(); ?>
		</div>
	<?php } ?>
</aside>

