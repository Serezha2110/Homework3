<?php

require_once 'vendor\twig\twig\lib\Twig\Autoloader.php';
Twig_Autoloader::register();

try {
    $loader = new Twig_Loader_Filesystem('templates');
    $twig = new Twig_Environment($loader);

    $template = $twig->loadTemplate('gallery.tmpl');

    $files = glob(getcwd() . '/img/' . '*');
    $range = range(1, count($files));

    echo $template->render([
        "imgDir" => "img/",
        "range" => $range,
        "width" => 300,
        "height" => 220
    ]);
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}