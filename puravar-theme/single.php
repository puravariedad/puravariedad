<?php get_header();  ?>
    <section class="blog_posts medium_post">
        <div class="latest_posts">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="post">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <header class="post_header" style="background-image: url(<?php echo get_the_post_thumbnail_url($post_id, 'medium'); ?>);">
					<?php else : ?>
						<header class="post_header">
					<?php endif; ?>
							<div class="post_header-text">
								<div class="container">
									<h1><?php the_title(); ?></h1>
									<div class="meta"><p><?php the_time( get_option('date_format') ); ?></p></div>
								</div>
							</div>
						</header>
					<?php if ( has_tag( 'historia-comic-mundial' ) ) : ?>
					<div class="container">
						<div class="box yellow-theme">
							Si quieres saber más detalles sobre esta serie, lo explico en: <a href="/artistas-del-comic-del-mundo-no-occidental/">Artistas del comic del mundo "No occidental"</a>
						</div>
					</div>
					<?php endif; ?>
                    <div class="container medium_post-content">
                        <?php the_content(); ?>
						<p>
							<?php the_tags() ?>
						</p>
                    </div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <div class="container top-padded-big">
		<?php /* Está descuajarigau...no sé por qué
		<?php if ( has_tag( 'historia-comic-mundial' ) ) : ?>
			<?php get_template_part('inc/related-comic'); ?>
		<?php else : ?>
			<?php get_template_part('inc/related'); ?>
		<?php endif; ?>
		*/?>
    </div>
<?php get_footer(); ?>