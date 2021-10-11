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

spl_autoload_register(function(string $classname) {
    $parts = explode('\\', $classname);
    $vendor = array_shift($parts);
    if ('Dawan' === $vendor) {
        // Mapping entre l'espace "Dawan" et le répertoire "src"
        require __DIR__.'/../src/'.implode(DIRECTORY_SEPARATOR, $parts).'.php';
    }
});

$app = new App();
$request = new Request();
$response = $app->handleRequest($request);
$response->send();
