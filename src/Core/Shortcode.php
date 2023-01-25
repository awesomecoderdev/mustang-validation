<?php

namespace Mustang\Core;

class ShortCode
{
	/**
	 * The array of error registered with WordPress.
	 *
	 * @since    1.0.0
	 * @access   public
	 * @var      string    $error    The error registered with WordPress to fire when the login errors.
	 */
	public static $error = null;

	/**
	 * The array of page_id registered with WordPress.
	 *
	 * @since    1.0.0
	 * @access   public
	 * @var      string    $page_id    The error registered with WordPress to fire when the page_id page.
	 */
	public static $page;

	/**
	 * Define the core functionality of the woocommerce.
	 *
	 * Check woocommerce activated or not.
	 *
	 * @since    1.0.0
	 */
	public function __construct()
	{
		// do something
	}

	/**
	 *  It is the shortcode functions of the template
	 *
	 * It will reutn the search box on a page
	 *
	 */
	public static function MUSTANG_shortcode_callback($atts = array(), $content = null, $tag = '')
	{
		$layouts = [
			"an1",
			"apkdone",
			"apkmodule",
			"kingmodapk",
			"techbigs",
		];
		$awesomecoder = shortcode_atts(array(
			"posts_per_page" => 12,
			"paginate" => true,
			"category" => null,
			"layout" => null,
		), $atts);

		ob_start();
		if ($awesomecoder["layout"] != null && in_array($awesomecoder["layout"], $layouts)) {
			include_once MUSTANG_PATH . 'frontend/views/shortcode/' . strtolower($awesomecoder["layout"]) . '.php';
		} else {
			include_once MUSTANG_PATH . 'frontend/views/shortcode/apps.php';
		}
		$apps = ob_get_contents();
		ob_end_clean();
		return $apps;
	}


	/**
	 *  It is the shortcode functions of the template
	 *
	 * It will reutn the search box on a page
	 *
	 */
	public static function MUSTANG_single_shortcode_callback($atts = array(), $content = null, $tag = '')
	{

		$awesomecoder = shortcode_atts(array(
			"layout" => null,
		), $atts);

		ob_start();
		include_once MUSTANG_PATH . 'frontend/views/single/apps.php';
		$apps = ob_get_contents();
		ob_end_clean();
		return $apps;
	}

	/**
	 *  It is the shortcode functions of the template
	 *
	 * It will reutn the search box on a page
	 *
	 */
	public static function run()
	{
		add_shortcode('ac_playstore_apps', [__CLASS__, 'MUSTANG_shortcode_callback']);
		add_shortcode('ac_playstore_single_apps', [__CLASS__, 'MUSTANG_single_shortcode_callback']);
	}
}
