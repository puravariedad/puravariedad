<div id="related_posts" class="btop_dash">
	<h4>Artículos de esta serie</h4>
	<div class="grid_by_3">
		<?php rewind_posts();
		$args = array(
			'post_type' => 'post',
			'tag_id' => '571',
			'posts_per_page' => 20,
			'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
		); query_posts($args); while (have_posts()) : the_post(); ?>
		<article class="excerpt_post card_block">
		  <div class="cont_exc">
			<h3 class="small_title">
				<a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h3>
			<p><small><?php echo substr(get_the_excerpt(),0,90); ?>...</small></p>
		  </div>
		</article>
		<?php endwhile; ?>
	</div>
</div>