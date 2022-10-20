<?php 
/* 
template name: Cosas que necesito
*/
get_header(); ?>
	<div class="container top-padded-big" >
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 <div class="title bbottom_dash">
				<h1><?php the_title(); ?></h1>
			</div>
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <?php the_content(); ?>
		<?php endwhile; endif; ?>
		<ul class="simple-links-list" id="need">
			<?php
			$my_query = new WP_Query( array(
				'post_type' => 'graveyard',
				'cat' => '564',
			)
			);
			if ( $my_query->have_posts() ) { 
				while ( $my_query->have_posts() ) { 
					$my_query->the_post(); ?>
			<li class="simple-links-item simple-links-shortcode-item">
			<a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="post-image">
				<?php the_post_thumbnail('medium');?>
			</a>
			<?php $business_services = get_post_meta($post->ID, 'Link', true); ?>
			<?php if ( $business_services ) : ?>
			<a href="<?php echo get_post_meta($post->ID, 'Link', true); ?>" target="_blank">
			<?php else : ?>
			<a href="#">
			<?php endif;  ?>
						<h3><?php the_title(); ?></h3>
						<span class="link-description"><?php the_excerpt(); ?></span>
			</a>
			</li>
			<?php }
			}
			wp_reset_postdata();
			?>
		</ul>
	</div>	
<?php get_footer(); ?>