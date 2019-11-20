<?php
require_once __DIR__. '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$name = $request->get('name', 'World');

$response = new Response(sprintf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8')));

$response->send();




$request = Request::create('/index.php?name=Fabien');


$response = new Response();

$response->setContent('Hello world!');
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');

// configure the HTTP cache headers
$response->setMaxAge(10);






$myIp ='127.0.0.1:8000';

$request = Request::createFromGlobals();

if ($myIp === $request->getClientIp()) {
    // the client is a known one, so give it some more privilege
}