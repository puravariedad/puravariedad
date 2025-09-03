<?php 
/* 
template name: Instapaper
*/
get_header(); ?>
	<div class="container makeit__big top-padded-big">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="title bbottom_dash">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="grid_by_3">
			<?php
            //Feed URLs
            $feeds = array(
                "https://www.instapaper.com/starred/rss/5248220/GIFezyF4LpOAPnePR4RghzCBw"
            );
            
            //Read each feed's items
            $entries = array();
            foreach($feeds as $feed) {
                $xml = simplexml_load_file($feed);
                $entries = array_merge($entries, $xml->xpath("//item"));
            }
            
            //Sort feed entries by pubDate
            usort($entries, function ($feed1, $feed2) {
                return strtotime($feed2->pubDate) - strtotime($feed1->pubDate);
            });
            
            ?>
            
            <?php
            //Print all the entries
            foreach($entries as $entry){
            ?>
                <article class="excerpt_post card_block">
					<div class="cont_exc">
					<a href="<?= $entry->link ?>" target="_blank" rel="noopener noreferrer">
                        <h3><?= $entry->title ?></h3>
                        <p><strong><?= parse_url($entry->link)['host'] ?></small></strong>
                        <p><?= $entry->description ?></p>
                    </a>
					</div>
                </article>
           <?php }?>
		</div>
        <p class="text-center top-padded">Complete list in my <a href="https://www.instapaper.com/p/5248220" target="_blank">Instapaper</a></p> 
        <?php endwhile; endif; ?>
	</div>	
<?php get_footer(); ?>