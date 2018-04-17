<?php
namespace Core;
$url_parts = explode(DIRECTORY_SEPARATOR, $_SERVER['REQUEST_URI']);
$last_part = $url_parts[count($url_parts)-1];
$id = (preg_match('/[0-9]+/', $last_part)) ? $last_part : null;

Router::connect('Webacademie/PiePHP', ['controller' => 'app', 'action' => 'index']);
Router::connect('Webacademie/PiePHP/app', ['controller' => 'app', 'action' => 'index']);
Router::connect('Webacademie/PiePHP/user', ['controller' => 'user', 'action' => 'index']);
Router::connect('Webacademie/PiePHP/user/add', ['controller' => 'user', 'action' => 'add']);
Router::connect('Webacademie/PiePHP/user/register', ['controller' => 'user', 'action' => 'register']);
Router::connect('Webacademie/PiePHP/user/login', ['controller' => 'user', 'action' => 'login']);
Router::connect('Webacademie/PiePHP/user/show', ['controller' => 'user', 'action' => 'show']);
Router::connect('Webacademie/PiePHP/user/logout', ['controller' => 'user', 'action' => 'logout']);
Router::connect('Webacademie/PiePHP/film/show', ['controller' => 'film', 'action' => 'show']);
Router::connect("Webacademie/PiePHP/film/show/$id", ['controller' => 'film', 'action' => 'show']);
Router::connect("Webacademie/PiePHP/film/add", ['controller' => 'film', 'action' => 'add']);
Router::connect("Webacademie/PiePHP/genre/show", ['controller' => 'genre', 'action' => 'show']);
