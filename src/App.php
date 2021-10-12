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
        $methodName = $this->urlParser->matchUrl($request->getUri());

        return call_user_func([new Controller(), $methodName]);
    }
}
