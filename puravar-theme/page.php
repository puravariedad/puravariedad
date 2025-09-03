<?php get_header(); ?>
	<div class="container makeit__big top-padded-big">
		<section class="blog_posts">
			<div class="page">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="post">
					<div class="title bbottom_dash">
						<h1><?php the_title(); ?></h1>
					</div>
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
					<?php the_content(); ?>		
				</article>
				<?php endwhile; endif; ?>
			</div>
		</section>
	</div>	
<?php get_footer(); ?>