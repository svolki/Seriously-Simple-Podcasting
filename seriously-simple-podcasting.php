<?php
/**
 * Plugin Name: Seriously Simple Podcasting
 * Version: 2.12.0-beta
 * Plugin URI: https://castos.com/seriously-simple-podcasting/?utm_medium=sspodcasting&utm_source=wordpress&utm_campaign=wpplugin_08_2019
 * Description: Podcasting the way it's meant to be. No mess, no fuss - just you and your content taking over the world.
 * Author: Castos
 * Author URI: https://castos.com/?utm_medium=sspodcasting&utm_source=wordpress&utm_campaign=wpplugin_08_2019
 * Requires PHP: 5.6
 * Requires at least: 4.4
 * Tested up to: 5.8
 *
 * Text Domain: seriously-simple-podcasting
 *
 * @package Seriously Simple Podcasting
 *
 * GitHub Plugin URI: https://github.com/CastosHQ/Seriously-Simple-Podcasting
 *
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use SeriouslySimplePodcasting\Controllers\App_Controller;

define( 'SSP_VERSION', '2.12.0-beta' );
define( 'SSP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'SSP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

if ( ! defined( 'SSP_CASTOS_APP_URL' ) ) {
	define( 'SSP_CASTOS_APP_URL', 'https://app.castos.com/' );
}
if ( ! defined( 'SSP_CASTOS_EPISODES_URL' ) ) {
	define( 'SSP_CASTOS_EPISODES_URL', 'https://episodes.castos.com/' );
}
if ( ! defined( 'SSP_CPT_PODCAST' ) ) {
	define( 'SSP_CPT_PODCAST', 'podcast' );
}
if ( ! defined( 'SSP_DOMAIN' ) ) {
	define( 'SSP_DOMAIN', 'seriously-simple-podcasting' );
}

require SSP_PLUGIN_PATH . 'vendor/autoload.php';

require_once SSP_PLUGIN_PATH . 'php/includes/ssp-functions.php';

global $ssp_app;
$ssp_app = new App_Controller( __FILE__, SSP_VERSION );
