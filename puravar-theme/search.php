<?php
/*
Template Name: Search Page
*/
get_header(); ?>
<div class="container top-padded-big">
			<div class="title bbottom_dash">
				<h1><?php /* Search Count */ $allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<em>'); echo $key; _e('</em>'); _e(' &mdash; '); echo $count . ' '; _e('Artículos'); wp_reset_query(); ?></h1>
			</div>
			<div class="latest_posts">
				<?php if( have_posts() ): ?>
					<div class="grid_by_2">
						<?php while( have_posts() ) : the_post(); ?>
							<?php get_template_part('inc/snippet'); ?>
						<?php endwhile ?>
					</div>
				<?php else : ?>
					<article>
						<h1>No encontré nada</h1>
						</div>
						<p>Puedes... deprimirte y llorar :(</p>	
					</article>
				<?php endif; ?>
				<div class="pagination">
					<?php numeric_posts_nav(); ?>
				</div>
			</div>
	</div>	
<?php get_footer(); ?>