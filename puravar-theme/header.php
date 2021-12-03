<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="description" content="">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">

	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo(); ?> </title>


	<!-- Cosillas divertidas -->
	<link rel="image_src" href="<?php if ( has_post_thumbnail() ) { $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; } else { ?>http://puravariedad.com/wp-content/themes/puravar-theme/screenshot.png<?php } ?>"/>
	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
	<script>
 	 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new 	Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-57212093-1', 'auto');ga('send', 'pageview');
	</script>
<?php wp_head(); ?>

</head>
<?php 	$classes = array();
$btag = get_post_meta( $post->ID, 'tagbody', true );
    if( ! empty( $btag ) ) {
        $classes[] = $btag;
    }
?>
<body <?php body_class( $classes ); ?>>
	<div class="main-top dark-theme ">
		<div class="container">
			<?php wp_nav_menu( array('container_class' => 'menu_nav simple_menu', 'theme_location' => 'secondary') ); ?>	
		</div>
	</div>
	<header class="main-header bg_black">
		<div class="container">
			<div class="row_fluid">
				<div class="col grid6">
					<a href="/" class="logo_pv_top logo__brand glitch" data-text="Pura Variedad">
						Pura Variedad
					</a>
				</div>
				<div class="col grid6">
					<div class="main-search">
						<form action="/" method="get" class="main-search-container">
							<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
							<input type="image" alt="Search" id="searchsubmit" src="https://puravariedad.com/wp-content/uploads/2021/09/icon-search-big-bold.png" />
						</form>
					</div>
				</div>
			</div>
			<?php wp_nav_menu( array('container_class' => 'menu_nav main_menu', 'theme_location' => 'primary') ); ?>		
		</div>
	</header>
		<div class="body">