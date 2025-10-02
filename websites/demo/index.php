<?php

require_once 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/404' => 'controllers/404.php',
];

if(array_key_exists($uri, $routes)) {
    require_once $routes[$uri];
} else {
    require_once $routes['/404'];
}
