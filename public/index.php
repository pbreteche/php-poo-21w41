<?php

// syntaxe de création d'alias
// (équivalent à un "import" dans d'autres langages)
// FQCN (Fully qualified class name) as ALIAS
// Si l'alias se limite juste au dernier terme,
// il peut être implicite
use Dawan\App as App;
use Dawan\http\Request;
// Ce fichier est le "Front Controller"
// Ce sera notre seul fichier PHP sans déclaration de classe

require __DIR__.'/../vendor/autoload.php';

$app = new App();
$request = new Request();
$response = $app->handleRequest($request);
$response->send();
