<?php

// Ce fichier est le "Front Controller"
// Ce sera notre seul fichier PHP sans déclaration de classe

require __DIR__.'/../src/App.php';
require __DIR__.'/../src/Request.php';

$app = new App();
$request = new Request();
$response = $app->handleRequest($request);
$response->send();
