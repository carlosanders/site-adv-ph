<?php

namespace app\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController
{
    public function index(Request $request, Response $response)
    {
        //var_dump('index home');
        // $name = $args['name'];
        //$response->getBody()->write("Hello");
        view('home', ['name' => 'Phelipe', 'title' => 'Home']);
        return $response;
    }
}
