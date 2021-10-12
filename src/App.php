<?php

namespace Dawan;

use Dawan\http\RequestInterface;
use Dawan\http\ResponseInterface;

class App
{
    private UrlParser $urlParser;

    public function __construct()
    {
        $this->urlParser = new UrlParser();
    }

    public function handleRequest(RequestInterface $request): ResponseInterface
    {
        $route = $this->urlParser->matchUrl($request->getUri());

        // mettre ne place un système pour passer un paramètre
        // à faire dans un second temps
        return call_user_func_array(
            [new Controller(), $route->getControllerMethod()],
            $route->getArgs()
        );
    }
}
