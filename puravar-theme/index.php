<?php get_header(); ?>
	<div class="container row_fluid top-padded-big">
		<div class="col grid8">
			<div class="title bbottom_dash top-spacer">
				<h2>Posts más leídos</h2>
				<p class="meta"></p>
			</div>
			<div class="more_views grid_by_3">
				<?php query_posts('tag__in=463&posts_per_page=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part('inc/snippet-small'); ?>
				<?php endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
		<div class="col grid4 sidebar">
			<div class="bg_yellow portfolio">
				<div class="padded">
					<h5 style="margin-top:0">¿O quires ver mi portafolio?</h5>
					<a href="http://www.juandiegocalero.com" class="button bg_black">www.juandiegocalero.com</a>
				</div>
			</div>
			<br>
			<h1 class="small_norm">
				<em>Blog de UX, diseño gráfico, diseño web, ilustración, CSS, portadas de discos y reflexiones que no llevan a ningún lugar a manos de su servidor</em>
			</h1>
		</div>			
	</div>
	<div class="container row_fluid">
		<section class="col grid8">
			<div class="video__youtube">
				<h4 style="margin-top:0">Lo que ando viendo en youtube</h4>
					<div class="related_posts grid_by_3">
						<?php $do_not_duplicate = array(); ?>
						<?php query_posts('cat=470' . '&posts_per_page=3'); ?>
						<?php while (have_posts()) : the_post(); ?>
						<?php $do_not_duplicate[] = $post->ID; ?>
							<?php get_template_part('inc/snippet-video'); ?>
						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				<p>
					<a href="/category/youtube-videos/">Ver todos los videos</a>
				</p>
			</div>
			<?php wp_reset_query();?>
			<div class="title bbottom_dash top-spacer">
				<h2>Últimos posts</h2>
				<p class="meta"></p>
			</div>
			<div class="latest_posts">
				<div class="grid_by_2">
					<?/* Avoid load videos posts */?>
					<?php rewind_posts();
     				$args = array(
	                   	'cat' => '-470,-506',
	                   	'post_type' => 'post',
	                   	'posts_per_page' => 20,
                 			'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
	                ); query_posts($args); while (have_posts()) : the_post(); ?>
						<?php get_template_part('inc/snippet'); ?>
					<?php endwhile; ?>
				</div>
				<div class="pagination">
					<?php numeric_posts_nav(); ?>
				</div>
				
			</div>
		</section>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>