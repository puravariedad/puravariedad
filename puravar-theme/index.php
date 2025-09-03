<?php get_header(); ?>
	<?php if (! get_query_var('paged') ) { ?>
		<div class="banner_home">
			<div class="container makeit__big">
				 <div class="banner_home__texto">
					 <h1 class="h3">UX, UI y otros desvaríos</h1>
						<h2>Blog de UX, diseño gráfico, diseño de producto, ilustración, CSS, portadas de discos y reflexiones que no llevan a ningún lugar a manos de su servidor</h2>
						Si quires ver mi portafolio está en <a href="//www.juandiegocalero.com">www.juandiegocalero.com</a>
				</div>
				<a href="/"><img class="" src="https://puravariedad.com/wp-content/uploads/2025/06/nav-blog.png" alt="ilustración en pixel art de una montaña con un templo que dice blog"></a>
			</div>
		</div>
        <div class="highlight">
			<div class="container makeit__big">
				<div class="highlited_posts">
					<div class="title bbottom_dash">
						<h3 class="h2">Artículos destacados</h3>
					</div>
					<?php get_template_part('inc/snippet-video'); ?>
				</div>
			</div>	
		</div>
    <?php } ?>
    <div class="container makeit__big">
        <div class="title bbottom_dash top-spacer">
            <h2>Últimos posts</h2>
        </div>
        <div class="latest_posts">
            <div class="grid_by_3">
                <?php rewind_posts();
                $args = array(
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
    </div>
    <?php wp_reset_query();?>
<?php get_footer(); ?>