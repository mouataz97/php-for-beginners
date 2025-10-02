<?php

require_once 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if($uri == '/') {
    require_once 'controllers/index.php';
}else if($uri == '/about') {
    require_once 'controllers/about.php';
}else if($uri == '/contact') {
    require_once 'controllers/contact.php';
}else{
    require_once 'controllers/404.php';
}

[
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/404' => 'controllers/404.php',
]