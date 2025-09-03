<?php /*
<article class="excerpt_post_related card_block">
  <a href="<?php the_permalink(); ?>">
    <img src="//puravariedad.com/wp-content/uploads/2015/09/default_thumb.gif" alt="<?php the_title(); ?>" /></a>
  <div class="cont_exc_related">
    <p><a href="<?php the_permalink(); ?>">
    <?php the_title(); ?>
    </a></p>
  </div>
</article>
*/?>
<div class="more_views grid_by_4">
	<?php query_posts('tag__in=68&posts_per_page=4'); if ( have_posts() ) : ?>
	<?php $countz=1; ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article class="excerpt_post card_block">
			<div class="cont_exc">
				<h4>
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h4>
				<p><small><?php echo substr(get_the_excerpt(),0,90); ?>...</small></p>
				<span class="tag_postnumber"><?php echo $countz++; ?></span>
			</div>
		</article>
	<?php endwhile; ?>
	<?php endif; wp_reset_query(); ?>
</div>

