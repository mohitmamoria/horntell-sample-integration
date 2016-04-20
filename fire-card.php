<?php

require 'vendor/autoload.php';
require 'config.php';
Horntell\App::init($CONFIG['HORNTELL_KEY'], $CONFIG['HORNTELL_SECRET']);

try {
	(new Horntell\Card)->toProfile(1, array(
		'text' => 'You\'ve got a new todo assigned to you by Alley Doe.',
	    'include' => array(
	        'format' => 'quote',
	        'icon' => 'http://placehold.it/40x40',
	        'title' => 'Create media_video format',
	        'text' => 'Users should be able to embed Youtube or other videos in their cards.',
	        'label' => array(
	            'format' => 'danger',
	            'text' => 'Due',
	            'sub_text' => 'May 1'
	        )
	    ),
	    'action' => array(
	        'format' => 'choice_reply',
	        'reply' => array(
	            'placeholder' => 'Add Comment',
	            'default' => null
	        ),
	        'choices' => array(
	            array(
	                'identifier' => 'mark_as_completed',
	                'text' => 'Mark Completed'
	            )
	        )
		)
	));
} catch(Horntell\Errors\Error $e) {
    var_dump($e->getMessage());
}