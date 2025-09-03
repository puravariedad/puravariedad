<?php 
/* 
template name: Cosas que necesito
*/
get_header(); ?>
	<div class="container makeit__big top-padded-big" >
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 <div class="title bbottom_dash">
				<h1><?php the_title(); ?></h1>
			</div>
			<nav class="simple_menu menu_nav">
					 <ul class="menu">
						 <li><span class="btn-outline" data-filtertag="libros">Libros y comics</span></li>
						 <li><span class="btn-outline" data-filtertag="pines-stickers" >Pines y stickers</span></li>
						 <li><span class="btn-outline" data-filtertag="poster">Posters</span></li>
						 <li><span class="btn-outline" data-filtertag="juguetes">Juguetitos</span></li>
						 <li><span class="btn-outline" data-filtertag="playera">Playeras</span></li>
						 <li><span class="btn-outline" data-filtertag="discos">Discos</span></li>
						 <li><span class="btn-outline" data-filtertag="comida">Comida y similares</span></li>
						 <li><span class="btn-outline" data-clearfilter>Todos</span></li>
					 </ul>
				</nav>
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
            <?php the_content(); ?>
		<?php endwhile; endif; ?>
		<ul class="simple-links-list" id="need">
			<?php
			$my_query = new WP_Query( array(
				'post_type' => 'graveyard',
				'cat' => '4',
				'nopaging' => true
			)
			);
			if ( $my_query->have_posts() ) { 
				while ( $my_query->have_posts() ) { 
					$my_query->the_post(); ?>
			<li class="simple-links-item simple-links-shortcode-item" data-tag="<?php $posttags = get_the_tags(); if ($posttags) { foreach($posttags as $tag) { echo $tag->name;}}?>">
				<?php $business_services = get_post_meta($post->ID, 'Link', true); ?>
				<?php $conseguible_service = get_post_meta($post->ID, 'Conseguible', true); ?>
				<?php if ( $conseguible_service ) : ?>
				<span class="yellow-theme tag_conseguible tag_linkgrid"><small>Conseguible</small></span>
				<?php endif;  ?>
				<?php $lotengo_service = get_post_meta($post->ID, 'Lotengo', true); ?>
				<?php if ( $lotengo_service ) : ?>
				<span class="red-theme tag_conseguible tag_linkgrid"><small>MIO :)</small></span>
				<?php endif;  ?>
			<a href="<?php the_post_thumbnail_url(); ?>" data-lightbox="post-image">
				<?php the_post_thumbnail('medium');?>
			</a>
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