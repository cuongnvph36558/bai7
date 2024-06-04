<?php

use Cuong\Bai7\Controllers\Client\AboutController;
use Cuong\Bai7\Controllers\Client\ContactController;
use Cuong\Bai7\Controllers\Client\HomeController;
use Cuong\Bai7\Controllers\Client\ProductController;

$router->get('/',               HomeController::class       . '@index');
$router->get('/about',          AboutController::class      . '@index');
$router->get('/contact',        ContactController::class    . '@index');
$router->post('/contact/store', ContactController::class    . '@store');
$router->post('/products',      ProductController::class    . '@index');
$router->post('/products/{id}', ProductController::class    . '@detail');
