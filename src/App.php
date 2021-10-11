<?php

require __DIR__.'/Response.php';

class App
{
    public function handleRequest($request)
    {
        $response = new Response();
        $response->setBody(
            '<h1>Bonjour !</h1>'.
            '<p>L\'URL demandée est '.array_pop(
                explode('/', $request->getUri())
            ).'</p>'
        );

        return $response;
    }
}
