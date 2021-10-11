<?php

class Controller
{
    public function homepage()
    {
        // Chargement, puis
        // affichage de la liste de contacts
        // dans une réponse HTTP

        $response = new Response();
        $response->setBody('Je suis sur la page d\'accueil');

        return $response;
    }

    public function error404()
    {
        // Affichage d'une page d'erreur
        // "Page non trouvée"

        $response = new Response();
        $response->setBody('Page non trouvée');

        return $response;
    }
}
