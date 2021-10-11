<?php

// Ce fichier est le "Front Controller"
// Ce sera notre seul fichier PHP sans déclaration de classe

spl_autoload_register(function(string $classname) {
    require __DIR__.'/../src/'.$classname.'.php';
});

$app = new App();
$request = new Request();
$response = $app->handleRequest($request);
$response->send();
