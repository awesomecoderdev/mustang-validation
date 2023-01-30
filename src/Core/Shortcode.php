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
		$props = shortcode_atts(array(
			"privacy" => "https://google.com",
		), $atts);

		ob_start();
		include_once MUSTANG_PATH . 'frontend/views/shortcode/index.php';
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
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
