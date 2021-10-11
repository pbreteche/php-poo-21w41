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
        $methodName = $this->urlParser->matchUrl($request->getUri());
        $response = new Response();
        $response->setBody($methodName);

        return $response;
    }
}
