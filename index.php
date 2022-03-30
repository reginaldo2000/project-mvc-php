<?php

require __DIR__ . '/vendor/autoload.php';

use App\Http\Router;
use App\Controller\Pages\Home;
use App\Controller\Pages\UserController;
use App\Http\Response;
use App\Utils\View;

define('URL', 'http://localhost/project-mvc-php');
$route = new Router(URL);

View::init([
    'URL' => URL
]);

$route->get('/', [
    function () {
        return new Response(200, Home::getHome());
    }
]);

$route->get('/api/user', [
    function () {
        $response = new Response(200, UserController::getUser(505));
        $response->setContentType('application/json');
        return $response;
    }
]);

$route->run()->sendResponse();
