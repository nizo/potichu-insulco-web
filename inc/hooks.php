<?php

if ( !defined( 'ABSPATH' ) )
	die( 'Direct access forbidden.' );
/**
 * Theme’s filters and actions
 */
/*
 * Widget register
 */
if ( !function_exists( 'getleads_widget_init' ) ) {

	function getleads_widget_init() {
		if ( function_exists( 'register_sidebar' ) ) {
			register_sidebar(
			array(
				'name'			 => esc_html__( 'Main Widget Area', 'getleads' ),
				'id'			 => 'sidebar-1',
				'description'	 => esc_html__( 'Appears on posts and pages.', 'getleads' ),
				'before_widget'	 => '<div id="%1$s" class="widget %2$s">',
				'after_widget'	 => '</div> <!-- end widget -->',
				'before_title'	 => '<h5 class="widget-title">',
				'after_title'	 => '</h5>',
			)
			);
		}
	}

	add_action( 'widgets_init', 'getleads_widget_init' );
}









/*
 * TGM REQUIRE PLUGIN
 * require or recommend plugins for your WordPress themes
 */

/** @internal */
function _action_getleads_register_required_plugins() {

	$plugin_dir = GETLEADS_THEMEROOT . '/inc/includes/plugins';

	$plugins = array(
		array(
			'name'		 => 'Unyson',
			'slug'		 => 'unyson',
			'required'	 => true,
//			'source'	 => $plugin_dir . '/unyson.zip',
		),
		array(
			'name'			 => 'Caldera Forms',
			'slug'			 => 'caldera-forms',
			'required'		 => true,
			'external_url'	 => 'https://wordpress.org/plugins/caldera-forms/',
		),
		array(
			'name'			 => 'Simple Link List Widget',
			'slug'			 => 'simple-link-list-widget',
			'required'		 => true,
			'external_url'	 => 'https://wordpress.org/plugins/simple-link-list-widget/',
		),
		array(
			'name'			 => 'Spoontalk Social Media Icons Widget',
			'slug'			 => 'spoontalk-social-media-icons-widget',
			'required'		 => true,
			'external_url'	 => 'https://wordpress.org/plugins/spoontalk-social-media-icons-widget/',
		),
	);


	$config = array(
		'id'			 => 'getleads', // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path'	 => '', // Default absolute path to bundled plugins.
		'menu'			 => 'getleads-install-plugins', // Menu slug.
		'parent_slug'	 => 'themes.php', // Parent menu slug.
		'capability'	 => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'	 => true, // Show admin notices or not.
		'dismissable'	 => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg'	 => '', // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic'	 => true, // Automatically activate plugins after installation or not.
		'message'		 => '', // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', '_action_getleads_register_required_plugins' );

function _action_getleads_admin_scripts() {
	wp_enqueue_style( 'iconfonts', GETLEADS_CSS . '/icon-font.css', null, GETLEADS_VERSION );
	wp_enqueue_style( 'getleads-theme.css', GETLEADS_CSS . '/getleads_admin.css', null, GETLEADS_VERSION );
}

add_action( 'admin_enqueue_scripts', '_action_getleads_admin_scripts' );

// Initializing online demo contents
function _filter_getleads_fw_ext_backups_demos( $demos ) {
	$demo_content_installer	 = 'http://xpeedstudio.net/demo-content/getleads';
	$demos_array			 = array(
		'agency'			 => array(
			'title'			 => esc_html__( 'Agency', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/agency/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'agency-multi'		 => array(
			'title'			 => esc_html__( 'Agency Multi Page', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/agency-multi/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'apps'				 => array(
			'title'			 => esc_html__( 'Apps', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/apps/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'apps-multi'		 => array(
			'title'			 => esc_html__( 'Apps Multi Page', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/apps-multi/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'consulting'		 => array(
			'title'			 => esc_html__( 'Consulting', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/consulting/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'consulting-multi'	 => array(
			'title'			 => esc_html__( 'Consulting Multipage', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/consulting-multi/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'e-learning'		 => array(
			'title'			 => esc_html__( 'e-Learning', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/e-learning/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'e-learning-multi'	 => array(
			'title'			 => esc_html__( 'e-Learning Multi Page', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/e-learning-multi/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'events'			 => array(
			'title'			 => esc_html__( 'Events', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/events/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'events-multi'		 => array(
			'title'			 => esc_html__( 'Events Multi Page', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/events-multi/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'medical'			 => array(
			'title'			 => esc_html__( 'Medical', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/medical/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'medical-multi'		 => array(
			'title'			 => esc_html__( 'Medical Multi Page', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/medical-multi/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'webservice'		 => array(
			'title'			 => esc_html__( 'Web-Service', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/webservice/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'webservice-multi'	 => array(
			'title'			 => esc_html__( 'Web-Service Multi Page', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/webservice-multi/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'woodworking'		 => array(
			'title'			 => esc_html__( 'Wood-Working', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/woodworking/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'woodworking-multi'	 => array(
			'title'			 => esc_html__( 'Wood-Working Multi Page', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/woodworking-multi/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'yoga'				 => array(
			'title'			 => esc_html__( 'Yoga', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/yoga/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
		'yoga-multi'		 => array(
			'title'			 => esc_html__( 'Yoga Multi Page', 'getleads' ),
			'screenshot'	 => $demo_content_installer . '/yoga-multi/screenshot.png',
			'preview_link'	 => 'http://themeforest.net/user/xpeedstudio/portfolio',
		),
	);
	$download_url			 = $demo_content_installer . '/manifest.php';
	foreach ( $demos_array as $id => $data ) {
		$demo					 = new FW_Ext_Backups_Demo( $id, 'piecemeal', array(
			'url'		 => $download_url,
			'file_id'	 => $id,
		) );
		$demo->set_title( $data[ 'title' ] );
		$demo->set_screenshot( $data[ 'screenshot' ] );
		$demo->set_preview_link( $data[ 'preview_link' ] );
		$demos[ $demo->get_id() ]	 = $demo;
		unset( $demo );
	}
	return $demos;
}

add_filter( 'fw:ext:backups-demo:demos', '_filter_getleads_fw_ext_backups_demos' );





/*
 * GOOGLE FONT from theme  options
 * since 1.0
 */



if ( !function_exists( '_action_getleads_process_google_fonts' ) ) {

	function _action_getleads_process_google_fonts() {
		$include_from_google = array();
		$google_fonts		 = fw_get_google_fonts();

		$body_font = fw_get_db_settings_option( 'body_font' );
		 $heading_title = fw_get_db_settings_option('heading_title');
        $heading_subtitle = fw_get_db_settings_option('heading_subtitle');

		if ( isset( $google_fonts[ $body_font[ 'family' ] ] ) ) {
			$include_from_google[ $body_font[ 'family' ] ] = $google_fonts[ $body_font[ 'family' ] ];
		}
		if (isset($google_fonts[$heading_title['family']])) {
            $include_from_google[$heading_title['family']] = $google_fonts[$heading_title['family']];
        }
        if (isset($google_fonts[$heading_subtitle['family']])) {
            $include_from_google[$heading_subtitle['family']] = $google_fonts[$heading_subtitle['family']];
        }
		
		$google_fonts_links = getleads_get_remote_fonts( $include_from_google );
		// set a option in db for save google fonts link
		update_option( 'fw_theme_google_fonts_link', $google_fonts_links );
	}

	add_action( 'fw_settings_form_saved', '_action_getleads_process_google_fonts', 999, 2 );
}

if ( !function_exists( 'getleads_get_remote_fonts' ) ) :

	function getleads_get_remote_fonts( $include_from_google ) {
		/**
		 * Get remote fonts
		 * @param array $include_from_google
		 */
		if ( !sizeof( $include_from_google ) ) {
			return '';
		}

		$family = "";

		foreach ( $include_from_google as $font => $styles ) {
			$family .= str_replace( ' ', '+', $font ) . ':' . implode( ',', $styles[ 'variants' ] ) . '|';
		}

		$family = substr( $family, 0, - 1 );

		return $family;
	}

endif;


if ( !function_exists( '_action_getleads_print_google_fonts_link' ) ) :

	function _action_getleads_print_google_fonts_link() {
		/**
		 * enque google fonts link
		 */
		$font_url			 = '';
		$google_fonts_family = get_option( 'fw_theme_google_fonts_link', '' );
		if ( $google_fonts_family != '' && defined( 'FW' ) ) {
			$family = $google_fonts_family;
		} else {
			$family = "Lato:400,300,300italic,400italic,500,700,700italic";
		}

		/*
		  Translators: If there are characters in your language that are not supported
		  by chosen font(s), translate this to 'off'. Do not translate into your own language.
		 */
		if ( 'off' !== esc_html_x( 'on', 'Google font: on or off', 'getleads' ) ) {
			$font_url = add_query_arg( 'family', $family . '&subset=latin,latin-ext', "https://fonts.googleapis.com/css" );
		}

		wp_enqueue_style( 'getleads-fonts', $font_url, array(), GETLEADS_VERSION );
	}

	add_action( 'wp_enqueue_scripts', '_action_getleads_print_google_fonts_link' );
endif;

//end goole font


