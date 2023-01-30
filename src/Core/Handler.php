<?php

namespace Mustang\Core;

class Handler
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
	 * The array of error registered with WordPress.
	 *
	 * @since    1.0.0
	 * @access   public
	 * @var      string    $error    The error registered with WordPress to fire when the login errors.
	 */
	public static $success = null;

	/**
	 * The array of page_id registered with WordPress.
	 *
	 * @since    1.0.0
	 * @access   public
	 * @var      string    $page_id    The error registered with WordPress to fire when the page_id page.
	 */
	public static $page;

	/**
	 * The instacne of the woocommerce.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      bool    $instance    The instacne of the woocommerce.
	 */
	private static $instance = false;

	/**
	 * Define the core functionality of the woocommerce.
	 *
	 * Check woocommerce activated or not.
	 *
	 * @since    1.0.0
	 */
	public function __construct()
	{
		// do somethings
	}


	/**
	 *  It is the shortcode functions of the template
	 *
	 * It will reutn the search box on a page
	 *
	 */
	public static function frontend_ajax_handler()
	{
		$request = json_decode(file_get_contents('php://input'));
		echo json_encode($_REQUEST);

		// end ajax
		wp_die();
	}

	/**
	 *  It is the shortcode functions of the template
	 *
	 * It will reutn the search box on a page
	 *
	 */
	public static function backend_ajax_handler()
	{
		$request = json_decode(file_get_contents('php://input'));
		if (isset($request->app)) {
			echo json_encode(self::extract_playstore_data($request->app));
		} else {
			echo json_encode([
				"success" => false,
				"msg" => "Something went wrong!",
			]);
		}

		// end ajax
		wp_die();
	}


	/**
	 *  It is the shortcode functions of the template
	 *
	 * It will reutn the search box on a page
	 *
	 */
	public static function submit()
	{
		session_start();
		$redirect = isset($_REQUEST["_wp_http_referer"]) ? strtok($_REQUEST["_wp_http_referer"], "?") : strtok(get_the_permalink(), "?");
		if (isset($_POST['mustang'], $_REQUEST["token"]) && wp_verify_nonce($_POST['mustang'], 'mustang_action')) {
			$_token = isset($_REQUEST["_token"]) ? $_REQUEST["_token"] : "_token";
			$token = isset($_REQUEST["token"]) ? $_REQUEST["token"] : "token";

			if ($_token == $token) {
				$_SESSION["_token"] = $_token;

				// echo "<pre>";
				// print_r($_POST);
				// echo "</pre>";

				// echo "<pre>";
				// print_r($_FILES);
				// echo "</pre>";

				if (isset($_FILES['file']) && !empty($_FILES['file']['name'])) {
					$file_type = $_FILES['file']['type'];

					if (!in_array($file_type, config("allowed_file_type"))) {
						wp_redirect("$redirect?error=invalid_file_type");
						exit;
					}



					$_SESSION[$token] = array(
						"file"  => $_FILES['file'],
						"request" => $_REQUEST,
					);

					// $_SESSION["outputs"] = array(
					// 	"file"  => $_FILES['file'],
					// 	"request" => $_REQUEST,
					// );
				} else {
					wp_redirect("$redirect?error=invalid_file");
					exit;
				}

				// wp_redirect("$redirect?success");
				// exit;
			} else {
				wp_redirect("$redirect?error=invalid_token");
				exit;
			}
		}
	}


	/**
	 *  It is the shortcode functions of the template
	 *
	 * It will reutn the search box on a page
	 *
	 */
	public static function init()
	{
		// add_action('init', array(__CLASS__, 'submit'));
		add_action('template_redirect', array(__CLASS__, 'submit'));

		// backend
		add_action("wp_ajax_mustang_backend", [__CLASS__, 'backend_ajax_handler']);
		add_action("wp_ajax_nopriv_mustang_backend", [__CLASS__, 'backend_ajax_handler']);

		// frontend
		add_action("wp_ajax_mustang_frontend", [__CLASS__, 'frontend_ajax_handler']);
		add_action("wp_ajax_nopriv_mustang_frontend", [__CLASS__, 'frontend_ajax_handler']);
	}
}
