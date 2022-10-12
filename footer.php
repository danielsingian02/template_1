<?php
	wp_footer();
?>

<footer>
	<div class="logo-footer">
		<a class="header-link" href="<?php bloginfo( 'url' ); ?>">
		<?php
		if ( has_site_icon() ) {
			echo "<img src=' " . esc_url( get_site_icon_url( 150 ) ) . "' class='img-fluid site-icon' alt='' >";
		} else {
			echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
		}
		?>
		</a>
	</div>
	
	<div class="footer-navlinks">
		<div class="">
			<?php wp_nav_menu( 'primary' ); ?>
		</div>
		<div class="copyright">
			<p class="copyright">
				<?php
					printf(
						'%s. %s &copy; %s',
						get_theme_mod( 'copyright_text', __( 'All Rights Reserved', 'copyright_text' ) ),
						get_bloginfo( 'name' ),
						date_i18n( 'Y' )
					);
					?>
			</p>
		</div>
	</div>

</footer>
</body>

	
</html>
