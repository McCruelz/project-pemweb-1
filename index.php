<?php
$controller = $_GET['c'] ?? 'Admin';
$method     = $_GET['m'] ?? 'login';

require_once "controller/Controller.class.php";
require_once "controller/$controller.class.php";

$c = new $controller;
$c -> $method();