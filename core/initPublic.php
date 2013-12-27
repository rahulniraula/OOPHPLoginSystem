<?php
	session_start();
	$GLOBALS['config'] = array(
		'mysql'		=> array(
			'host'		=> '127.0.0.1',
			'username'	=> 'username',
			'password'	=> 'password',
			'db'		=> 'databasename',
		),
		'remember'	=> array(
			'cookieName'	=> 'hash',
			'cookieExpiry'	=> 604800,	//1 Week
		),
		'session'	=> array(
			'sessionName'	=> 'user'
		)
	);
	
	spl_autoload_register(function($class) {
		require_once 'classes/'.$class.'.php';
	});

	require_once 'functions/sanitize.func.php';
?>