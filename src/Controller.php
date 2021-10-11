<?php

class Controller
{
    public function homepage()
    {
        $loader = new ContactLoader();

        $contacts = $loader->load();

        $response = new Response();
        $display = new ContactDisplay();
        $response->setBody($display->indexToHtml($contacts));

        return $response;
    }

    public function error404()
    {
        $response = new Response();
        $response->setBody('Page non trouvée');

        return $response;
    }
}
