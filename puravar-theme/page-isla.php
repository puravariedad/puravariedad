<?php 
/* 
template name: Isla
*/
get_header(); ?>
	<div class="isla__nav container__center" >
		<a href="/blog/" class="isla__logo logo__brand">Pura Variedad</a>
        <a href="/blog/" class="item__nav item-blog" data-tooltip-text="Blog Pura variedad" >Blog Pura variedad</a>
        <a href="/dibujines/" class="item__nav item-galeria" data-tooltip-text="Mis dibujitos y proyectos">Mis dibujines y proyectos artísticos</a>
        <a href="/pura-historia/" class="item__nav item-mapa" data-tooltip-text="Mapa América 1490">Mapa América 1490</a>
        <a href="/omgpigs/" class="item__nav item-porcs" data-tooltip-text="OMG Porcs">OMG Porcs</a>
        <a href="/cementerio-de-proyectines/" class="item__nav item-cementerio" data-tooltip-text="Cementerio de proyectos">Cementerio de proyectos</a>
        <a href="https://pop.puravariedad.com/" class="item__nav item-fotos" data-tooltip-text="Mis fotos random">Mis fotos random</a>
        <a href="http://videofav.puravariedad.com/" class="item__nav item-videos" data-tooltip-text="Videos favoritos">Videos favoritos</a>
        <a href="/cosas-que-necesito-en-mi-vida/" class="item__nav item-need" data-tooltip-text="Necesito en mi vida">Necesito en mi vida</a>
        <a href="/links-de-blog/" class="item__nav item-links" data-tooltip-text="Links y recursos">Links y recursos</a>
        <img src="https://puravariedad.com/wp-content/uploads/2025/11/isla-puravariedad-x2.png" alt="Fondo de una isla" class="isla__nav_bg">
    </div>
	<div class="container makeit__big">
		<div class="isla__chiquicoso">
			<h1>Pura variedad</h1>
			<p>Mi blog, portafolio de ilustraciones, proyectitos locos, lista de deseos y de más reflexiones que no llevan a ningún lugar a manos de su servidor. Más detalles del nombre <a href="https://puravariedad.com/cosas-que-me-sucedieron-en-2022/">en este post</a></p>
			<p>Y creo que Pura variedad resume bastante bien la tónica de esta página web. Si alguien se le ocurre un nombre mejor, sin duda puede escribirme en el apartado de contacto y decirme "Oye, la Pura variedad no es tan buen nombre como: Supertlacuache o el rincón de Galimatías".</p>
			<a class="toggle__nav button" onclick="togglr()" href="#">
				<span class="show">Mostrar</span>
				<span class="hide">Ocultar</span> menu en texto sin mapa
			</a>
		</div>
	</div>
<script type="text/javascript">
        function togglr() {
            var toggler = document.getElementById("body_main");
            toggler.classList.toggle("view__trns");
        }
    </script>
<style>
	/* REWrites Isla*/
	.page-template-page-isla {
		background: #0054fa;
	}
	.page-template-page-isla .main-top {
		min-width: 1816px;
	}
	.page-template-page-isla .main-header {
		display: none
	}
	.container {
		position: relative;
	}
	.isla__chiquicoso {
		padding: 1rem;
		position: relative;
		top: -7rem;
	}
	.isla__nav a {
		transition: 0s;
	}
	.isla__nav a:hover {
		transition: 0s;
		color: transparent
	}
	.container__center {
		margin: 5rem auto;
	}
	.isla__nav {
		height: 1164px;
		width: 1816px;
		position: relative;
	}
	.isla__logo {
		position: absolute;
		top: -5rem;
		left: 1rem;
	}
	.toggle__nav {
		display: inline-block;
	}
	.toggle__nav .hide {
		display: none
	}
	.item__nav {
		display: block;
		position: absolute;
		color: transparent;
	}
	.item__nav::after {
		display: block;
		background-color: #0054fa;
		color: #fff;
		border: 2px solid #000;
		content: attr(data-tooltip-text);
		font-size: 0.8rem;
		position: absolute;
		opacity: 0;
		padding: 10px;
		transition: opacity 0.3s, visibility 0.3s;
		z-index: 999;
	}
	.item__nav:hover::after {
		opacity: 1;
	}
	.item-blog {
		z-index: 1;
		bottom: 510px;
  		left: 512px;

		width: 664px;
		height: 642px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-blog.png');
	}
	.item-blog:hover {
		bottom: 508px;
  		left: 510px;

		width: 668px;
		height: 646px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-blog-hover.png');
	}
	.item-blog.item__nav::after {
		left: 6rem
	}
	.item-links {
		z-index: 2;
		bottom: 450px;
  		left: 338px;

		width: 518px;
		height: 624px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-links.png');
	}
	.item-links:hover {
		bottom: 448px;
  		left: 336px;

		width: 522px;
		height: 628px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-links-hover.png');
	}
	.item-links.item__nav::after {
		bottom: 7rem;
		left: 8rem
	}
	.item-need {
		z-index: 3;
		bottom: 552px;
  		left: 16px;

		width: 404px;
		height: 380px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-need.png');
	}
	.item-need:hover {
		bottom: 550px;
  		left: 14px;

		width: 408px;
		height: 384px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-need-hover.png');
	}
	.item-porcs {
		z-index: 4;
		bottom: 418px;
  		left: 378px;

		width: 150px;
		height: 112px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-porcs.png');
	}
	.item-porcs:hover {
		bottom: 416px;
		left: 376px;

		width: 154px;
		height: 116px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-porcs-hover.png');
	}
	.item-porcs.item__nav::after {
		bottom: 7rem;
	}
	.item-fotos {
		z-index: 5;
		bottom: 433px;
		left: 828px;

		width: 200px;
		height: 120px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-fotos.png');
	}
	.item-fotos:hover {
		bottom: 431px;
		left: 826px;

		width: 204px;
		height: 124px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-fotos-hover.png');
	}
	.item-fotos.item__nav::after {
		bottom: 10em;
	}
	.item-videos {
		z-index: 6;
		bottom: 591px;
		left: 1308px;

		width: 458px;
		height: 388px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-videos.png');
	}
	.item-videos:hover {
		z-index: 6;
		bottom: 589px;
		left: 1307px;

		width: 462px;
		height: 392px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-videos-hover.png');
	}
	.item-videos.item__nav::after {
		bottom: 10em;
		right: 1rem;
	}
	.item-galeria {
		z-index: 7;
		bottom: 478px;
		left: 1132px;

		width: 406px;
		height: 382px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-galeria.png');
	}
	.item-galeria:hover {
		bottom: 476px;
		left: 1130px;

		width: 410px;
		height: 386px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-galeria-hover.png');
	}
	.item-mapa {
		z-index: 8;
		bottom: 750px;
		left: 1332px;

		width: 130px;
		height: 160px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-mapa.png');
	}
	.item-mapa:hover {
		bottom: 748px;
		left: 1330px;

		width: 134px;
		height: 164px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-mapa-hover.png');
	}
	.item-mapa.item__nav::after {
		bottom: 11em;
	}
	.item-cementerio {
		z-index: 9;
		bottom: 172px;
  		left: 1022px;

		width: 526px;
		height: 288px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-cementerio.png');
	}
	.item-cementerio:hover {
		bottom: 170px;
  		left: 1020px;

		width: 530px;
		height: 292px;
		background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/nav-cementerio-hover.png');
	}
	
	/*** TOGGLE SIMPLE MENU ***/
	.view__trns .button {
		border: 1px solid #333;
		color: #333;
		background: transparent
	}
	.view__trns .toggle__nav .hide {
		display: initial
	}
	.view__trns .toggle__nav .show {
		display: none
	}
	.view__trns .isla__chiquicoso {
		top: 0;
		bottom: 0;
	}
	.view__trns	.page-template-page-isla .main-top {
			min-width: auto;
		}
	.view__trns	.container__center {
			margin: 0 auto;
			padding: 2rem 1rem 0 1rem;
			width: calc(100% - 2rem);
			height: auto
		}

	.view__trns	.isla__logo {
			position: relative;
			left: 0;
			top: -2rem;
		}
	.view__trns .isla__nav_bg {
			display: none;
		}
	.view__trns .item__nav,
	.view__trns .item__nav:hover {
			display: block;
			position: relative;
			border: 3px solid #fff;
			bottom: initial;
			left: initial;
			width: 90px;
			height: 90px;
			border-radius: 99px;
			bottom: initial;
			left: initial;
			margin-bottom: 1rem;
		}
	.view__trns .item__nav::after {
			display: block;
			background-color: #0054fa;
			color: #fff;
			border: 2px solid #000;
			content: attr(data-tooltip-text);
			font-size: 1rem;
			opacity: 1;
			position: absolute;
			left: 100px!important;
			bottom: 10px!important;
			padding: 25px!important;
			width: calc(100vw - 200px)!important;
		}
	.view__trns .item-blog,
	.view__trns .item-blog:hover {
			background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/mini-nav-blog.png');
		}
	.view__trns .item-links,
	.view__trns	.item-links:hover {
			background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/mini-nav-links.png');
		}
	.view__trns .item-need,
	.view__trns .item-need:hover {
			background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/mini-nav-need.png');
		}
	.view__trns .item-porcs,
	.view__trns .item-porcs:hover {
			background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/mini-nav-porcs.png');
		}
	.view__trns .item-fotos,
	.view__trns .item-fotos:hover {
			background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/mini-nav-fotos.png');
		}
	.view__trns .item-videos,
	.view__trns .item-videos:hover {
			background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/mini-nav-videos.png');
		}

	.view__trns .item-galeria,
	.view__trns .item-galeria:hover {
			background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/mini-nav-galeria.png');
		}
	.view__trns .item-mapa,
	.view__trns .item-mapa:hover {
			background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/mini-nav-mapa.png');
		}
	.view__trns .item-cementerio,
	.view__trns .item-cementerio:hover {
			background: url('https://puravariedad.com/wp-content/themes/puravar-theme-4/img/mini-nav-cementerio.png');
		}
	@media screen and (max-width: 769px) {
		.main-top {
			display: none
		}
	}
</style>
<?php get_footer(); ?>