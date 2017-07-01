<?php
	
	define('PREFIX', 			'/');
	define('ROOT', 				$_SERVER['DOCUMENT_ROOT'] . PREFIX);
	define('SERVER_SQL', 		'mysql/');

	define('RESOURCE', 			'http://g91280jl.bget.ru/');
	define('RESOURCE_URL', 		RESOURCE . 'your_token/');
	define('RESOURCE_RECOVERY', RESOURCE . 'recovery/');
	
	define('CLASSES', 			ROOT . 'classes/');
	define('EXCEPTIONS',		CLASSES . 'exceptions/');
	
	define('VIEWS',				ROOT . 'views/');
	
	define('CONTROLLERS',		ROOT . 'controllers/');
	
	define('MODELS',			ROOT . 'models/');
	
	define('TOKEN', 			'token');
	define('EMAIL', 			'email');
	define('URL', 				'url');
	define('TIMEZONE', 			'view');
	define('ID', 				'id');
	define('PAYMENT', 			'payment');
	define('ERROR',				'error');
	define('DOCS',				'docs');
	define('RECOVERY',			'recovery');
	define('NAME',				'name');
	define('SIGNUP',			'signup');
	
	define('TABLE_CLIENTS', 	'clients');
	define('TABLE_ORG', 		'organizations');
	define('TABLE_TELEGRAM', 	'access');
	define('TABLE_USERS',		'users');
	
	define('CLIENTS', 			'table/' . TABLE_CLIENTS . '/');
	define('ORGANIZATIONS', 	'table/' . TABLE_ORG . '/');
	define('TELEGRAM', 			'table/' . TABLE_TELEGRAM . '/');
	define('USERS', 			'table/' . TABLE_USERS . '/');
