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

class YZES_Public {
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

		//Frontend Scripts
		add_action( 'wp_enqueue_scripts', array( $this, 'load_scripts_styles' ) );

		//Admin Scripts
		add_action( 'admin_enqueue_scripts', array( $this, 'load_scripts_styles_admin' ) );
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function load_scripts_styles() {

		################# Load Public Scripts - Frontend
		wp_enqueue_style( 'yzes-public-styles', YZES_URL . 'assets/css/pl-public-styles.css', array(), $this->version,
			'all' );
		wp_enqueue_script( 'yzes-public-styles', YZES_URL . 'assets/js/pl-public-styles.js', array( 'jquery' ),
			$this->version, false );

		if( get_option('ym_amib') == 1 ) {
			################# Farsi Calendar Selection (Amib Calendar) - Frontend
			wp_enqueue_style( 'yzes.fa.cal.selection.style', YZES_URL . 'lib/fa-date-selection/js-persian-cal.css', array(), $this->version,
				'all' );
			wp_enqueue_script( 'yzes.fa.cal.selection.script', YZES_URL . 'lib/fa-date-selection/js-persian-cal.min.js', array( 'jquery' ),
				$this->version, false );
		}

		if( get_option('ym_jq_validator') == 1 ) {
			################# jQuery Validation - Frontend
			wp_enqueue_script( 'yzes.jquery.validation', YZES_URL . 'lib/jquery_validation/jquery.validate.js', array(),
				$this->version,
				'all' );
			wp_enqueue_script( 'yzes.jquery.validation.org', YZES_URL . 'lib/jquery_validation/jqueryvalidation.org.js',
				array(),
				$this->version,
				'all' );
		}

		if( get_option('ym_chartjs') == 1 ) {
			################# Chartjs - Frontend
			wp_enqueue_script('yzes.jquery.chartjs', YZES_URL . 'lib/Chart.min.js', array(),
				$this->version,
				'all');
		}

	}

	public function load_scripts_styles_admin() {

		################# Load Public Scripts - Admin
		wp_enqueue_style( 'yzes-public-styles', YZES_URL . 'assets/css/pl-public-styles.css', array(), $this->version,
			'all' );
		wp_enqueue_script( 'yzes-public-styles', YZES_URL . 'assets/js/pl-public-styles.js', array( 'jquery' ),
			$this->version, false );

		if( get_option('ym_amib') == 1 ) {
			################# Farsi Calendar Selection (Amib Calendar) - Admin
			wp_enqueue_style('yzes.fa.cal.selection.style', YZES_URL . 'lib/fa-date-selection/js-persian-cal.css', array(), $this->version,
				'all');
			wp_enqueue_script('yzes.fa.cal.selection.script', YZES_URL . 'lib/fa-date-selection/js-persian-cal.min.js', array('jquery'),
				$this->version, false);
		}

		if( get_option('ym_jq_validator') == 1 ) {
			################# jQuery Validation - Admin
			wp_enqueue_script( 'yzes.jquery.validation', YZES_URL . 'lib/jquery_validation/jquery.validate.js', array(),
				$this->version,
				'all' );
			wp_enqueue_script( 'yzes.jquery.validation.org', YZES_URL . 'lib/jquery_validation/jqueryvalidation.org.js',
				array(),
				$this->version,
				'all' );
		}

		if( get_option('ym_chartjs') == 1 ) {
			################# Chartjs - Admin
			wp_enqueue_script('yzes.jquery.chartjs', YZES_URL . 'lib/Chart.min.js', array(),
				$this->version,
				'all');
		}
	}
}
