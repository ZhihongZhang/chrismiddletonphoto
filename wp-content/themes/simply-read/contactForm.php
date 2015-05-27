<?php
/**
 * Created by PhpStorm.
 * User: ZhangZH
 * Date: 5/27/2015
 * Time: 13:29 PM
 */


require_once( ABSPATH . WPINC . '/class-phpmailer.php' );

$email = new PHPMailer();
$email->addAddress('chrismiddletonphoto@me.com');
$email->setFrom('adam.rice@eduadv.com.au');
$email->Subject = "Contact Message from ".$_POST['swpsmtp_name'];

$body = "<p><strong>Name:</strong>".$_POST['swpsmtp_name']." </p>" .
	"<p><strong>Email:</strong>".$_POST['swpsmtp_email']." </p>" .
	"<p><strong>Message:</strong>" .$_POST['swpsmtp_message']."</p>"
;

$email->MsgHTML($body);
if($email->send()){
	$reset['sendstatus']=1;
	$reset['message']='Thank you for contacting me.';
	return $reset;
}else{
	$reset['message']='There was an error sending the message';
	return $reset;
}
