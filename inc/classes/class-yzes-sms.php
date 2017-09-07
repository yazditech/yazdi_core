<?php
/**
 * Fired for Send SMS Messages.
 *
 * This class defines all code necessary to send SMS.
 *
 * @link       http://mahdiyazdi.com
 * @since      1.0.0
 *
 * @package    yazdi_essentials
 * @subpackage yazdi_essentials/inc
 * @author     Mahdi Yazdi <info@mahdiyazdi.com>
 */
class YZES_SMS {

	public function __construct( $sms_user, $sms_pass, $sms_from, $sms_to, $sms_msg, $address ) {

		$this->sms_user = urlencode($sms_user);
		$this->sms_pass = urlencode($sms_pass);
		$this->sms_from = urlencode($sms_from);
		$this->sms_to = urlencode($sms_to);
		$this->sms_msg = urlencode($sms_msg);
		$this->webservice_address = urlencode($address);

	}

	public function send() {

		return file_put_contents("{$this->webservice_address}{$this->sms_user}&arg2={$this->sms_pass}&arg3={$this
		->sms_to}&arg4={$this
		->sms_from}&arg5={$this->sms_msg}");

//		$result = $client->call('send', array(
//			'username' => $this->sms_user,
//			'password' => $this->sms_pass,
//			'message' => $this->sms_msg,
//			'to' => $this->sms_to,
//			'from' => $this->sms_from
//		));

//		require_once(GWME_PATH . '/inc/nusoap.php');
//		$client = new soapclient_nu('http://smsg.ir/webservice/?wsdl', 'wsdl');

	}
}
