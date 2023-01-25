<?php

namespace Mustang\Core;

class I18n
{

	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain()
	{

		load_plugin_textdomain(
			'mustang-validation',
			false,
			MUSTANG_PATH . '/languages/'
		);
	}
}
