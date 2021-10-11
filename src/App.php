<?php

require __DIR__.'/Response.php';

class App
{
    public function handleRequest($request)
    {
        $response = new Response();
        $response->setBody(
            '<h1>Bonjour !</h1>'.
            '<p>L\'URL demandée est '.$request->getUri().'</p>'
        );

        return $response;
    }
}
