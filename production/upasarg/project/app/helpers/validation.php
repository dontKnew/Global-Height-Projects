<?php

require_once $config['paths']['vendor'] . '/autoload.php';

$validator = new Rakit\Validation\Validator([
	'required' => ':attribute is required',
	'email' => 'Email is invalid',
	'min' => 'Minimum length should be :min',
	'max' => 'Minimum length should be :max',
]);
