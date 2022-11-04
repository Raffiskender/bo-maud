<?php

namespace BO_Maud\Form ;

use BO_Maud\PrivateItems\PrivateData;

class Form
{
	
	public static function submitForm($params){
    $from = $params['from'];
    $name = $params['name'];
    $company = $params['company'];
    $message = $params['message'];
    $errors = [];

		//* VERIFICATIONS
    if (empty($from)) {
        $errors['from'] = 'No email was entered';
    }
    if (!empty($from) && !is_email($from)) {
        $errors['from'] = 'This doesn\'t seems to be a valid email';
    }
    if (empty($name)) {
        $errors['name'] = 'No name was entered';
    }
    if (empty($company)) {
        $errors['company'] = 'No company was entered';
    }
    if (empty($message)) {
        $errors['message'] = 'No message was entered';
    }
    if (!empty($errors)) {
        return (array_values($errors));
    }

		// SENDING (if no errors was found)
		
    $headers = [
      'Content-Type: text/html; charset=UTF-8',
      'From: ' . PrivateData::MAIL_FROM
    ];

    $mailContent = "
		<html>
			<body>
			<p>from : $from</p>
			<p>name : $name</p>
			<p>company : $company</p>
			<p>message : $message</p>
		
			</body>
		</html>
		";
		return$headers;
    return (wp_mail(PrivateData::MAIL_TO, 'Contact depuis le formulaire du portfolio', $mailContent, $headers)) ;
		
	}
}