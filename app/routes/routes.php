<?php

use Slim\App;
use app\controllers\HomeController;
use app\controllers\CommentsController;

return function (App $app) {
    $app->get('/', [HomeController::class, 'index']);

    $app->get('/comentarios', [CommentsController::class, 'index']);
};
