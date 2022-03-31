<?php

require __DIR__ . '/vendor/autoload.php';

use App\Http\Router;
use App\Controller\Pages\UserController;
use App\Http\Response;
use App\Utils\View;

define('URL', 'http://localhost/projeto');
$route = new Router(URL);

View::init([
    'URL' => URL
]);

$route->get('/', [
    function ($teste) {
        return new Response(200, UserController::showLogin());
    }
]);

$route->post('/efetuarlogin', [
    function($data) {
        return new Response(200, UserController::efetuarLogin($data));
    }
]);

$route->run()->sendResponse();
