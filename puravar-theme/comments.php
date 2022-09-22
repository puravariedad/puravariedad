<?php if( have_comments() ) 
	{ ?> 
	<?php wp_list_comments(); paginate_comments_links(); ?> 
	<?php } ?> 
<?php comment_form(); ?>