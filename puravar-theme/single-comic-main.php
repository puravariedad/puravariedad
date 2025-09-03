<?php
/*
 * Template Name: Comic main
 * Template Post Type: post
 */
 get_header();  ?> 
    <section class="blog_posts medium_post top-padded-big">
        <div class="latest_posts">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="post">
                    <header class="post_header--void container">
                            <h1><?php the_title(); ?></h1>
                            <div class="meta">
                                <p><?php the_time( get_option('date_format') ); ?></p>
                            </div>	
                        </header>
					<div class="map_container grey-theme">
						<div class="row_fluid padded">
							<div class="col grid8">
								<?php get_template_part('inc/mapa-comic'); ?>
							</div>
							<div class="col grid4">
								<ul>
									<li><a href="/artistas-del-comic-de-africa-del-norte/" data-action="hover_map" data-link="africa_norte">Africa del norte</a></li>
									<li><a href="/la-historia-abreviada-del-comic-de-africa-central/" data-action="hover_map" data-link="africa_central">Africa central</a></li>
									<li><a href="/la-historia-abreviada-del-comic-de-oriente-proximo/" data-action="hover_map" data-link="levante">Levante Mediterráneo</a></li>
									<li><a href="/artistas-del-comic-de-asia-del-sur/" data-action="hover_map" data-link="asia_sur">Asia del Sur</a></li>
									<li><a href="/america-latina-nor-central/" data-action="hover_map" data-link="latam_norcentro">America latina Nor-central</a></li>
								</ul>
							</div>
						</div>
					</div>
                    <div class="container medium_post-content">
                        <?php the_content(); ?>
						<p>
							<?php the_tags() ?>
						</p>
						<?php get_template_part('inc/social-share'); ?>
                    </div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <div class="container top-padded-big">
		<?php get_template_part('inc/related-comic'); ?>
    </div>
<?php get_footer(); ?>