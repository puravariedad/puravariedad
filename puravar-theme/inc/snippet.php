<article class="excerpt_post card_block">
	<div class="cont_exc">
	 	<?php if ( has_post_thumbnail() ) : ?>
    		<a href="<? the_permalink()?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('medium'); ?></a>
		<?php endif; ?>
    	<a href="<?php the_permalink(); ?>"><?php the_title( '<h3>', '</h3>' ); ?></a>
    	<p><em><?php foreach((get_the_category()) 
  as $category) { echo $category->cat_name. ' ';}?></em></p>
		<p><?php echo substr(get_the_excerpt(),'0','150'); ?>...</p>
		<p class="small"><?php the_tags() ?></p>
  </div>
</article>
