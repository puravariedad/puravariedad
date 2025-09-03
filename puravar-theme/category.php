<?php
/*
Template Name: Category
*/
get_header(); ?>
	<div class="container makeit__big top-padded-big">
			<div class="title bbottom_dash">
				<h1><?php single_cat_title(); ?></h1>
				<div class="meta"><?php echo category_description(); ?></div>
			</div>
			<div class="latest_posts">
				<div class="grid_by_3">
					<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
						<?php get_template_part('inc/snippet'); ?>
					<?php endwhile; endif; ?>
				</div>
				<div class="pagination">
					<?php numeric_posts_nav(); ?>
				</div>
			</div>
	</div>	
<?php get_footer(); ?>