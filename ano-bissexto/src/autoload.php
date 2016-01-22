<?php

spl_autoload_register(function ($class_name) {
	$file = dirname(__FILE__) . DIRECTORY_SEPARATOR . $class_name . '.php';
	if (file_exists($file)) {
		require_once $file;
	}
});