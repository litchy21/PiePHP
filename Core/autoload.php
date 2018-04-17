<?php 

function my_autoloader($class) {
	$class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
	if (file_exists($class . '.php')) {
		include $class . '.php';
	} elseif (file_exists('src/' . $class . '.php')) {
		include 'src/' . $class . '.php';
	}
}

spl_autoload_register('my_autoloader');