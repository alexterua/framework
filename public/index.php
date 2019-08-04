<?php

use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\ServerRequestFactory;
use Zend\HttpHandlerRunner\Emitter\SapiEmitter;

chdir(dirname(__DIR__));
require "vendor/autoload.php";

session_start();

### Initialization

$request = ServerRequestFactory::fromGlobals();

### Action

$name = $request->getQueryParams()['name'] ?? "Guest";

$response = (new HtmlResponse("Hello, $name!"))
    ->withHeader("Developer", "Alexterua");

### Sending

$emitter = new SapiEmitter();
$emitter->emit($response);