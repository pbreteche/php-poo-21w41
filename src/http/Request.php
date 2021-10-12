<?php

namespace Dawan\http;

class Request
{
    // Variable interne à mon objet
    // Propriété de l'objet accessible par l'ensemble
    // des fonctions de l'objet courant
    private string $uri;

    // La méthode "static" permet de sortir ponctuellement
    // du paradigme objet. 
    // On retrouve un mécanisme de fonction classique.
    public static function createFromSuperGlobals(): self
    {
        $instance = new self();
        // accès à la propriété privée uri possible
        // car méthode static liée à la même classe
        $instance->uri = $_SERVER['REQUEST_URI'];

        return $instance;
    }

    public function getUri(): string
    {
        return $this->uri;
    }
}
