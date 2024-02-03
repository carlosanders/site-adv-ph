<?php

use Slim\Factory\AppFactory;

$routes = require '../app/routes/routes.php';

$app = AppFactory::create();

$routes($app);

$app->run();
