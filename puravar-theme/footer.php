	</div>
	<footer class="pie">
		<div class="container makeit__big btop_dash">
			<div class="row_flex">
				<div class="col_big__flex">
					<nav class="menu_pie">
						<?php wp_nav_menu( array('container_class' => 'menu_nav simple_menu', 'theme_location' => 'secondary') ); ?>
					</nav>
					<p><strong>2012 - <?php echo date('Y'); ?> Pura variedad</strong><br>
					Atribución/Reconocimiento-NoComercial-CompartirIgual 4.0 Internacional (<a href="//creativecommons.org/licenses/by-nc-sa/4.0/deed.es" target="_blank" rel="noopener noreferrer">CC BY-NC-SA 4.0</a>) <br/> <a href="/politica-de-cookies">Política de cookies</a> | <a rel="me" href="https://social.anartist.org/@puravariedad">Mastodon</a> | <a href="//juandiegocalero.com">THEME BY Juandiego Calero</a></p>
				</div>
				<a href="/blog/" class="logo_pv_bottom logo__brand" data-text="Pura Variedad">
						Pura Variedad
					</a>
			</div>
		</div>
	</footer>
	<div id="cookie_banner" class="cookie_banner grey-theme" style="display: none">
		<div class="cookie_body">
			<strong class="h4">
				Aviso de Cookies
			</strong><br/>
			Utilizamos cookies para obtener datos estadísticos de la navegación de nuestros usuarios. Si acepta o continúa navegando, consideramos que acepta su uso. <br/>
			<a href="/politica-de-cookies">Más info</a>
		<span class="btn wp-block-button__link close_cookie">Aceptar</span>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>