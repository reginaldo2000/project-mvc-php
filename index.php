<?php

require __DIR__ . '/vendor/autoload.php';

use App\Http\Router;
use App\Controller\Pages\Home;
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

$route->run()->sendResponse();
