<?php
/**
 * Send email to Passed Email address
 *
 * @param String $to : The Email Address to Send.
 * @param String $subject : Email Subject.
 * @param String $content : The Content of the Email
 * @return boolean
 */
class YZES_Email {
	
	public function send_html_email($from, $to, $subject, $content) {
		
		$headers = "From: " . strip_tags($from) . "\r\n";
		$headers .= "Reply-To: " . strip_tags($from) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

		return wp_mail($to, $subject, $content, $headers);
	}


}
