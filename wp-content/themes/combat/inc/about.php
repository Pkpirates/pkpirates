<?php
/**
 * Theme About Page
 *
 * @package Combat
 * @since 1.0
 */

function combat_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_combat-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'combat-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'combat_theme_page_admin_style' );

/**
 * Add theme page
 */
function combat_menu() {
	add_theme_page( esc_html__( 'Combat Theme Info', 'combat' ), esc_html__( 'Combat Theme Info', 'combat' ), 'edit_theme_options', 'combat-theme', 'combat_theme_page_display' );
}
add_action( 'admin_menu', 'combat_menu' );

/**
 * Display About page
 */
function combat_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'combat' ); ?></p>
				<div class="logo-panel">
					<a href="<?php echo esc_url('https://flythemes.net/','combat'); ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/images/flylogo.png' ); ?>"></a>
				</div>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Combat!', 'combat' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Combat has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'combat' ); ?></p>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Combat Pro Theme', 'combat' ); ?></h3>
							<p><?php esc_html_e( 'To get more features and unique home page sections, we recommend you activate the Combat Pro. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.', 'combat' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href=<?php echo esc_url("https://flythemes.net/wordpress-themes/combat-wordpress-theme/"); ?>><?php esc_html_e( 'Buy Combat Pro', 'combat' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'combat' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( 'https://flythemes.net/wordpress-themes/combat-wordpress-theme/' ); ?>"><?php esc_html_e( 'Theme Info', 'combat' ); ?></a>
						<a target="_blank" href="https://flydemos.net/combat/"><?php esc_html_e( 'View Demo', 'combat' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://flythemes.net/forums/' ); ?>"><?php esc_html_e( 'Support', 'combat' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'combat' ); ?></h3>
						<p><?php esc_html_e( 'Loved Combat? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'combat' ); ?></p>
						<a href="https://wordpress.org/support/theme/combat/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'combat' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
