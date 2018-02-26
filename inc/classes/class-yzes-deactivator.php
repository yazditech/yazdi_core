<?php

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @link       http://yazdi.me
 * @since      1.0.0
 *
 * @package    yazdi_core
 * @subpackage yazdi_core/inc
 * @author     Mahdi Yazdi <info@yazdi.me>
 */

class YZES_Deactivator {
	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */

	public function __construct() {


	}

	public function deactivate() {

		//delete_option( 'yzes_options' );
	}
}
