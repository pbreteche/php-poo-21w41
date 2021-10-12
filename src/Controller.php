<?php

namespace Dawan;

use Dawan\http\Response;
use Dawan\http\ResponseInterface;

class Controller
{
    private TemplateRenderer $renderer;

    public function __construct()
    {
        // Ici, pas besoin de faire un use
        // TemplateRenderer est dans le même espace que Controller
        $this->renderer = new TemplateRenderer();
    }

    public function homepage(): ResponseInterface
    {
        $loader = new ContactLoader();

        $contacts = $loader->load();

        $response = new Response();
        $response->setBody($this->renderer->render('index.phtml', [
            'contacts' => $contacts,
        ]));

        return $response;
    }

    public function detail(int $id): ResponseInterface
    {
        $loader = new ContactLoader();
        $contact = $loader->loadById($id);

        if (!$contact) {
            return $this->error404();
        }

        $response = new Response();
        $response->setBody($this->renderer->render('detail.phtml', [
            'contact' => $contact,
        ]));

        return $response;
    }

    public function error404(): ResponseInterface
    {
        $response = new Response();
        $response->setBody($this->renderer->render('error.phtml'));
        $response->setStatus(404);

        return $response;
    }
}
