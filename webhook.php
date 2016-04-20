<?php

require 'vendor/autoload.php';

try {
	$payload = (new Horntell\Event)->fromWebhook();

	file_put_contents('webhooked.txt', json_encode($payload).PHP_EOL);
} catch(Horntell\Errors\Error $e) {
    var_dump($e->getMessage());
}