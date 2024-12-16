<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_gaming_lite_dismissed_notice_handler', 'gaming_lite_ajax_notice_handler' );

/**
 * AJAX handler to store the state of dismissible notices.
 */
function gaming_lite_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        // Pick up the notice "type" - passed via jQuery (the "data-notice" attribute on the notice)
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        // Store it in the options table
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function gaming_lite_deprecated_hook_admin_notice() {
        // Check if it's been dismissed...
        if ( ! get_option('dismissed-get_started', FALSE ) ) {?>

            <?php
            $current_screen = get_current_screen();
				if ($current_screen->id !== 'appearance_page_gaming-lite-guide-page') {
             $gaming_lite_comments_theme = wp_get_theme(); ?>
            <div class="gaming-lite-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="gaming-lite-notice">
				<div class="gaming-lite-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'gaming-lite'); ?>">
				</div>
				<div class="gaming-lite-notice-content">
					<div class="gaming-lite-notice-heading"><?php esc_html_e('Thanks for installing ','gaming-lite'); ?><?php echo esc_html( $gaming_lite_comments_theme ); ?></div>
					<p><?php printf(__('To avail the benefits of the premium edition, kindly click on <a href="%s">More Options</a>.', 'gaming-lite'), esc_url(admin_url('themes.php?page=gaming-lite-guide-page'))); ?></p>
					<?php if (is_child_theme()) { ?>
						<?php $child_theme = wp_get_theme(); ?>
						<?php printf(esc_html__('You\'re using %1$s theme, It\'s a child theme of %2$s.', 'gaming-lite'), '<strong>' . $child_theme->Name . '</strong>', '<strong>' . esc_html__('gaming_lite', 'gaming-lite') . '</strong>'); 
						?>
						<?php
						$copy_link_args = array(
							'page' => 'gaming-lite',
							'action' => 'show_copy_settings',
						);
						$copy_link = add_query_arg($copy_link_args, admin_url('themes.php'));
						?>
						<?php printf('%s <a href="%s" class="go-to-setting">%s</a>', esc_html__('Now you can copy setting data from parent theme to this child theme', 'gaming-lite'), esc_url($copy_link), esc_html__('Copy Settings', 'gaming-lite')); ?>
					<?php } ?>
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'gaming_lite_deprecated_hook_admin_notice' );

add_action( 'admin_menu', 'gaming_lite_getting_started' );
function gaming_lite_getting_started() {
	add_theme_page( esc_html__('Get Started', 'gaming-lite'), esc_html__('Get Started', 'gaming-lite'), 'edit_theme_options', 'gaming-lite-guide-page', 'gaming_lite_test_guide');
}

function gaming_lite_admin_enqueue_scripts() {
	wp_enqueue_style( 'gaming-lite-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
	wp_enqueue_script( 'gaming-lite-admin-script', get_template_directory_uri() . '/js/gaming-lite-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'gaming-lite-admin-script', 'gaming_lite_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'gaming_lite_admin_enqueue_scripts' );

if ( ! defined( 'GAMING_LITE_DOCS_FREE' ) ) {
define('GAMING_LITE_DOCS_FREE',__('https://demo.misbahwp.com/docs/gaming-free-docs/','gaming-lite'));
}
if ( ! defined( 'GAMING_LITE_DOCS_PRO' ) ) {
define('GAMING_LITE_DOCS_PRO',__('https://demo.misbahwp.com/docs/gaming-pro-docs/','gaming-lite'));
}
if ( ! defined( 'GAMING_LITE_BUY_NOW' ) ) {
define('GAMING_LITE_BUY_NOW',__('https://www.misbahwp.com/products/gaming-wordpress-theme','gaming-lite'));
}
if ( ! defined( 'GAMING_LITE_SUPPORT_FREE' ) ) {
define('GAMING_LITE_SUPPORT_FREE',__('https://wordpress.org/support/theme/gaming-lite','gaming-lite'));
}
if ( ! defined( 'GAMING_LITE_REVIEW_FREE' ) ) {
define('GAMING_LITE_REVIEW_FREE',__('https://wordpress.org/support/theme/gaming-lite/reviews/#new-post','gaming-lite'));
}
if ( ! defined( 'GAMING_LITE_DEMO_PRO' ) ) {
define('GAMING_LITE_DEMO_PRO',__('https://demo.misbahwp.com/gaming-pro/','gaming-lite'));
}
if( ! defined( 'GAMING_LITE_THEME_BUNDLE' ) ) {
define('GAMING_LITE_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle','gaming-lite'));
}

function gaming_lite_test_guide() { ?>
	<?php $gaming_lite_theme = wp_get_theme(); ?>
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( GAMING_LITE_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'gaming-lite' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'gaming-lite' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( GAMING_LITE_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'gaming-lite' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( GAMING_LITE_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'gaming-lite' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','gaming-lite'); ?><?php echo esc_html( $gaming_lite_theme ); ?>  <span><?php esc_html_e('Version: ', 'gaming-lite'); ?><?php echo esc_html($gaming_lite_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-insidee">
					<?php
						$gaming_lite_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $gaming_lite_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>
		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'gaming-lite' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','gaming-lite'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( GAMING_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'gaming-lite' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( GAMING_LITE_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'gaming-lite' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( GAMING_LITE_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'gaming-lite' ) ?></a>
					</div>
				</div>

				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'gaming-lite' ); ?></h3>
				<div class="insidee theme-bundle">
					<p class="offer"><?php esc_html_e('Get 80+ Perfect WordPress Theme In A Single Package at just $99."','gaming-lite'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 80+ WordPress Themes At 15% Off','gaming-lite'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','gaming-lite'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( GAMING_LITE_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'gaming-lite' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','gaming-lite'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','gaming-lite'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','gaming-lite'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','gaming-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','gaming-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','gaming-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','gaming-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','gaming-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','gaming-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','gaming-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','gaming-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','gaming-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','gaming-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','gaming-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','gaming-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>

<?php } ?>
