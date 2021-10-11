<?php

class Request
{
    // Variable interne à mon objet
    // Propriété de l'objet accessible par l'ensemble
    // des fonctions de l'objet courant
    private string $uri;

    // Méthode magique "constructeur"
    // est appelée automatiquement lors de l'instanciation
    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    public function getUri(): string
    {
        return $this->uri;
    }
}
