<?php
    wp_footer();
    ?>

<footer>
<div class="template_1_footer clear">
        <div id="logo_footer">
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
        <div class="template_1_footer_menu">
        <?php wp_nav_menu('primary'); ?>
        <div class="copyright">
    <p class="copyright">
        <?php 
            printf( 
                '%s. %s &copy; %s', 
                get_theme_mod('copyright_text', __( 'All Rights Reserved', 'copyright_text' ) ),
                get_bloginfo('name'), 
                date_i18n( 'Y' )
            ); 
        ?>
    </p>
</div>
        </div>
      </div>


</footer>
</body>

    
</html>