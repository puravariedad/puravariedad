<?php get_header(); ?>
	<?php if (! get_query_var('paged') ) { ?>
        <div class="container makeit__big">
            <div class="bg_gray banner_home">
                <div class="container">
                    <h1>UX, UI y otros desvaríos</h1>
                    <h2>Blog de UX, diseño gráfico, diseño web, ilustración, CSS, portadas de discos y reflexiones que no llevan a ningún lugar a manos de su servidor</h2>
                    Si quires ver mi portafolio está en <a href="http://www.juandiegocalero.com">www.juandiegocalero.com</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="highlited_posts">
                <div class="title bbottom_dash top-spacer">
                    <h3>Posts más leídos</h3>
                    <p class="meta"></p>
                </div>
                <div class="more_views grid_by_3">
                    <?php query_posts('tag__in=463&posts_per_page=3'); if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php get_template_part('inc/snippet-small'); ?>
                    <?php endwhile; endif; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="container">
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
    </div>
    <?php wp_reset_query();?>
    <?php if (! get_query_var('paged') ) { ?>
        <div class="container btop_dash top-spacer">
            <div class="video__youtube">
                <div class="title bbottom_dash top-spacer">
                    <h3>Lo que ando viendo en youtube</h3>
                    <p class="meta"></p>
                </div>
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
            <?php get_sidebar(); ?>
        </div>
    <?php } ?>
<?php get_footer(); ?>
