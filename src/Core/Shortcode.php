<?php

namespace Mustang\Core;

use Mustang\Utils\Arrays;
use Mustang\Container\ContainerInterface;

class ShortCode // implements ContainerInterface
{
	/**
	 *  It is the shortcode functions of the template
	 *
	 * It will reutn the search box on a page
	 *
	 */
	public static function shortcode_callback($atts = array(), $content = null, $tag = '')
	{
		$options = shortcode_atts(array(
			"posts_per_page" => 12,
			"paginate" => true,
			"category" => null,
			"layout" => null,
		), $atts);

		ob_start();
		include_once MUSTANG_PATH . 'frontend/views/shortcode/index.php';
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
	public static function run(): void
	{
		add_shortcode("mustang", [__CLASS__, 'shortcode_callback']);
	}
}
