<?php

use Framework\Http\RequestFactory;

chdir(dirname(__DIR__));
require "vendor/autoload.php";

session_start();
header('Developer: Alexterua');

### Initialization

$request = RequestFactory::fromGlobals();

### Action

$name = $request->getQueryParams()['name'] ?? "Guest";
echo "Hello, $name!";