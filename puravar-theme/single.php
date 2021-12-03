<?php get_header(); ?>
    <div class="container row_fluid top-padded-big">
        <section class="blog_posts col grid8">
            <div class="latest_posts">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="post">
                        <div class="title bbottom_dash">
                            	<h1><?php the_title(); ?></h1>
                            	<div class="meta">
					<p><?php the_time( get_option('date_format') ); ?>
					<?php the_category(' ') ?>
					<small><?php the_tags() ?></small></p>
				</div>
                        </div>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; endif; ?>
            </div>
        </section>
        <?php get_sidebar('sec'); ?>
    </div>
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