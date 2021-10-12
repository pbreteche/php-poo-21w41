<?php

namespace Dawan\http;

class Response implements ResponseInterface
{
    private int $status = 200;
    private string $body;
    private array $headers = [];

    public function setStatus(int $status)
    {
        $this->status = $status;
    }

    public function setBody(string $body)
    {
        $this->body = $body;
    }

    public function addHeader(string $name, string $value)
    {
        $this->headers[] = ['name' => $name, 'value' => $value];
    }

    public function send(): void
    {
        // A priori, le seul "echo" de toute l'appli
        // Il envoie l'intégralité du contenu de la réponse
        http_response_code($this->status);
        foreach($this->headers as $header) {
            header($header['name'].': '.$header['value']);
        }
        echo $this->body;
    }
}
