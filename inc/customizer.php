<?php
add_action( 'customize_register', 'customize_register' );
function customize_register( $wp_customize ) {
	// All the Customize Options you create goes here

	// Move Homepage Settings section underneath the "Site Identity" section
	$wp_customize->get_section( 'title_tagline' )->priority     = 1;
	$wp_customize->get_section( 'static_front_page' )->priority = 2;
	$wp_customize->get_section( 'static_front_page' )->title    = __( 'Customize Homepage', 'customize_register' );

	// Theme Options Panel
	$wp_customize->add_panel(
		'theme_options',
		array(
			// 'priority'       => 100,
			'title'       => __( 'Theme Options', 'theme_options' ),
			'description' => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'theme_options' ),
		)
	);
	// Text Options Section Inside Theme
	$wp_customize->add_section(
		'text_options',
		array(
			'title'    => __( 'Footer Text Options', 'text_options' ),
			'priority' => 1,
			'panel'    => 'theme_options',
		)
	);
	// Setting for Copyright text.
	$wp_customize->add_setting(
		'copyright_text',
		array(
			'default'           => __( 'All rights reserved ', 'copyright_text' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'copyright_text',
		array(
			'type'        => 'text',
			'priority'    => 10,
			'section'     => 'text_options',
			'label'       => 'Copyright text',
			'description' => 'Text put here will be shown in the footer',
		)
	);
	// banner
	// Text Options Section Inside Theme
	$wp_customize->add_section(
		'banner_text_options',
		array(
			'title'    => __( 'Banner Text Options', 'banner_text_options' ),
			'priority' => 2,
			'panel'    => 'theme_options',
		)
	);
	// Setting for Copyright text.
	$wp_customize->add_setting(
		'banner_heading',
		array(
			'default'           => __( 'MAKE YOU FEEL HOME AGAIN', 'banner_heading' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'banner_heading',
		array(
			'type'        => 'text',
			'priority'    => 20,
			'section'     => 'banner_text_options',
			'label'       => 'Heading',
			'description' => 'Text put here will be shown in banner sections heading',
		)
	);

	// Setting for Copyright text.
	$wp_customize->add_setting(
		'banner_subheading',
		array(
			'default'           => __( 'Sub Slogan Here', 'banner_subheading' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'banner_subheading',
		array(
			'type'        => 'textarea',
			'priority'    => 20,
			'section'     => 'banner_text_options',
			'label'       => 'Sub-heading',
			'description' => 'Text put here will be shown in banner sections subheading',
		)
	);

	// button
	$wp_customize->add_setting(
		'banner_button_text',
		array(
			'default'           => __( 'HOMEOWNERS SUPPORT', 'banner_button_text' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'banner_button_text',
		array(
			'type'        => 'text',
			'priority'    => 20,
			'section'     => 'banner_text_options',
			'label'       => 'Button text',
			'description' => 'Text put here will be shown in banner sections button',
		)
	);

	// button link
	$wp_customize->add_setting(
		'banner_button_url',
		array(
			'default'           => __( '#', 'banner_button_url' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'banner_button_url',
		array(
			'type'        => 'url',
			'priority'    => 20,
			'section'     => 'banner_text_options',
			'label'       => 'Button Link',
			'description' => 'Link put here will be the redirection link of your button when clicked',
		)
	);

	// second section
	// Text Options Section Inside Theme
	$wp_customize->add_section(
		'second_section_text_options',
		array(
			'title'    => __( 'Second Section Text Options', 'second_section_text_options' ),
			'priority' => 2,
			'panel'    => 'theme_options',
		)
	);
	// Setting for Copyright text.
	$wp_customize->add_setting(
		'second_section_heading',
		array(
			'default'           => __( 'Call it your home', 'second_section_heading' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'second_section_heading',
		array(
			'type'        => 'text',
			'priority'    => 20,
			'section'     => 'second_section_text_options',
			'label'       => 'Heading',
			'description' => 'Text put here will be shown in second sections heading',
		)
	);

	$wp_customize->add_setting(
		'second_section_paragraph',
		array(
			'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est. Arcu, amet adipiscing vitae malesuada. Nisl iaculis id enim nibh semper. Proin morbi donec diam suscipit tincidunt arcu id. Iaculis cursus eros, elit gravida mauris sit nunc. Velit erat phasellus habitant adipiscing nullam consectetur quisque est facilisi. Massa elementum id metus, mattis facilisis. Tincidunt est cursus proin mattis dui donec arcu. Nec dolor elementum ut eu sit turpis proin non, sed.<br><br> Acaliquet orci hendrerit duis velit lorem iaculis porta. Egestas auctor ac blandit sed eros, neque. Turpis amet felis ultricies elementum. Suspendisse cum id lacus, consectetur orci, adipiscing vitae. Dignissim lorem libero, donec malesuada non. Aenean fames fringilla egestas mattis eget elementum, diam donec. Augue ridiculus lacus venenatis nam congue.', 'second_section_paragraph' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'second_section_paragraph',
		array(
			'type'        => 'textarea',
			'priority'    => 20,
			'section'     => 'second_section_text_options',
			'label'       => 'Description',
			'description' => 'Text put here will be shown in second sections description',
		)
	);
	// button
	$wp_customize->add_setting(
		'second_section_button_text',
		array(
			'default'           => __( 'News & Announcements ', 'second_section_button_text' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'second_section_button_text',
		array(
			'type'        => 'text',
			'priority'    => 20,
			'section'     => 'second_section_text_options',
			'label'       => 'Button 1 text',
			'description' => 'Text put here will be shown in second sections button',
		)
	);

	// button link
	$wp_customize->add_setting(
		'second_section_button_url',
		array(
			'default'           => __( '#', 'second_section_button_url' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'second_section_button_url',
		array(
			'type'        => 'url',
			'priority'    => 20,
			'section'     => 'second_section_text_options',
			'label'       => 'Button 1 Link',
			'description' => 'Link put here will be the redirection link of your button when clicked',
		)
	);

	// button
	$wp_customize->add_setting(
		'second_section_button_text2',
		array(
			'default'           => __( 'Upcoming Events ', 'second_section_button_text2' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'second_section_button_text2',
		array(
			'type'        => 'text',
			'priority'    => 20,
			'section'     => 'second_section_text_options',
			'label'       => 'Button 2 text',
			'description' => 'Text put here will be shown in second sections button',
		)
	);

	// button link
	$wp_customize->add_setting(
		'second_section_button_url2',
		array(
			'default'           => __( '#', 'second_section_button_url2' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'second_section_button_url2',
		array(
			'type'        => 'url',
			'priority'    => 20,
			'section'     => 'second_section_text_options',
			'label'       => 'Button 2 Link',
			'description' => 'Link put here will be the redirection link of your button when clicked',
		)
	);

	// button
	$wp_customize->add_setting(
		'second_section_button_text3',
		array(
			'default'           => __( ' Board Meeting Notice & Agenda ', 'second_section_button_text3' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'second_section_button_text3',
		array(
			'type'        => 'text',
			'priority'    => 20,
			'section'     => 'second_section_text_options',
			'label'       => 'Button 3 text',
			'description' => 'Text put here will be shown in second sections button',
		)
	);

	// button link
	$wp_customize->add_setting(
		'second_section_button_url3',
		array(
			'default'           => __( '#', 'second_section_button_url3' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'second_section_button_url3',
		array(
			'type'        => 'url',
			'priority'    => 20,
			'section'     => 'second_section_text_options',
			'label'       => 'Button 3 Link',
			'description' => 'Link put here will be the redirection link of your button when clicked',
		)
	);

	// button
	$wp_customize->add_setting(
		'second_section_button_text4',
		array(
			'default'           => __( ' Member Announcements ', 'second_section_button_text4' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'second_section_button_text4',
		array(
			'type'        => 'text',
			'priority'    => 20,
			'section'     => 'second_section_text_options',
			'label'       => 'Button 4 text',
			'description' => 'Text put here will be shown in second sections button',
		)
	);

	// button link
	$wp_customize->add_setting(
		'second_section_button_url4',
		array(
			'default'           => __( '#', 'second_section_button_url4' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'second_section_button_url4',
		array(
			'type'        => 'url',
			'priority'    => 20,
			'section'     => 'second_section_text_options',
			'label'       => 'Button 4 Link',
			'description' => 'Link put here will be the redirection link of your button when clicked',
		)
	);

	// button
	$wp_customize->add_setting(
		'second_section_button_text5',
		array(
			'default'           => __( ' Site Search ', 'second_section_button_text5' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'second_section_button_text5',
		array(
			'type'        => 'text',
			'priority'    => 20,
			'section'     => 'second_section_text_options',
			'label'       => 'Button 5 text',
			'description' => 'Text put here will be shown in second sections button',
		)
	);

	// button link
	$wp_customize->add_setting(
		'second_section_button_url5',
		array(
			'default'           => __( '#', 'second_section_button_url5' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'second_section_button_url5',
		array(
			'type'        => 'url',
			'priority'    => 20,
			'section'     => 'second_section_text_options',
			'label'       => 'Button 5 Link',
			'description' => 'Link put here will be the redirection link of your button when clicked',
		)
	);

	// third section
	// Text Options Section Inside Theme
	$wp_customize->add_section(
		'third_text_options',
		array(
			'title'    => __( 'Third Section Text Options', 'third_text_options' ),
			'priority' => 4,
			'panel'    => 'theme_options',
		)
	);
	// Setting for Copyright text.
	$wp_customize->add_setting(
		'third_section_text',
		array(
			'default'           => __(
				'All About Our 
        Homeowner’s Organization',
				'third_section_text'
			),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'third_section_text',
		array(
			'type'        => 'text',
			'priority'    => 20,
			'section'     => 'third_text_options',
			'label'       => 'Heading',
			'description' => 'Text put here will be shown third sections heading',
		)
	);

	// Setting for Copyright text.
	$wp_customize->add_setting(
		'third_section_textarea',
		array(
			'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est. Arcu, amet adipiscing vitae malesuada. Nisl im donec. Augue ridiculus lacus venenatis nam congue.', 'third_section_textarea' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'third_section_textarea',
		array(
			'type'        => 'textarea',
			'priority'    => 30,
			'section'     => 'third_text_options',
			'label'       => 'Text Description',
			'description' => 'Text put here will be shown third sections text description',
		)
	);

	// Setting for Images.
	$wp_customize->add_setting(
		'third_section_image',
		array(
			'default'           => get_bloginfo( 'template_directory' ) . '/assets/images/map.png',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'third_section_image',
			array(
				'priority'    => 40,
				'section'     => 'third_text_options',
				'label'       => 'Image',
				'description' => 'Image put here will be shown third sections Image',
			)
		)
	);

}
