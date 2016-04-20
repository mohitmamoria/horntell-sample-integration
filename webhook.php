<?php

// file_put_contents('webhooked.txt', $_POST['horntell_event'] . PHP_EOL, FILE_APPEND);

require 'vendor/autoload.php';

try {
	$payload = (new Horntell\Event)->fromWebhook();

	if($payload['type'] == 'card.responded') {
		file_put_contents('webhooked.txt', json_encode($payload['resource']).PHP_EOL);
	} else {
		file_put_contents('webhooked.txt', $payload.PHP_EOL);
	}
} catch(Horntell\Errors\Error $e) {
    var_dump($e->getMessage());
}