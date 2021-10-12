<?php

namespace Dawan\http;

class Request implements RequestInterface
{
    // Variable interne à mon objet
    // Propriété de l'objet accessible par l'ensemble
    // des fonctions de l'objet courant
    private string $uri;
    private string $method;

    // La méthode "static" permet de sortir ponctuellement
    // du paradigme objet. 
    // On retrouve un mécanisme de fonction classique.
    public static function createFromSuperGlobals(): self
    {
        $instance = new self();
        // accès à la propriété privée uri possible
        // car méthode static liée à la même classe
        $instance->uri = $_SERVER['REQUEST_URI'];
        $instance->method = mb_strtolower($_SERVER['REQUEST_METHOD']);

        return $instance;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getMethod(): string
    {
        return $this->method;
    }
}
