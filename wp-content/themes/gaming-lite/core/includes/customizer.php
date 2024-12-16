<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'gaming_lite_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'gaming-lite' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'gaming-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'gaming_lite_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'gaming-lite' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'gaming-lite' ),
			'off' => esc_html__( 'Disable', 'gaming-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'gaming_lite_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'gaming-lite' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'gaming-lite' ),
			'off' => esc_html__( 'Disable', 'gaming-lite' ),
		],
	] );

	//FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'gaming_lite_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'gaming-lite' ),
	) );

	Kirki::add_section( 'gaming_lite_font_style_section', array(
		'title'      => esc_html__( 'Typography Option',  'gaming-lite' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'gaming-lite' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( GAMING_LITE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'gaming-lite' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'gaming_lite_font_style_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. More Font Family Options </p><p>3. Color Pallete Setup </p><p>4. Section Reordering Facility</p><p>5. For More Options kindly Go For Premium Version.</p>', 'gaming-lite' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_all_headings_typography',
		'section'     => 'gaming_lite_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'gaming-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'gaming_lite_all_headings_typography',
		'label'       => esc_html__( 'Heading Typography',  'gaming-lite' ),
		'description' => esc_html__( 'Select the typography options for your heading.',  'gaming-lite' ),
		'help'        => esc_html__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'gaming-lite' ),
		'section'     => 'gaming_lite_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_body_content_typography',
		'section'     => 'gaming_lite_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'gaming-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'gaming_lite_body_content_typography',
		'label'       => esc_html__( 'Content Typography',  'gaming-lite' ),
		'description' => esc_html__( 'Select the typography options for your content.',  'gaming-lite' ),
		'help'        => esc_html__( 'The typography options you set here will override the Body Typography options for all headers on your site (post titles, widget titles etc).',  'gaming-lite' ),
		'section'     => 'gaming_lite_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

		// PANEL
	Kirki::add_panel( 'gaming_lite_panel_id_5', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Animations', 'gaming-lite' ),
	) );

	// ANIMATION SECTION
	Kirki::add_section( 'gaming_lite_section_animation', array(
	    'title'          => esc_html__( 'Animations', 'gaming-lite' ),
	    'panel'          => 'gaming_lite_panel_id_5',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'gaming-lite' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( GAMING_LITE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'gaming-lite' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'gaming_lite_section_animation',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'gaming-lite' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'gaming_lite_animation_enabled',
		'label'       => esc_html__( 'Turn On To Show Animation', 'gaming-lite' ),
		'section'     => 'gaming_lite_section_animation',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'gaming-lite' ),
			'off' => esc_html__( 'Disable', 'gaming-lite' ),
		],
	] );

	
	// PANEL
	Kirki::add_panel( 'gaming_lite_panel_id_2', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Dark Mode', 'gaming-lite' ),
	) );

	// DARK MODE SECTION
	Kirki::add_section( 'gaming_lite_section_dark_mode', array(
	    'title'          => esc_html__( 'Dark Mode', 'gaming-lite' ),
	    'panel'          => 'gaming_lite_panel_id_2',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'gaming-lite' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( GAMING_LITE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'gaming-lite' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'gaming_lite_section_dark_mode',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'gaming-lite' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'gaming_lite_dark_colors',
	    'section'     => 'gaming_lite_section_dark_mode',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dark Appearance', 'gaming-lite' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'gaming_lite_is_dark_mode_enabled',
		'label'       => esc_html__( 'Turn To Dark Mode', 'gaming-lite' ),
		'section'     => 'gaming_lite_section_dark_mode',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'gaming-lite' ),
			'off' => esc_html__( 'Disable', 'gaming-lite' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'gaming_lite_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'gaming-lite' ),
	) );

	// Color

	Kirki::add_section( 'gaming_lite_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'gaming-lite' ),
	    'panel'          => 'gaming_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'gaming-lite' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( GAMING_LITE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'gaming-lite' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'gaming_lite_section_color',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'gaming-lite' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_global_colors',
		'section'     => 'gaming_lite_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'gaming-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'gaming_lite_global_color',
		'label'       => __( 'Choose Your First Color', 'gaming-lite' ),
		'section'     => 'gaming_lite_section_color',
		'default'     => '#fd7900',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'gaming_lite_global_color_2',
		'label'       => __( 'Choose Your Second Color', 'gaming-lite' ),
		'section'     => 'gaming_lite_section_color',
		'default'     => '#090913',
	] );

	// Additional Settings

	Kirki::add_section( 'gaming_lite_Additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'gaming-lite' ),
	    'panel'          => 'gaming_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'gaming-lite' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( GAMING_LITE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'gaming-lite' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'gaming_lite_Additional_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'gaming-lite' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'gaming_lite_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'gaming-lite' ),
		'section'     => 'gaming_lite_Additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'gaming_lite_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'gaming-lite' ),
		'section'     => 'gaming_lite_Additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'gaming-lite' ),
			'Center' => esc_html__( 'Center', 'gaming-lite' ),
			'Right'  => esc_html__( 'Right', 'gaming-lite' ),
		],
	]
	);

		Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'gaming_lite_scroll_top_icon',
		'label'    => esc_html__( 'Select Appropriate Scroll Top Icon', 'gaming-lite' ),
		'section'  => 'gaming_lite_Additional_settings',
		'default'  => 'dashicons dashicons-arrow-up-alt',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_gaming_lite',
		'label'       => esc_html__( 'Menus Text Transform', 'gaming-lite' ),
		'section'     => 'gaming_lite_Additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'gaming-lite' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'gaming-lite' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'gaming-lite' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'gaming-lite' ),

		],
	] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'gaming_lite_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'gaming-lite' ),
		'section'     => 'gaming_lite_Additional_settings',
		'default' => 'None',
		'placeholder' => esc_html__( 'Choose an option', 'gaming-lite' ),
		'choices'     => [
			'None' => __('None','gaming-lite'),
            'Zoominn' => __('Zoom Inn','gaming-lite'),
            
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'gaming_lite_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'gaming-lite' ),
		'section'     => 'gaming_lite_Additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'gaming_lite_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'gaming-lite' ),
		'section'     => 'gaming_lite_Additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'gaming_lite_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'gaming-lite' ),
		'section'     => 'gaming_lite_Additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'gaming_lite_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'gaming-lite' ),
		'section'     => 'gaming_lite_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'gaming-lite' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','gaming-lite'),
            'Right Sidebar' => __('Right Sidebar','gaming-lite'),
            'One Column' => __('One Column','gaming-lite')
		],
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'gaming_lite_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'gaming-lite' ),
			'panel'          => 'gaming_lite_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'gaming-lite' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( GAMING_LITE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'gaming-lite' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'gaming_lite_woocommerce_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'gaming-lite' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'gaming_lite_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'gaming-lite' ),
		'section'     => 'gaming_lite_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'gaming_lite_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'gaming-lite' ),
		'section'     => 'gaming_lite_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'gaming_lite_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'gaming-lite' ),
		'section'     => 'gaming_lite_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
		[
			'settings' => 'gaming_lite_per_columns',
			'label'    => esc_html__( 'Product Per Row', 'gaming-lite' ),
			'section'  => 'gaming_lite_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 4,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'gaming_lite_product_per_page',
			'label'    => esc_html__( 'Product Per Page', 'gaming-lite' ),
			'section'  => 'gaming_lite_woocommerce_settings',
			'default'  => 9,
			'choices'  => [
				'min'  => 1,
				'max'  => 15,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'gaming-lite' ),
		'section'  => 'gaming_lite_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'gaming-lite' ),
		'section'  => 'gaming_lite_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);


	new \Kirki\Field\Select(
	[
		'settings'    => 'gaming_lite_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'gaming-lite' ),
		'section'     => 'gaming_lite_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'gaming-lite' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','gaming-lite'),
            'Right Sidebar' => __('Right Sidebar','gaming-lite')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'gaming_lite_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'gaming-lite' ),
		'section'     => 'gaming_lite_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'gaming-lite' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','gaming-lite'),
            'Right Sidebar' => __('Right Sidebar','gaming-lite')
		],
	] );

}

	// POST SECTION

	Kirki::add_section( 'gaming_lite_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'gaming-lite' ),
	    'panel'          => 'gaming_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'gaming-lite' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( GAMING_LITE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'gaming-lite' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'gaming_lite_section_post',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'gaming-lite' ) . '</div>',
	] );

	new \Kirki\Field\Sortable(
	[
		'settings' => 'gaming_lite_archive_element_sortable',
		'label'    => __( 'Archive Post Page element Reordering', 'gaming-lite' ),
		'section'  => 'gaming_lite_section_post',
		'default'  => [ 'option1', 'option2', 'option3' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Meta', 'gaming-lite' ),
			'option2' => esc_html__( 'Post Title', 'gaming-lite' ),
			'option3' => esc_html__( 'Post Content', 'gaming-lite' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'gaming_lite_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'gaming-lite' ),
		'section'     => 'gaming_lite_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'gaming_lite_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'gaming-lite' ),
		'section'     => 'gaming_lite_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'gaming_lite_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'gaming-lite' ),
		'section'     => 'gaming_lite_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'gaming-lite' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','gaming-lite'),
            'Right Sidebar' => __('Right Sidebar','gaming-lite'),
            'Three Column' => __('Three Column','gaming-lite'),
            'Four Column' => __('Four Column','gaming-lite'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','gaming-lite'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','gaming-lite'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','gaming-lite')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'gaming_lite_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'gaming-lite' ),
		'section'     => 'gaming_lite_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'gaming-lite' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','gaming-lite'),
            'Right Sidebar' => __('Right Sidebar','gaming-lite'),
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'gaming_lite_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'gaming-lite' ),
		'section'     => 'gaming_lite_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'gaming-lite' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','gaming-lite'),
            'Right Sidebar' => __('Right Sidebar','gaming-lite'),
            'Three Column' => __('Three Column','gaming-lite'),
            'Four Column' => __('Four Column','gaming-lite'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','gaming-lite'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','gaming-lite'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','gaming-lite')
		],
	] );

	Kirki::add_field( 'gaming_lite_config', [
		'type'        => 'select',
		'settings'    => 'gaming_lite_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'gaming-lite' ),
		'section'     => 'gaming_lite_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'gaming-lite' ),
				'2' => __( '2 Column', 'gaming-lite' ),
			],
	] );

	// Breadcrumb
	Kirki::add_section( 'gaming_lite_bradcrumb', array(
	    'title'          => esc_html__( 'Breadcrumb Settings', 'gaming-lite' ),
	    'panel'          => 'gaming_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'gaming-lite' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( GAMING_LITE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'gaming-lite' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'gaming_lite_bradcrumb',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'gaming-lite' ) . '</div>',
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_enable_breadcrumb_heading',
		'section'     => 'gaming_lite_bradcrumb',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Single Page Breadcrumb', 'gaming-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'gaming_lite_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb Enable / Disable', 'gaming-lite' ),
		'section'     => 'gaming_lite_bradcrumb',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'gaming-lite' ),
			'off' => esc_html__( 'Disable', 'gaming-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'default'     => '/',
        'settings' => 'gaming_lite_breadcrumb_separator' ,
        'label'    => esc_html__( 'Breadcrumb Separator',  'gaming-lite' ),
        'section'  => 'gaming_lite_bradcrumb',
    ] );

	// HEADER SECTION

	Kirki::add_section( 'gaming_lite_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'gaming-lite' ),
	    'panel'          => 'gaming_lite_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'gaming-lite' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( GAMING_LITE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'gaming-lite' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'gaming_lite_section_header',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'gaming-lite' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_header_announcement_text_heading',
		'section'     => 'gaming_lite_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Announcement Text', 'gaming-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'gaming_lite_header_announcement_text',
		'section'  => 'gaming_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_header_sign_button_heading',
		'section'     => 'gaming_lite_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Button', 'gaming-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Sign Up Text', 'gaming-lite' ),
		'settings' => 'gaming_lite_sign_up_text',
		'section'  => 'gaming_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'Sign Up URL', 'gaming-lite' ),
		'settings' => 'gaming_lite_sign_up_url',
		'section'  => 'gaming_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Sign In Text', 'gaming-lite' ),
		'settings' => 'gaming_lite_sign_in_text',
		'section'  => 'gaming_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'Sign In URL', 'gaming-lite' ),
		'settings' => 'gaming_lite_sign_in_url',
		'section'  => 'gaming_lite_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_enable_socail_link',
		'section'     => 'gaming_lite_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'gaming-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'gaming_lite_section_header',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'gaming-lite' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'gaming-lite' ),
		'settings'     => 'gaming_lite_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'gaming-lite' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'gaming-lite' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'gaming-lite' ),
				'description' => esc_html__( 'Add the social icon url here.', 'gaming-lite' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'gaming_lite_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'gaming-lite' ),
        'panel'          => 'gaming_lite_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'gaming-lite' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( GAMING_LITE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'gaming-lite' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'gaming_lite_blog_slide_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'gaming-lite' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_enable_heading',
		'section'     => 'gaming_lite_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'gaming-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'gaming_lite_blog_box_enablee',
		'label'       => esc_html__( 'Section Enable / Disable', 'gaming-lite' ),
		'section'     => 'gaming_lite_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'gaming-lite' ),
			'off' => esc_html__( 'Disable', 'gaming-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'gaming_lite_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'gaming-lite' ),
		'section'     => 'gaming_lite_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'gaming-lite' ),
			'off' => esc_html__( 'Disable', 'gaming-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'gaming_lite_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'gaming-lite' ),
		'section'     => 'gaming_lite_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'gaming-lite' ),
			'off' => esc_html__( 'Disable', 'gaming-lite' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_slider_heading',
		'section'     => 'gaming_lite_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'gaming-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'gaming_lite_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'gaming-lite' ),
		'section'     => 'gaming_lite_blog_slide_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'gaming_lite_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'gaming-lite' ),
		'section'     => 'gaming_lite_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'gaming-lite' ),
		'priority'    => 10,
		'choices'     => gaming_lite_get_categories_select(),
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_slider_short_heading',
		'section'     => 'gaming_lite_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider Sub Title', 'gaming-lite' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'gaming_lite_slider_short_title',
		'section'  => 'gaming_lite_blog_slide_section',
		'priority' => 10,
    ] );

		Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_enable_heading',
		'section'     => 'gaming_lite_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content Alignment', 'gaming-lite' ) . '</h3>',
		'priority'    => 10,
	] );

		new \Kirki\Field\Select([
		'settings'    => 'gaming_lite_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'gaming-lite' ),
		'section'     => 'gaming_lite_blog_slide_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'gaming-lite' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'gaming-lite' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'gaming-lite' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'gaming-lite' ),

		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'gaming_lite_slider_opacity_color',
		'label'       => esc_html__( 'Slider Opacity Option', 'gaming-lite' ),
		'section'     => 'gaming_lite_blog_slide_section',
		'default'     => '0.6',
		'placeholder' => esc_html__( 'Choose an option', 'gaming-lite' ),
		'choices'     => [
			'0' => esc_html__( '0', 'gaming-lite' ),
			'0.1' => esc_html__( '0.1', 'gaming-lite' ),
			'0.2' => esc_html__( '0.2', 'gaming-lite' ),
			'0.3' => esc_html__( '0.3', 'gaming-lite' ),
			'0.4' => esc_html__( '0.4', 'gaming-lite' ),
			'0.5' => esc_html__( '0.5', 'gaming-lite' ),
			'0.6' => esc_html__( '0.6', 'gaming-lite' ),
			'0.7' => esc_html__( '0.7', 'gaming-lite' ),
			'0.8' => esc_html__( '0.8', 'gaming-lite' ),
			'0.9' => esc_html__( '0.9', 'gaming-lite' ),
			'unset' => esc_html__( 'unset', 'gaming-lite' ),
			

		],
	] );

	// LATEST GAME SECTION

	Kirki::add_section( 'gaming_lite_latest_game_section', array(
        'title'          => esc_html__( 'Latest Game Settings', 'gaming-lite' ),
        'panel'          => 'gaming_lite_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'gaming-lite' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( GAMING_LITE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'gaming-lite' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'gaming_lite_latest_game_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'gaming-lite' ) . '</div>',
	    'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_latest_game_section_enable_heading',
		'section'     => 'gaming_lite_latest_game_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Latest Game Section', 'gaming-lite' ) . '</h3>',
		'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'gaming_lite_latest_game_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'gaming-lite' ),
		'section'     => 'gaming_lite_latest_game_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'gaming-lite' ),
			'off' => esc_html__( 'Disable', 'gaming-lite' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_latest_game_heading',
		'section'     => 'gaming_lite_latest_game_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Latest Game Headings',  'gaming-lite' ) . '</h3>',
		'priority'    => 3,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'gaming_lite_latest_game_sub_heading',
		'label'    => esc_html__( 'Sub Heading', 'gaming-lite' ),
		'section'  => 'gaming_lite_latest_game_section',
		'priority' => 4,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'gaming_lite_latest_game_main_heading',
		'label'    => esc_html__( 'Main Heading', 'gaming-lite' ),
		'section'  => 'gaming_lite_latest_game_section',
		'priority' => 5,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_game_product_heading',
		'section'     => 'gaming_lite_latest_game_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Latest Games', 'gaming-lite' ) . '</h3>',
		'priority'    => 7,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'gaming_lite_latest_game_per_page',
		'label'       => esc_html__( 'Number of products to show', 'gaming-lite' ),
		'section'     => 'gaming_lite_latest_game_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'gaming_lite_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'gaming-lite' ),
        'panel'          => 'gaming_lite_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'gaming-lite' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( GAMING_LITE_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'gaming-lite' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'gaming_lite_footer_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'gaming-lite' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_footer_enable_heading',
		'section'     => 'gaming_lite_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'gaming-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'gaming_lite_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'gaming-lite' ),
		'section'     => 'gaming_lite_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'gaming-lite' ),
			'off' => esc_html__( 'Disable', 'gaming-lite' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'gaming_lite_footer_text_heading',
		'section'     => 'gaming_lite_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'gaming-lite' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'gaming_lite_footer_text',
		'section'  => 'gaming_lite_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'gaming_lite_footer_text_heading_2',
	'section'     => 'gaming_lite_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'gaming-lite' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'gaming_lite_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'gaming-lite' ),
		'section'     => 'gaming_lite_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'gaming-lite' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'gaming-lite' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'gaming-lite' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'gaming-lite' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'gaming_lite_footer_text_heading_1',
	'section'     => 'gaming_lite_footer_section',
	'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'gaming-lite' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'gaming_lite_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'gaming-lite' ),
		'section'     => 'gaming_lite_footer_section',
		'default'     => '',
	] );
}

add_action( 'customize_register', 'gaming_lite_customizer_settings' );
function gaming_lite_customizer_settings( $wp_customize ) {
	//Latest Game Section
	$args = array(
       'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
	$categories = get_categories($args);
	$cat_posts = array();
	$m = 0;
	$cat_posts[]='Select';
	foreach($categories as $category){
		if($m==0){
			$default = $category->slug;
			$m++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('gaming_lite_latest_game_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'gaming_lite_sanitize_select',
	));
	$wp_customize->add_control('gaming_lite_latest_game_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select category to display games ','gaming-lite'),
		'section' => 'gaming_lite_latest_game_section',
	));
}

/*
 *  Customizer Notifications
 */

$gaming_lite_config_customizer = array(
    'recommended_plugins' => array( 
        'kirki' => array(
            'recommended' => true,
            'description' => sprintf( 
                /* translators: %s: plugin name */
                esc_html__( 'If you want to show all the sections of the FrontPage, please install and activate %s plugin', 'gaming-lite' ), 
                '<strong>' . esc_html__( 'Kirki Customizer', 'gaming-lite' ) . '</strong>'
            ),
        ),
    ),
    'gaming_lite_recommended_actions'       => array(),
    'gaming_lite_recommended_actions_title' => esc_html__( 'Recommended Actions', 'gaming-lite' ),
    'gaming_lite_recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'gaming-lite' ),
    'gaming_lite_install_button_label'      => esc_html__( 'Install and Activate', 'gaming-lite' ),
    'gaming_lite_activate_button_label'     => esc_html__( 'Activate', 'gaming-lite' ),
    'gaming_lite_deactivate_button_label'   => esc_html__( 'Deactivate', 'gaming-lite' ),
);

Gaming_Lite_Customizer_Notify::init( apply_filters( 'gaming_lite_customizer_notify_array', $gaming_lite_config_customizer ) );