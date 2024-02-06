<?php

use League\Plates\Extension\Asset;

function view(string $view, array $data = [])
{
    $path = dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'views';
    //$assets = getcwd() . '/assets/';
    //$assets = getcwd() . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR;
    // $assets = dirname(__FILE__, 3) . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR;
    // var_dump();    // die();
    // var_dump(getcwd());
    // die();

    // Create new Plates instance
    $templates = new League\Plates\Engine($path);
    $templates->loadExtension(new Asset(getcwd(), false));

    // Render a template
    echo $templates->render($view, $data);
}
