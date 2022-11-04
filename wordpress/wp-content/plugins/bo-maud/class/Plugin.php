<?php

namespace BO_Maud;

use BO_Maud\Routes\RoutesAPI;

class Plugin{
	
	//* Plugin construct
	function __construct()
	{
		add_action('rest_api_init', [RoutesAPI::class, 'create_API_routes']);
	}
	
}