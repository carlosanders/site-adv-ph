<?php

namespace app\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CommentsController
{
    public function index(Request $request, Response $response)
    {
        var_dump('index comments');
        // $name = $args['name'];
        $response->getBody()->write('Comentários');
        //view('home', ['name' => 'Phelipe', 'title' => 'Home']);
        return $response;
    }
}
