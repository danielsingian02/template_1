<?php
get_header();
?>
<body>
   <section id="banner">
	   <div class="container banner_container">
		   <div class="rows banner_rows">
			   <div class="col-12 banner_column text-center">
				<div class="banner_col">
				<h1 class="banner_heading"><?php printf( get_theme_mod( 'banner_heading', __( 'MAKE YOU FEEL HOME AGAIN', 'banner_heading' ) ) ); ?></h1>
				<div class="banner-col2">
				<p class="banner_sub"><?php printf( get_theme_mod( 'banner_subheading', __( 'Sub Slogan Here', 'banner_subheading' ) ) ); ?></p>
				</div>                
				 <div class="banner-col3">
					<button class="banner_button"><a class= "banner_link" href="<?php echo get_theme_mod( 'banner_button_url', __( '#', 'banner_button_url' ) ); ?>"><?php printf( get_theme_mod( 'banner_button_text', __( 'HOMEOWNERS SUPPORT', 'banner_button_text' ) ) ); ?></a></button>
				</div> 
				</div>
			</div>
	   </div>
   </section>

   <section id="description">
	   <div class="container ">
		   <div class="rows description_rows">
			   <div class="col-12 description_column text-center">
					<div class="description_column1">
						<h1 class="description_heading"> <?php printf( get_theme_mod( 'second_section_heading', __( 'Call it your home', 'second_section_heading' ) ) ); ?> </h1>
						<hr class="description_spacer">
						<p class="description_paragraph"><?php printf( get_theme_mod( 'second_section_paragraph', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est. Arcu, amet adipiscing vitae malesuada. Nisl iaculis id enim nibh semper. Proin morbi donec diam suscipit tincidunt arcu id. Iaculis cursus eros, elit gravida mauris sit nunc. Velit erat phasellus habitant adipiscing nullam consectetur quisque est facilisi. Massa elementum id metus, mattis facilisis. Tincidunt est cursus proin mattis dui donec arcu. Nec dolor elementum ut eu sit turpis proin non, sed.<br><br> Acaliquet orci hendrerit duis velit lorem iaculis porta. Egestas auctor ac blandit sed eros, neque. Turpis amet felis ultricies elementum. Suspendisse cum id lacus, consectetur orci, adipiscing vitae. Dignissim lorem libero, donec malesuada non. Aenean fames fringilla egestas mattis eget elementum, diam donec. Augue ridiculus lacus venenatis nam congue.', 'second_section_paragraph' ) ) ); ?></p>
					</div>
					<div class="description_column2">
						<button class="description_button"><a class= "description_link" href="<?php echo get_theme_mod( 'banner_button_url', __( '#', 'second_section_button_url' ) ); ?>"><?php printf( get_theme_mod( 'second_section_button_text', __( 'News & Announcements ', 'second_section_button_text' ) ) ); ?></a></button>
						<button class="description_button"><a class= "description_link" href="<?php echo get_theme_mod( 'banner_button_url2', __( '#', 'second_section_button_url2' ) ); ?>"><?php printf( get_theme_mod( 'second_section_button_text2', __( 'Upcoming Events  ', 'second_section_button_text2' ) ) ); ?></a></button>
						<button class="description_button"><a class= "description_link" href="<?php echo get_theme_mod( 'banner_button_url3', __( '#', 'second_section_button_url3' ) ); ?>"><?php printf( get_theme_mod( 'second_section_button_text3', __( ' Board Meeting Notice & Agenda ', 'second_section_button_text3' ) ) ); ?></a></button>
						<button class="description_button"><a class= "description_link" href="<?php echo get_theme_mod( 'banner_button_url4', __( '#', 'second_section_button_url4' ) ); ?>"><?php printf( get_theme_mod( 'second_section_button_text4', __( ' Member Announcements  ', 'second_section_button_text4' ) ) ); ?></a></button>
						<button class="description_button"><a class= "description_link" href="<?php echo get_theme_mod( 'banner_button_url5', __( '#', 'second_section_button_url5' ) ); ?>"><?php printf( get_theme_mod( 'second_section_button_text5', __( ' Site Search  ', 'second_section_button_text5' ) ) ); ?></a></button>
					</div>
				</div>
			</div>
	   </div>
   </section>

   <section id="third-section">
		<div class="third-section-container">
			<div class="third-section-about-us">
				<h2 class="third-section-heading">
					<?php printf( get_theme_mod( 'third_section_text', __( 'All About Our <br> Homeowner’s Organization', 'third_section_text' ) ) ); ?>
				</h2>
				<hr class="third-section-spacer">
				<p class="paragraph">
					<?php printf( get_theme_mod( 'third_section_textarea', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est. Arcu, amet adipiscing vitae malesuada. Nisl im donec. Augue ridiculus lacus venenatis nam congue.', 'third_section_textarea' ) ) ); ?>
				</p>
			</div>

			<div class="third-section-map">
				<img class="img-fluid img-map" src="<?php echo get_theme_mod( 'third_section_image', get_bloginfo( 'template_directory' ) . '/assets/images/map.png' ); ?>" border="0" alt="map">
			</div>
		</div>
   </section>
</body>
<?php
get_footer();
?>
