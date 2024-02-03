<?php

function view(string $view, array $data = [])
{
    $path = dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . 'views';

    // var_dump($path);
    // die();

    // Create new Plates instance
    $templates = new League\Plates\Engine($path);

    // Render a template
    echo $templates->render($view, $data);
}
