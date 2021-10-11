<?php

// Ce fichier est le "Front Controller"
// Ce sera notre seul fichier PHP sans déclaration de classe

require __DIR__.'/../src/App.php';

$app = new App();
$app->demo();
