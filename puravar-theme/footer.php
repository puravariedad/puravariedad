	</div>
	<footer class="pie">
		<div class="container btop_dash">
			<div class="row_fluid">
				<div class="col grid8">
					<nav class="menu_pie">
						<?php wp_nav_menu( array('container_class' => 'menu_nav simple_menu', 'theme_location' => 'secondary') ); ?>
					</nav>
					<p><strong>2012 - <?php echo date('Y'); ?> Pura variedad</strong><br>
					Atribución-NoComercial-CompartirIgual 3.0 No portada (<a href="https://creativecommons.org/licenses/by-nc-sa/3.0/deed.es_CO" target="_blank" rel="noopener noreferrer">CC BY-NC-SA 3.0</a>) <br/> <a href="/politica-de-cookies">Política de cookies</a><br/> 
					<strong>THEME BY <a href="http://juandiegocalero.com">Juandiegoles</a></strong></p>
				</div>
				<div class="float_right">
					<a href="/" class="logo_pv_bottom glitch logo__brand" data-text="Pura Variedad">
						Pura Variedad
					</a>
				</div>
			</div>
		</div>
	</footer>
	<div id="cookie_banner" class="cookie_banner bg_gray" style="display: none">
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