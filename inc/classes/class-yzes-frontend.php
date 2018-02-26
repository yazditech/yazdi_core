<?php
/**
 * Fired public and other codes and methods
 *
 * @link       http://yazdi.me
 * @since      1.0.0
 *
 * @package    yazdi_core
 * @subpackage yazdi_core/inc
 * @author     Mahdi Yazdi <info@yazdi.me>
 */

class YZES_Frontend {
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

//	public $yzes_options;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

//		$yzes_options = get_option('yzes_options');
		add_action( 'wp_enqueue_scripts', array( $this, 'load_scripts_styles' ) );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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
		 * The yazdi_core-Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( 'yzes-public-styles', YZES_URL . 'assets/css/pl-public-styles.css', array(),
			$this->version, 'all' );
		wp_enqueue_script( 'yzes-public-styles', YZES_URL . 'assets/js/pl-public-styles.js', array( 'jquery' ),
			$this->version, false );
	}
}
