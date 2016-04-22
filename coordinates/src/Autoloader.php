<?php

spl_autoload_register('my_autoload');

function my_autoload($class_name) {
	include $class_name . '.php';
}