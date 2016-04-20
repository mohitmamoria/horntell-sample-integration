<?php

require 'vendor/autoload.php';

try {
	$payload = (new Horntell\Event)->fromWebhook();

	if($payload['type'] => 'card.responded') {
		file_put_contents('webhooked.txt', $payload['resource']['response']['type'] . ' ' . $payload['resource']['response']['value'].PHP_EOL);
	} else {
		file_put_contents('webhooked.txt', $payload.PHP_EOL);
	}
} catch(Horntell\Errors\Error $e) {
    var_dump($e->getMessage());
}