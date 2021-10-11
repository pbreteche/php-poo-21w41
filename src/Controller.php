<?php

namespace Dawan;

use Dawan\http\Response;

class Controller
{
    private TemplateRenderer $renderer;

    public function __construct()
    {
        // Ici, pas besoin de faire un use
        // TemplateRenderer est dans le même espace que Controller
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
