<?php

require_once __DIR__ . '/lib/__init.php';
require_once __DIR__ . '/router/index.php';

$router = new Router();

$router->get('/', 'home.php');

$router->get('/home', 'home.php');

$router->get('/register', 'cadastro.php');

$router->get('/infocar', 'infoCar.php');