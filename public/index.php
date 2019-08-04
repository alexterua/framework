<?php

use Framework\Http\RequestFactory;
use Framework\Http\Response;

chdir(dirname(__DIR__));
require "vendor/autoload.php";

session_start();

### Initialization

$request = RequestFactory::fromGlobals();

### Action

$name = $request->getQueryParams()['name'] ?? "Guest";

$response = (new Response("Hello, $name!"))
    ->withHeader("Developer", "Alexterua");

### Sending

header('HTTP/1.1' . $response->getStatusCode() . ' ' . $response->getReasonPhrase());
foreach ($response->getHeaders() as $name => $value) {
    header("$name:$value");
}
echo $response->getBody();