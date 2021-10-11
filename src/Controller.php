<?php

class Controller
{
    private TemplateRenderer $renderer;

    public function __construct()
    {
        $this->renderer = new TemplateRenderer();
    }

    public function homepage()
    {
        $loader = new ContactLoader();

        $contacts = $loader->load();

        $response = new Response();
        $response->setBody($this->renderer->render('index.phtml', [
            'contacts' => $contacts,
        ]));

        return $response;
    }

    public function error404()
    {
        $response = new Response();
        $response->setBody($this->renderer->render('error.phtml'));
        $response->setStatus(404);

        return $response;
    }
}
