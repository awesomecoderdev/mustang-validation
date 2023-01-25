<?php

namespace Mustang\Frontend;

class Frontend
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in MUSTANG_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The MUSTANG_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style("{$this->plugin_name}", MUSTANG_URL . 'frontend/css/frontend.css', array(), (filemtime(MUSTANG_PATH . "frontend/css/awesomecoder-frontend.css") ?? $this->version), 'all');
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in MUSTANG_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The MUSTANG_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script("{$this->plugin_name}", MUSTANG_URL . 'frontend/js/frontend.js', array('jquery'), (filemtime(MUSTANG_PATH . "frontend/js/frontend.js") ?? $this->version), false);
		wp_enqueue_script("{$this->plugin_name}-jquery", MUSTANG_URL . 'assets/js/jquery-2.0.3.js', array('jquery'), null, false);
		// Some local vairable to get ajax url
		wp_localize_script($this->plugin_name, $this->plugin_name, array(
			"plugin" => [
				"name" 		=> "Mustang Validation",
				"author"	=>	"Mustang Validation",
				"homepage" 	=> "https://github.com/awesomecoderdev/mustang-validation"
			],
			"url" 		=> get_bloginfo('url'),
			"ajaxurl"	=> admin_url("admin-ajax.php"),
		));
	}
}
