<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="description" content="">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400;1,700&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<meta name="fediverse:creator" content="@puravariedad@social.anartist.org">
<?php wp_head(); ?>

</head>
<?php
$classes = array();
if( is_single() ) {
    $btag = get_post_meta( $post->ID, 'tagbody', true );

    if( ! empty( $btag ) ) {
        $classes[] = $btag;
    }
}
if( is_page() ) {
    $btag = get_post_meta( $post->ID, 'tagbody', true );

    if( ! empty( $btag ) ) {
        $classes[] = $btag;
    }
}
if (is_404()) {
	$classes[] = 'grey-theme';
}
?>
<body <?php body_class( $classes ); ?> id="body_main">
	<a href="#main-body" style="display:none;">Saltar al contenido principal</a>
	<div class="main-top darkest-theme">
		<div class="container makeit__big">
			<?php wp_nav_menu( array('container_class' => 'menu_nav simple_menu', 'theme_location' => 'secondary') ); ?>	
		</div>
	</div>
	<header class="main-header dark-theme">
		<div class="container makeit__big">
			<div class="row__header row_flex">
				<a href="/blog/" class="logo_pv_top logo__brand" data-text="Pura Variedad" data-track-id="test">Pura Variedad</a>
				<div class="col_big__flex col__header">
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
		<div class="main-body" id="main-body">