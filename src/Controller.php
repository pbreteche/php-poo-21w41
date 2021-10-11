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
        $display = new ErrorDisplay();
        $response->setBody($display->toHtml($contacts));
        $response->setStatus(404);

        return $response;
    }
}
