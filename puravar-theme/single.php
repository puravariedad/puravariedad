<?php get_header();  ?>
    <section class="blog_posts medium_post top-padded-big">
        <div class="latest_posts">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="post">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <header class="post_header">
                            <div class="container pt-0">
                                <div class="post_header-text container">
                                    <h1><?php the_title(); ?></h1>
                                    <div class="meta">
                                        <p><?php the_time( get_option('date_format') ); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="post_header-thumb bg_black-alpha">
                                <?php the_post_thumbnail(); ?>
                            </div>	
                        </header>
                        <?php else : ?>
                        <header class="post_header--void container">
                            <h1><?php the_title(); ?></h1>
                            <div class="meta">
                                <p><?php the_time( get_option('date_format') ); ?></p>
                            </div>	
                        </header>
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
			<div class="comments-area">
				<?php comments_template(); ?>
			</div>
        <div class="share-area">
            <h4>Compartir </h4>
            <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebookshare','width=540,height=480,resizable=yes'); return false;" class="fbshare button bg_black" > Facebook </a>

            <a href="#" onclick="window.open('http://twitter.com/share?url='+encodeURIComponent(window.location.href)+'&text='+encodeURIComponent(document.title),'twittershare','width=540,height=480,resizable=yes'); return false;" class="twshare button bg_black"> Twitter</a>
        </div>
		<?php get_template_part('inc/related'); ?>
    </div>
<?php get_footer(); ?>