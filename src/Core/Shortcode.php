<?php

namespace Mustang\Core;

class ShortCode
{
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
	 * It will return the search box on a page
	 *
	 */
	public static function run()
	{
		// \Mustang\Module\Shortcode::register("mustang", [__CLASS__, 'MUSTANG_shortcode_callback']);
	}
}
