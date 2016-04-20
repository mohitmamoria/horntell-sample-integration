<?php

require 'vendor/autoload.php';
require 'config.php';
Horntell\App::init($CONFIG['HORNTELL_KEY'], $CONFIG['HORNTELL_SECRET']);

try {
	(new Horntell\Campaign)->toProfile(1, $CONFIG['HORNTELL_CAMPAIGN_NEW_COMMENT'], array(
		'video_title' => 'VIDEO TITLE',
		'comment_person_photo' => 'http://placehold.it/41x41',
		'comment_person_name' => 'PERSON NAME',
		'comment_text' => 'SOME COMMENT',
		'comment_date' => 'Apr 22'
	));
} catch(Horntell\Errors\Error $e) {
    var_dump($e->getMessage());
}