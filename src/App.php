<?php

class App
{
    private UrlParser $urlParser;

    public function __construct()
    {
        $this->urlParser = new UrlParser();
    }

    public function handleRequest(Request $request): Response
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
