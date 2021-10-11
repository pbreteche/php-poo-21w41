<?php

class Response
{
    private $body;

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function send()
    {
        // A priori, le seul "echo" de toute l'appli
        // Il envoie l'intégralité du contenu de la réponse
        echo $this->body;
    }
}
