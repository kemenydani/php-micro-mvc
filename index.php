<?php

define("BASE" , preg_replace('/[^\/]*$/','',$_SERVER["PHP_SELF"]));

require __DIR__ . '/vendor/autoload.php';
/*
spl_autoload_register(function($name) {
	include __DIR__ . '\\' . $name . '.php';
});
*/

Core\Router::init($_GET);