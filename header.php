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
    <header>
      <div class="template_1_header clear">
        <div id="logo">
          <a class="header-link" href="<?php bloginfo('url'); ?>">
            <?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
}
          ?>
          </a>
        </div>
        <div class="template_1_header_menu">
        <?php wp_nav_menu('primary'); ?>
        </div>
        <div class="template_1_search">
        <span><a href="#">Login</a> | <a href="#">Register</a></span>
        <div class="searchbar-head">
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
<div>
<input class="text-head" type="text" value=" " name="s" id="s" placeholder="Search..."/>
<input type="submit" class="submit button-head" name="submit" value="<?php _e('Search');?>" />
</div>
</form>
        </div>
        </div>
      </div>

      <!-- navigation menu -->
<!-- 
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

  <nav class="navbar navbar-light bg-light">
  <div class="container-header">
  <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
            <?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
}
          ?>
          </a>
  </div>
</nav>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="template_1_header_menu">
        <?php wp_nav_menu('primary'); ?>
        </div>

      <div class="template_1_search">
        <span><a href="#">Login</a> | <a href="#">Register</a></span>
        <div class="searchbar-head">
          <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
            <div>
              <input class="text-head" type="text" value=" " name="s" id="s" placeholder="Search..."/>
              <input type="submit" class="submit button-head" name="submit" value="<?php _e('Search');?>" />
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</nav> -->
    </header>

    