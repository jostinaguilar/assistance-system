<?php

use App\Assist\Core\Route;
use App\Assist\Core\View;
use App\Assist\Users\Controllers\UserController;

$route = new Route();

$route->get('/', function () {
  $view = new View();
  $view->render('Home/index');
});

$route->get('/signup', function () {
  $controller = new UserController();
  $controller->render('Users/Views/signup');
});

$route->get('/login', function () {
  $controller = new UserController();
  $controller->render('Users/Views/login');
});

$route->get('/register', function () {
  $controller = new UserController();
  $controller->register();
});

$route->run();
