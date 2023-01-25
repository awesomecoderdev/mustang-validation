<?php

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
!defined('WPINC') ? die : include("plugin.php");

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
if (file_exists(__DIR__ . "/vendor/autoload.php")) {
    include __DIR__ . "/vendor/autoload.php";
}

/**
 * The activate and deactivation action of the plugin.
 *
 * @since             1.0.0
 * @package           mustang-validation
 *
 */

register_activation_hook(__FILE__, [Plugin::class, 'activate']);
register_deactivation_hook(__FILE__, [Plugin::class, 'deactivate']);

/**
 * Load core of the plugin.
 *
 * @since             1.0.0
 * @package           mustang-validation
 */

Plugin::instance();
