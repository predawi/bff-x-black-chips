<?php

namespace BEAPI\Theme\Framework\Services;

use BEAPI\Theme\Framework\Service;
use BEAPI\Theme\Framework\Service_Container;

/**
 * Class FacetWp
 *
 * @package BEAPI\Theme\Framework\Services
 *
 */
class FacetWp implements Service {

	/**
	 * @var string
	 */
	private $path = 'assets/facetwp/config.json';

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
		return 'facetwp';
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
		add_filter( 'facetwp_facets', [ $this, 'register_facets' ] );
	}

	public function register_facets( $facets ) {

		$file_path = dirname( dirname( __DIR__ ) ) . '/' . $this->path;
		if ( ! file_exists( $file_path ) ) {
			wp_die( sprintf( __( 'Missing the config file: [theme-name]/%s', 'framework-textdomain' ), $this->path ) );
		}
		$file_url  = get_template_directory_uri() . '/' . $this->path;
		$json_file = wp_remote_get( $file_url );
		if ( ! is_array( $json_file ) || is_wp_error( $json_file ) ) {
			wp_die( esc_html( __( 'Problem with the json file', 'framework-textdomain' ) ) );
		}

		$elements = json_decode( wp_remote_retrieve_body( $json_file ), true );
		if ( is_array( $elements ) && count( $elements ) > 0 ) {
			foreach ( $elements as $all_facets_type ) {
				foreach ( $all_facets_type as $facet ) {
					$facets[] = $facet;
				}
			}
		}

		return $facets;
	}
}