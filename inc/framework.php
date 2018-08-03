<?php

namespace BEAPI\Theme\Framework;

/**
 * Class Framework
 *
 * @package BEAPI\Theme\Framework
 */
class Framework {
	/**
	 * @var Service_Container
	 */
	protected static $container;

	/**
	 * @var $services
	 */
	protected static $services = [
		// Services
		\BEAPI\Theme\Framework\Services\Theme::class,
//		\BEAPI\Theme\Framework\Services\Assets::class,
//		\BEAPI\Theme\Framework\Services\Assets_CSS_Async::class,
//		\BEAPI\Theme\Framework\Services\Assets_JS_Async::class,
		\BEAPI\Theme\Framework\Services\SVG::class,
		\BEAPI\Theme\Framework\Services\Favicons::class,
		\BEAPI\Theme\Framework\Services\Acf::class,
		\BEAPI\Theme\Framework\Services\Sidebar::class,
		\BEAPI\Theme\Framework\Services\Menu::class,
//		\BEAPI\Theme\Framework\Services\FacetWp::class,
//		\BEAPI\Theme\Framework\Services\SearchWp::class,

		// Services as Tools
		\BEAPI\Theme\Framework\Tools\Body_Class::class,
		\BEAPI\Theme\Framework\Tools\Template_Parts::class,
	];

	/**
	 * @return Service_Container
	 */
	public static function get_container() {
		if ( is_null( self::$container ) ) {
			self::$container = new Service_Container();
			array_map( [ __CLASS__, 'register_service' ], self::$services );
		}

		return self::$container;
	}

	/**
	 * Register Service
	 *
	 * @param $name
	 */
	public static function register_service( $name ) {
	 	self::get_container()->register_service( $name );
	}
}