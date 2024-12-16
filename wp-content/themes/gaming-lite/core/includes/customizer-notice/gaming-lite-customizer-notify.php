<?php

class Gaming_Lite_Customizer_Notify {

	private $config = array(); // Declare $config property
	
	private $gaming_lite_recommended_actions;
	
	private $recommended_plugins;
	
	private static $instance;
	
	private $gaming_lite_recommended_actions_title;
	
	private $gaming_lite_recommended_plugins_title;
	
	private $dismiss_button;
	
	private $gaming_lite_install_button_label;
	
	private $gaming_lite_activate_button_label;
	
	private $gaming_lite_deactivate_button_label;

	
	public static function init( $config ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Gaming_Lite_Customizer_Notify ) ) {
			self::$instance = new Gaming_Lite_Customizer_Notify;
			if ( ! empty( $config ) && is_array( $config ) ) {
				self::$instance->config = $config;
				self::$instance->setup_config();
				self::$instance->setup_actions();
			}
		}

	}

	
	public function setup_config() {

		global $gaming_lite_customizer_notify_recommended_plugins;
		global $gaming_lite_customizer_notify_gaming_lite_recommended_actions;

		global $gaming_lite_install_button_label;
		global $gaming_lite_activate_button_label;
		global $gaming_lite_deactivate_button_label;

		$this->gaming_lite_recommended_actions = isset( $this->config['gaming_lite_recommended_actions'] ) ? $this->config['gaming_lite_recommended_actions'] : array();
		$this->recommended_plugins = isset( $this->config['recommended_plugins'] ) ? $this->config['recommended_plugins'] : array();

		$this->gaming_lite_recommended_actions_title = isset( $this->config['gaming_lite_recommended_actions_title'] ) ? $this->config['gaming_lite_recommended_actions_title'] : '';
		$this->gaming_lite_recommended_plugins_title = isset( $this->config['gaming_lite_recommended_plugins_title'] ) ? $this->config['gaming_lite_recommended_plugins_title'] : '';
		$this->dismiss_button            = isset( $this->config['dismiss_button'] ) ? $this->config['dismiss_button'] : '';

		$gaming_lite_customizer_notify_recommended_plugins = array();
		$gaming_lite_customizer_notify_gaming_lite_recommended_actions = array();

		if ( isset( $this->recommended_plugins ) ) {
			$gaming_lite_customizer_notify_recommended_plugins = $this->recommended_plugins;
		}

		if ( isset( $this->gaming_lite_recommended_actions ) ) {
			$gaming_lite_customizer_notify_gaming_lite_recommended_actions = $this->gaming_lite_recommended_actions;
		}

		$gaming_lite_install_button_label    = isset( $this->config['gaming_lite_install_button_label'] ) ? $this->config['gaming_lite_install_button_label'] : '';
		$gaming_lite_activate_button_label   = isset( $this->config['gaming_lite_activate_button_label'] ) ? $this->config['gaming_lite_activate_button_label'] : '';
		$gaming_lite_deactivate_button_label = isset( $this->config['gaming_lite_deactivate_button_label'] ) ? $this->config['gaming_lite_deactivate_button_label'] : '';

	}

	
	public function setup_actions() {

		// Register the section
		add_action( 'customize_register', array( $this, 'gaming_lite_plugin_notification_customize_register' ) );

		// Enqueue scripts and styles
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'gaming_lite_customizer_notify_scripts_for_customizer' ), 0 );

		/* ajax callback for dismissable recommended actions */
		add_action( 'wp_ajax_quality_customizer_notify_dismiss_action', array( $this, 'gaming_lite_customizer_notify_dismiss_recommended_action_callback' ) );

		add_action( 'wp_ajax_ti_customizer_notify_dismiss_recommended_plugins', array( $this, 'gaming_lite_customizer_notify_dismiss_recommended_plugins_callback' ) );

	}

	
	public function gaming_lite_customizer_notify_scripts_for_customizer() {

		wp_enqueue_style( 'gaming-lite-customizer-notify-css', get_template_directory_uri() . '/core/includes/customizer-notice/css/gaming-lite-customizer-notify.css', array());

		wp_enqueue_style( 'plugin-install' );
		wp_enqueue_script( 'plugin-install' );
		wp_add_inline_script( 'plugin-install', 'var pagenow = "customizer";' );

		wp_enqueue_script( 'updates' );

		wp_enqueue_script( 'gaming-lite-customizer-notify-js', get_template_directory_uri() . '/core/includes/customizer-notice/js/gaming-lite-customizer-notify.js', array( 'customize-controls' ));
		wp_localize_script(
			'gaming-lite-customizer-notify-js', 'gamingliteCustomizercompanionObject', array(
				'ajaxurl'            => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'base_path'          => admin_url(),
				'activating_string'  => __( 'Activating', 'gaming-lite' ),
			)
		);

	}

	
	public function gaming_lite_plugin_notification_customize_register( $wp_customize ) {

		
		require_once get_template_directory() . '/core/includes/customizer-notice/gaming-lite-customizer-notify-section.php';

		$wp_customize->register_section_type( 'Gaming_Lite_Customizer_Notify_Section' );

		$wp_customize->add_section(
			new Gaming_Lite_Customizer_Notify_Section(
				$wp_customize,
				'gaming-lite-customizer-notify-section',
				array(
					'title'          => $this->gaming_lite_recommended_actions_title,
					'plugin_text'    => $this->gaming_lite_recommended_plugins_title,
					'dismiss_button' => $this->dismiss_button,
					'priority'       => 0,
				)
			)
		);

	}

	
	public function gaming_lite_customizer_notify_dismiss_recommended_action_callback() {

		global $gaming_lite_customizer_notify_gaming_lite_recommended_actions;

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */ 

		if ( ! empty( $action_id ) ) {
			
			if ( get_option( 'gaming_lite_customizer_notify_show' ) ) {

				$gaming_lite_customizer_notify_show_gaming_lite_recommended_actions = get_option( 'gaming_lite_customizer_notify_show' );
				switch ( $_GET['todo'] ) {
					case 'add':
						$gaming_lite_customizer_notify_show_gaming_lite_recommended_actions[ $action_id ] = true;
						break;
					case 'dismiss':
						$gaming_lite_customizer_notify_show_gaming_lite_recommended_actions[ $action_id ] = false;
						break;
				}
				update_option( 'gaming_lite_customizer_notify_show', $gaming_lite_customizer_notify_show_gaming_lite_recommended_actions );

				
			} else {
				$gaming_lite_customizer_notify_show_gaming_lite_recommended_actions = array();
				if ( ! empty( $gaming_lite_customizer_notify_gaming_lite_recommended_actions ) ) {
					foreach ( $gaming_lite_customizer_notify_gaming_lite_recommended_actions as $gaming_lite_lite_customizer_notify_recommended_action ) {
						if ( $gaming_lite_lite_customizer_notify_recommended_action['id'] == $action_id ) {
							$gaming_lite_customizer_notify_show_gaming_lite_recommended_actions[ $gaming_lite_lite_customizer_notify_recommended_action['id'] ] = false;
						} else {
							$gaming_lite_customizer_notify_show_gaming_lite_recommended_actions[ $gaming_lite_lite_customizer_notify_recommended_action['id'] ] = true;
						}
					}
					update_option( 'gaming_lite_customizer_notify_show', $gaming_lite_customizer_notify_show_gaming_lite_recommended_actions );
				}
			}
		}
		die(); 
	}

	
	public function gaming_lite_customizer_notify_dismiss_recommended_plugins_callback() {

		$action_id = ( isset( $_GET['id'] ) ) ? $_GET['id'] : 0;

		echo esc_html( $action_id ); /* this is needed and it's the id of the dismissable required action */

		if ( ! empty( $action_id ) ) {

			$gaming_lite_lite_customizer_notify_show_recommended_plugins = get_option( 'gaming_lite_customizer_notify_show_recommended_plugins' );

			switch ( $_GET['todo'] ) {
				case 'add':
					$gaming_lite_lite_customizer_notify_show_recommended_plugins[ $action_id ] = false;
					break;
				case 'dismiss':
					$gaming_lite_lite_customizer_notify_show_recommended_plugins[ $action_id ] = true;
					break;
			}
			update_option( 'gaming_lite_customizer_notify_show_recommended_plugins', $gaming_lite_lite_customizer_notify_show_recommended_plugins );
		}
		die(); 
	}

}
