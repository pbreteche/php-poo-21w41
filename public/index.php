<?php

// Ce fichier est le "Front Controller"
// Ce sera notre seul fichier PHP sans déclaration de classe

require_once __DIR__.'/../src/App.php';
require_once __DIR__.'/../src/Request.php';

$app = new App();
$request = new Request();
$response = $app->handleRequest($request);
$response->send();
