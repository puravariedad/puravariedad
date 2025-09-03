<?php $orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
    $category_ids = array();
    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
    $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 6, // Number of related posts that will be shown.
        'caller_get_posts'=>1
    );
    $my_query = new wp_query( $args );
    if( $my_query->have_posts() ) {
        echo '<div id="related_posts" class="btop_dash"><h4>Artículos relacionados</h4><div class="latest_posts"><div class="grid_by_3">';
        while( $my_query->have_posts() ) {
            $my_query->the_post();?>
            <article class="excerpt_post card_block">
                <div class="cont_exc">
                    <h3 class="small_title">
                        <a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p><small><?php echo substr(get_the_excerpt(), 0,150); ?>...</small></p>
                </div>
            </article>
            <?
        }
        echo '</div></div>';
    }
}
$post = $orig_post;
wp_reset_query(); ?>