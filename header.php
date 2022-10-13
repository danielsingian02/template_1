<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php
		wp_head();
	?>
</head>
<header class="">
	<div class="header">		
		<div class="brand">
			<a href="<?php bloginfo( 'url' ); ?>" class="navbar-brand">
				<?php
				if ( ! has_site_icon() ) {
					echo "<img src=' " . esc_url( get_site_icon_url( 150 ) ) . "' class='img-fluid site-icon' alt='' >";
				} else {
					echo '<h1 class="site-name">' . get_bloginfo( 'name' ) . '</h1>';
				}
				?>
			</a>
		</div>

		<div class="hamburger-btn-container">
			<button class="hamburger-btn" type="button" id="toggle-button" onclick="showNav()">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>
		</div>

		<div class="navigation" id="nav-container">
			<div class="nav-links">
				<!-- Navigation Links -->
				<div class="template_header_menu">
					<?php wp_nav_menu( 'primary' ); ?>
				</div>
			</div>

			<div class="search-bar">
				<div class="user-portal">
					<a href="#">Login</a> | <a href="#">Register</a>
				</div>
				<div class="searchbar-head">
					<form method="get" id="searchform" action="<?php bloginfo( 'url' ); ?>">
						<div>
							<input class="text-head" type="text" value="" name="s" id="s" placeholder="Search..."/>
							<input type="submit" class="submit button-head" name="submit" value="<?php _e( 'Search' ); ?>" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</header>
