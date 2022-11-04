<?php

namespace BO_Maud\Routes;

use BO_Maud\Form\Form;

class RoutesAPI
{
	public static function create_API_routes(){

		//* ROUTE FORM
		
		register_rest_route( 'bo-maud/v1', 'submitForm', [
			'methods' => 'POST',
			'callback' => [Form::class, 'submitForm'],
			],
		);
		
	}
}