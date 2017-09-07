<?php
/**
 * yazdi_essentials
 *
 * @author      Mahdi Yazdi
 * @copyright   2016 MahdiYazdi
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: yazdi_essentials
 * Plugin URI:  http://mahdiyazdi.com
 * Description: Essential Libraries for Yazdi Plugins. These Libraries are Required.
 * Version:     1.0.0
 * Author:      Mahdi Yazdi
 * Author URI:  http://mahdiyazdi.com
 * Text Domain: yazdi_essentials
 * License:     GPL-2.0+
 * License URI: https://www.gnu.org/licenses/licenses.en.html
 */

// Limit Direct Access.
defined('ABSPATH') || exit('no access');

// Define Constants
define('YZES_PATH', trailingslashit(plugin_dir_path(__FILE__)) );
define('YZES_URL', trailingslashit(plugin_dir_url(__FILE__)) );
define('YZES_INC',trailingslashit(YZES_PATH.'inc'));
define('YZES_TPL',trailingslashit(YZES_PATH.'tpl'));
define('YZES_CSS',trailingslashit(YZES_URL.'assets/css'));
define('YZES_JS',trailingslashit(YZES_PATH.'assets/js'));
define('YZES_IMAGES',trailingslashit(YZES_PATH.'assets'.'/'.'img'));
define('YZES_ADMIN_INC',trailingslashit(YZES_PATH.'admin/inc'));
define('YZES_ADMIN_CSS',trailingslashit(YZES_URL.'admin/assets/css'));
define('YZES_ADMIN_JS',trailingslashit(YZES_URL.'admin/assets/js'));

define('YZES_NAME', 'yazdi_essentials');
define('YZES_VERSION', '1.0.0');


################## Admin Includes
if(is_admin()) {
	include YZES_PATH . '/inc/classes/class-yzes-admin.php';
	$obj_yzes_admin = new YZES_Admin( YZES_NAME, YZES_VERSION );
	
}
################## FrontEnd Includes
else {
	include YZES_PATH . '/inc/classes/class-yzes-frontend.php';

	// Call Frontend functionalities of the plugin.
	$obj_yzes_frontend = new YZES_Frontend( YZES_NAME, YZES_VERSION );
}

################## Load in Both (admin & frontend)
include YZES_PATH . '/inc/classes/class-yzes-activator.php';
include YZES_PATH . '/inc/classes/class-yzes-deactivator.php';
include YZES_PATH . '/inc/classes/class-yzes-loader.php';
include YZES_PATH . '/inc/classes/class-yzes-public.php';
include YZES_PATH . '/inc/functions.php';
include YZES_PATH . '/lib/class.gump.php';

//Jalali Date Installation
if (!function_exists('jdate'))
	include YZES_PATH . '/lib/jdf.php';

$obj_yzes_public = new YZES_Public( YZES_NAME, YZES_VERSION );

// Create Default Settings on Activate
$obj_yzes_activator = new YZES_Activator();
register_activation_hook( __FILE__, array( $obj_yzes_activator, 'activate' ) );

// Remove and  disable settings & ...
$obj_yzes_deactivator = new YZES_Deactivator();
register_deactivation_hook(__FILE__, array( $obj_yzes_deactivator, 'deactivate' ) );


$obj_yzes_loader = new YZES_Loader( YZES_NAME );




