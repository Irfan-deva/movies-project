<?php
require '../utils.php';
rootPath('home');
require '../Router.php';

$router = new Router();

require '../routes.php';

$uri = $_SERVER['REQUEST_URI'];

$method = $_SERVER['REQUEST_METHOD'];


$router->route($uri, $method);
