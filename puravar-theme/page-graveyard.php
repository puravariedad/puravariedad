<?php 
/* 
template name: Graveyard
*/
get_header(); ?>
	<div class="container top-padded-big">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			 <div class="title bbottom_dash">
				 <h1><?php the_title(); ?></h1>
			 </div>
            <?php the_content(); ?>
		<?php endwhile; endif; ?>
		<div class="grid_by_3">
			<?php
			$my_query = new WP_Query( array(
				'post_type' => 'graveyard',
				'cat' => '3',
			)
			);
			if ( $my_query->have_posts() ) { 
				while ( $my_query->have_posts() ) { 
					$my_query->the_post(); ?>
			<?php $business_services = get_post_meta($post->ID, 'Link', true); ?>
			<?php if ( $business_services ) : ?>
			<a class="excerpt_post card_block card_grave" href="<?php echo get_post_meta($post->ID, 'Link', true); ?>" target="_blank">
			<?php else : ?>
			<a class="excerpt_post card_block card_grave" href="#">
			<?php endif;  ?>
						<div class="cont_exc text-center">
							<span class="cross">×</span>
							<h2><?php the_title(); ?></h2>
							<h4><?php echo get_post_meta($post->ID, 'Date', true); ?></h4>
							<?php the_excerpt(); ?>	
						</div>
					</a>
				<img src="https://puravariedad.com/wp-content/uploads/2022/04/vampirin.gif" class="vampirin" alt="vampirin">
				<img src="https://puravariedad.com/wp-content/uploads/2022/04/vampirin.gif" class="vampirin" alt="vampirin">
			<?php }
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
		<style>
.cross {
    display: inline-block;
    font-size: 2rem;
    -webkit-transition: all .5s ease;
    transition: all .5s ease;
    -webkit-transform:rotate(45deg);
    transform:rotate(45deg)
}
a:hover .cross {
    -webkit-transform:rotate(0deg);
    transform:rotate(0deg)
}
.card_grave {
    font-size: 12px;
    border-top-right-radius: 100px;
    border-top-left-radius: 100px;
    margin: 4rem;
    min-height: 250px;
}
.card_grave:nth-child(3n) {
    -webkit-transform:rotate(5deg);
    transform:rotate(5deg)
}
.card_grave:nth-child(1) {
    -webkit-transform:rotate(-5deg);
    transform:rotate(-5deg)
}
.card_grave:nth-child(8) {
    -webkit-transform:rotate(-4deg);
    transform:rotate(-4deg)
}
@-webkit-keyframes vampirins-fall{
    0% { bottom:-10% }
    100% { bottom:100% }
}
@-webkit-keyframes vampirins-shake {
    0% { -webkit-transform:translateX(0px); transform:translateX(0px) }
    50% { -webkit-transform:translateX(80px); transform:translateX(80px) }
    100% { -webkit-transform:translateX(0px); transform:translateX(0px) }
}
@keyframes vampirins-fall {
    0% { bottom:-10% }
    100% { bottom:100% }
}
@keyframes vampirins-shake {
    0% { transform:translateX(0px) }
    50% { transform:translateX(80px) }
    100% { transform:translateX(0px) }
}
.vampirin {
    position:fixed;
    bottom:-10%;
    z-index:9999;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none;
    cursor:default;
    -webkit-animation-name:vampirins-fall,vampirins-shake;
    -webkit-animation-duration:10s,3s;
    -webkit-animation-timing-function:linear,ease-in-out;
    -webkit-animation-iteration-count:infinite,infinite;
    -webkit-animation-play-state:running,running;
    animation-name:vampirins-fall,vampirins-shake;
    animation-duration:10s,3s;
    animation-timing-function:linear,ease-in-out;
    animation-iteration-count:infinite,infinite;
    animation-play-state:running,running;
    width: 40px;
    height: auto;
}
.vampirin:nth-of-type(0){
    left:1%;
    -webkit-animation-delay:0s,0s;
    animation-delay:0s,0s
}
.vampirin:nth-of-type(1) {
    left:10%;
    -webkit-animation-delay:1s,1s;
    animation-delay:1s,1s
}
.vampirin:nth-of-type(2) {
    left:20%;
    -webkit-animation-delay:6s,.5s;
    animation-delay:6s,.5s
}
.vampirin:nth-of-type(3) {
    left:30%;
    -webkit-animation-delay:4s,2s;
    animation-delay:4s,2s
}
.vampirin:nth-of-type(4){
    left:40%;
    -webkit-animation-delay:2s,2s;
    animation-delay:2s,2s
}
.vampirin:nth-of-type(5){ 
    left:50%;
    -webkit-animation-delay:8s,3s;
    animation-delay:8s,3s
}
.vampirin:nth-of-type(6) {
    left:60%;
    -webkit-animation-delay:6s,2s;
    animation-delay:6s,2s
}
.vampirin:nth-of-type(7){
    left:70%;
    -webkit-animation-delay:2s,1s;
    animation-delay:2s,1s
}
.vampirin:nth-of-type(8) {
    left:80%;-webkit-animation-delay:1s,0s;animation-delay:1s,0s
}
.vampirin:nth-of-type(9){
    left:90%;-webkit-animation-delay:3s,1s;
    animation-delay:3s,1s
}
</style>
<?php get_footer(); ?>