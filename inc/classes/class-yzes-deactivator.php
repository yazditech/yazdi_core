<?php

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @link       http://mahdiyazdi.com
 * @since      1.0.0
 *
 * @package    yazdi_essentials
 * @subpackage yazdi_essentials/inc
 * @author     Mahdi Yazdi <info@mahdiyazdi.com>
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
