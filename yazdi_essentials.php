<?php
/**
 * Yazdi Essentials
 *
 * @author      Mahdi Yazdi
 * @copyright   2017 MahdiYazdi
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Yazdi Essentials
 * Plugin URI:  http://mahdiyazdi.com
 * Description: Essential Libraries for Yazdi Plugins. These Libraries are Required. You have to activate this plugin to avoid Fatal Errors.
 * Version:     1.7.0
 * Author:      Mahdi Yazdi
 * Author URI:  http://mahdiyazdi.com
 * Text Domain: yazdi_essentials
 * License:     GPL-2.0+
 * License URI: https://www.gnu.org/licenses/licenses.en.html
 */

// Limit Direct Access.
defined('ABSPATH') || exit('no access');

final class Yazdi_Essentials {
    private static $_instance = NULL;

    public static function getInstance() {
        if ( self::$_instance === NULL ) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function __construct() {

        // Define Constants
        define('YZES_PATH', trailingslashit(plugin_dir_path(__FILE__)) );
        define('YZES_URL', trailingslashit(plugin_dir_url(__FILE__)) );
        define('YZES_INC',trailingslashit(YZES_PATH.'inc'));
        define('YZES_CLASS_PATH',trailingslashit(YZES_PATH.'inc/classes'));
        define('YZES_TPL',trailingslashit(YZES_PATH.'tpl'));
        define('YZES_CSS',trailingslashit(YZES_URL.'assets/css'));
        define('YZES_JS',trailingslashit(YZES_URL.'assets/js'));
        define('YZES_IMAGES',trailingslashit(YZES_URL.'assets'.'/'.'img'));
        define('YZES_ADMIN_INC',trailingslashit(YZES_PATH.'admin/inc'));
        define('YZES_ADMIN_CSS',trailingslashit(YZES_URL.'admin/assets/css'));
        define('YZES_ADMIN_JS',trailingslashit(YZES_URL.'admin/assets/js'));

        define('YZES_NAME', 'yazdi_essentials');
        define('YZES_VERSION', '1.0.0');


        spl_autoload_register( array ( $this, '__autoload' ) );

        ################## Admin Operations
        if(is_admin()) {

            $obj_yzes_admin = new YZES_Admin( YZES_NAME, YZES_VERSION );
        }
        ################## FrontEnd Operations
        else {

            // Call Frontend functionalities of the plugin.
            $obj_yzes_frontend = new YZES_Frontend( YZES_NAME, YZES_VERSION );
        }

        ################## Load in Both (admin & frontend)
        include YZES_PATH . '/inc/functions.php';


        $obj_yzes_public = new YZES_Public( YZES_NAME, YZES_VERSION );

        ################## Create Default Settings on Activate
        $obj_yzes_activator = new YZES_Activator();
        register_activation_hook( __FILE__, array( $obj_yzes_activator, 'activate' ) );

        ################## Remove and  disable settings & ...
        $obj_yzes_deactivator = new YZES_Deactivator();
        register_deactivation_hook(__FILE__, array( $obj_yzes_deactivator, 'deactivate' ) );


        $obj_yzes_loader = new YZES_Loader( YZES_NAME );
    }

    public function __autoload( $class )
    {
        if ( FALSE !== strpos( $class, 'YZES_' ) ) {
            $class_name = 'class-' . str_replace( '_', '-', $class );
            $class_file_path = YZES_CLASS_PATH . strtolower( $class_name ) . '.php';
            if ( is_file( $class_file_path ) && file_exists( $class_file_path ) ) {
                include_once $class_file_path;
            }
        }
    }

    public function __clone() {

        // TODO: Implement __clone() method.
    }

    public function __wakeup() {

        // TODO: Implement __wakeup() method.
    }
}

Yazdi_Essentials::getInstance();

