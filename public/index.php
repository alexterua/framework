<?php

use Framework\Http\Request;

chdir(dirname(__DIR__));
require "vendor/autoload.php";

session_start();
header('Developer: Alexterua');

### Initialization

$request = new Request();

### Action

$name = $_GET['name'] ?? "Guest";
echo "Hello, $name!";