<?php

use Root\PHP\MVC\App\Router;
use Root\PHP\MVC\Controller\HomeController;
use Root\PHP\MVC\Controller\UserController;
use Root\PHP\MVC\Middleware\MustLoginMiddleware;
use Root\PHP\MVC\Middleware\MustNotLoginMiddleware;

require_once __DIR__ . '/../vendor/autoload.php';

Router::add('GET', '/', [HomeController::class, 'index'],  [MustLoginMiddleware::class]);

Router::add('GET', '/users/register', [UserController::class, 'register'], [MustNotLoginMiddleware::class]);
Router::add('POST', '/users/register', [UserController::class, 'postRegister'], [MustNotLoginMiddleware::class]);
Router::add('GET', '/users/login', [UserController::class, 'login'],  [MustNotLoginMiddleware::class]);
Router::add('POST', '/users/login', [UserController::class, 'postLogin'],  [MustNotLoginMiddleware::class]);
Router::add('GET', '/users/logout', [UserController::class, 'logout'],  [MustLoginMiddleware::class]);

Router::run();
