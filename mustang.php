<?php

use GuzzleHttp\Client;
use Swagger\Client\ApiException;

/**
 * This is plugin core file
 *
 * @link              https://mustang-validation.com
 * @since             1.0.0
 * @package           mustang-validation
 *
 * @wordpress-plugin
 * Plugin Name:       Mustang Validation
 * Plugin URI:        https://mustang-validation.com
 * Description:       This is custom plugin that validate apis from uploaded files.
 * Version:           1.0.0
 * Author:            Mustang Validation
 * Author URI:        https://mustang-validation.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mustang-validation
 * Domain Path:       /languages
 *
 *   __  __           _
 *  |  \/  |_   _ ___| |_ __ _ _ __   __ _
 *  | |\/| | | | / __| __/ _` | '_ \ / _` |
 *  | |  | | |_| \__ \ || (_| | | | | (_| |
 *  |_|  |_|\__,_|___/\__\__,_|_| |_|\__, |
 *                                   |___/
 *
 */


// If this file is called directly, abort.
!defined('WPINC') ? exit : include("plugin.php");

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('MUSTANG_VERSION', '1.0.0');
define('MUSTANG_URL', plugin_dir_url(__FILE__));
define('MUSTANG_PATH', plugin_dir_path(__FILE__));
define('MUSTANG_BASENAME', plugin_basename(__FILE__));


// If this file is called directly, abort.
!file_exists(__DIR__ . "/vendor/autoload.php") ? exit : include(__DIR__ . "/vendor/autoload.php");

/**
 * The activate and deactivation action of the plugin.
 *
 * @since             1.0.0
 * @package           mustang-validation
 *
 */

register_activation_hook(__FILE__, [\Mustang\Core\Plugin::class, 'activate']);
register_deactivation_hook(__FILE__, [\Mustang\Core\Plugin::class, 'deactivate']);

/**
 * Load core of the plugin.
 *
 * @since             1.0.0
 * @package           mustang-validation
 */

\Mustang\Core\Plugin::instance();

// // Configure OAuth2 access token for authorization: default
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// $apiInstance = new Swagger\Client\Api\ErrorControllerApi(
//     // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
//     // This is optional, `GuzzleHttp\Client` will be used as default.
//     new Client(),
//     $config
// );

// try {
//     $result = $apiInstance->handle();
//     print_r($result);
// } catch (Exception $e) {
//     echo 'Exception when calling ErrorControllerApi->handle: ', $e->getMessage(), PHP_EOL;
// }
