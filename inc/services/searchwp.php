<?php

namespace BEAPI\Theme\Framework\Services;

use BEAPI\Theme\Framework\Service;
use BEAPI\Theme\Framework\Service_Container;

/**
 * Class SearchWp
 *
 * @package BEAPI\Theme\Framework\Services
 *
 */
class SearchWp implements Service {

	/**
	 * @var string
	 */
	private $path = 'assets/searchwp/config.json';

	/**
	 * @param Service_Container $container
	 */
	public function boot( Service_Container $container ) {
		add_action( 'template_redirect', [ $this, 'warning' ], 0 );
		add_action( 'init', [ $this, 'init' ], 0 );
	}

	/**
	 * @param Service_Container $container
	 */
	public function register( Service_Container $container ) {
	}

	/**
	 * @return string
	 */
	public function get_service_name() {
		return 'searchwp';
	}

	/**
	 * Show warning message if FacetWp plugin not activate
	 */
	public function warning() {

		if ( class_exists( 'FacetWP' ) ) {
			return;
		}

		wp_die( esc_html( __( 'The plugin FacetWP is not enable', 'framework-textdomain' ) ) );
	}

	/**
	 * Load all facets from the config file in theme
	 */
	public function init() {

		$file_path = dirname( dirname( __DIR__ ) ) . '/' . $this->path;
		if ( ! file_exists( $file_path ) ) {
			wp_die( sprintf( __( 'Missing the config file: [theme-name]/%s', 'framework-textdomain' ), $this->path ) );
		}
		$file_url  = get_template_directory_uri() . '/' . $this->path;
		$json_file = wp_remote_get( $file_url );
		if ( ! is_array( $json_file ) || is_wp_error( $json_file ) ) {
			wp_die( esc_html( __( 'Problem with the json file', 'framework-textdomain' ) ) );
		}

//		$elements = json_decode( wp_remote_retrieve_body( $json_file ), true );

		$settings_to_import = stripslashes( wp_remote_retrieve_body( $json_file ) );

//		var_dump($settings_to_import);

//		SWP()->import_settings( $settings_to_import );

	}

}