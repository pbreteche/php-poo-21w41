<?php

require __DIR__.'/Response.php';

class App
{
    private $urlParser;

    public function __construct()
    {
        $this->urlParser = new UrlParser();
    }

    public function handleRequest($request)
    {
        $response = new Response();
        $response->setBody(
            '<h1>Bonjour !</h1>'.
            '<p>L\'URL demandée est '.
                $this->urlParser->getLastSegment($request->getUri()).
            '</p>'
        );

        return $response;
    }
}
