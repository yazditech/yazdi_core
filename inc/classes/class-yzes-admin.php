<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @link       http://mahdiyazdi.com
 * @since      1.0.0
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 * @author     Mahdi Yazdi <info@mahdiyazdi.com>
 */

class YZES_Admin {
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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		add_action('admin_menu',  array( $this, 'yzes_add_admin_menus' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'load_scripts_styles' ) );
	}
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function load_scripts_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( 'yzes-admin.css', YZES_URL . 'admin/assets/css/pl-admin.css', array(), $this->version, 'all' );
		wp_enqueue_script( 'yzes-admin.js', YZES_URL . 'admin/assets/js/pl-admin.js', array( 'jquery' ), $this->version,
			false );
		wp_enqueue_script( 'yzes-chart.js', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.min.js', array( 'jquery' ), $this->version,
			false );

		wp_enqueue_script(
			'mszy-ajax.js',
			YZES_URL . 'admin/assets/js/ajax.js',
			array( 'jquery' ),
			$this->version,
			false
		);
		wp_localize_script('mszy-ajax.js', 'data', array('ajax_url'=>admin_url('admin-ajax.php')));

	}

	public function yzes_add_admin_menus() {

		$yzes_theme_options_hook = add_menu_page( 'تنظیمات کتابخانه‌ها', 'کتابخانه‌ها', 'manage_options',
		'yazdi_essentials-page', array( $this, 'yzes_options_page' ), 'dashicons-admin-generic');
	}

	//Plugin option page operations
	public static function yzes_options_page() {

	    include YZES_PATH . '/tpl/panel.php';

	}
}
