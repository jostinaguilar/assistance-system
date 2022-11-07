<?php

use App\Assist\Controllers\CreateController;
use App\Assist\Controllers\HomeController;
use App\Assist\Core\Route;



$route = new Route();

$route->get('/', function () {
  $controller = new HomeController();
  $controller->index();
});

$route->get('/create', function () {
  $controller = new CreateController();
  $controller->index();
});

$route->get('/users', function () {
  $controller = new HomeController();
  $controller->getDataJson();
});

$route->run();
