<?php

require __DIR__.'/Response.php';

class App
{
    public function handleRequest($request)
    {
        $response = new Response();
        $response->setBody('<h1>Bonjour !</h1>');

        return $response;
    }
}
