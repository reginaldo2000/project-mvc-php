<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controller\Pages\Home;
use App\Http\Response;

$response = new Response(200, "Hello  todo mundo!!!!");
//var_dump($response);
$response->sendResponse();

var_dump($response->getHeaders());
exit;
echo Home::getHome();
