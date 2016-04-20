<?php

require 'vendor/autoload.php';
require 'config.php';

Horntell\App::init($CONFIG['HORNTELL_KEY'], $CONFIG['HORNTELL_SECRET']);

$users = get_users();

foreach($users as $user) {
	$profile = (new Horntell\Profile)->create(array(
		'uid' => $user['id'],
		'email' => $user['email']
	));

	var_dump($profile);
}

function get_users() {
	return array(
		array(
			'id' => 1,
			'email' => 'a@example.com'
		),
		array(
			'id' => 2,
			'email' => 'b@example.com'
		),
		array(
			'id' => 3,
			'email' => 'c@example.com'
		),
	);
}