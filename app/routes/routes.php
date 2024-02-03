<?php

use app\controllers\HomeController;
use Slim\App;

return function (App $app) {
    $app->get('/', [HomeController::class, 'index']);
    // $app->get('/', [HomeController::class, 'index']);
};
