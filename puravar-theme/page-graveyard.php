<?php 
/* 
template name: Graveyard
*/
get_header(); ?>
	<div class="container top-padded-big">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 <div class="title bbottom_dash">
				 <h1><?php the_title(); ?></h1>
			 </div>
            <?php the_content(); ?>
		<?php endwhile; endif; ?>
		<div class="grid_by_3">
			<?php
			$my_query = new WP_Query( array(
				'post_type' => 'graveyard'
			)
			);
			if ( $my_query->have_posts() ) { 
				while ( $my_query->have_posts() ) { 
					$my_query->the_post(); ?>
			<?php $business_services = get_post_meta($post->ID, 'Link', true); ?>
			<?php if ( $business_services ) : ?>
			<a class="excerpt_post card_block card_grave" href="<?php echo get_post_meta($post->ID, 'Link', true); ?>" target="_blank">
			<?php else : ?>
			<a class="excerpt_post card_block card_grave" href="#">
			<?php endif;  ?>
						<div class="cont_exc text-center">
							<span class="cross">×</span>
							<h2><?php the_title(); ?></h2>
							<h4><?php echo get_post_meta($post->ID, 'Date', true); ?></h4>
							<?php the_excerpt(); ?>	
						</div>
					</a>
				<img src="https://puravariedad.com/wp-content/uploads/2022/04/vampirin.gif" class="vampirin" alt="vampirin">
				<img src="https://puravariedad.com/wp-content/uploads/2022/04/vampirin.gif" class="vampirin" alt="vampirin">
			<?php }
			}
			wp_reset_postdata();
			?>
		</div>
	</div>	
<?php get_footer(); ?>
