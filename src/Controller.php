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

    // créer une méthode 'detail' qui produit la page d'un contact
    // dans un premier, ne faire que pour id = 1
    // créer également le fichier de template detail.phtml

    public function error404(): ResponseInterface
    {
        $response = new Response();
        $response->setBody($this->renderer->render('error.phtml'));
        $response->setStatus(404);

        return $response;
    }
}
