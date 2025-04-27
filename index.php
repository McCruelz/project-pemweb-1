<?php
$controller = $_GET['c'] ?? 'AppController';
$method     = $_GET['m'] ?? 'login';

require_once "controller/Controller.class.php";
require_once "controller/$controller.class.php";

$c = new $controller;
$c -> $method();