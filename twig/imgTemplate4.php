<?php

require_once 'vendor\twig\twig\lib\Twig\Autoloader.php';
Twig_Autoloader::register();

try {
    $loader = new Twig_Loader_Filesystem('templates');

    $twig = new Twig_Environment($loader);

    $template = $twig->loadTemplate('image.tmpl');

    echo $template->render([
        "imgDir" => "img/",
        "i" => 4,
    ]);
} catch
(Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
