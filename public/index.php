<?php

use app\core\Router;
use app\support\RequestTypes;

require'../vendor/autoload.php';

session_start();

echo '<pre>';

var_dump(RequestTypes::get());
die;

Router::run();

