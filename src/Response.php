<?php

class Response
{
    private string $body;

    public function setBody(string $body)
    {
        $this->body = $body;
    }

    public function send(): void
    {
        // A priori, le seul "echo" de toute l'appli
        // Il envoie l'intégralité du contenu de la réponse
        echo $this->body;
    }
}
