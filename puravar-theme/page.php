<?php get_header(); ?>
	<div class="container row_fluid top-padded-big">
		<section class="blog_posts col grid8">
			<div class="pagena right-padded">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article>
					<div class="title bbottom_dash">
						<h1><?php the_title(); ?></h1>
					</div>
					<?php the_content(); ?>		
				</article>
				<?php endwhile; endif; ?>
			</div>
		</section>
		<?php get_sidebar('sec'); ?>
	</div>	
<?php get_footer(); ?>