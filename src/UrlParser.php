<?php

namespace Dawan;

use Dawan\http\RequestInterface;

class UrlParser
{
    public function getLastSegment(string $url): string
    {
        return array_pop(explode('/', $url));
    }

    public function matchUrl(RequestInterface $request): Route
    {
        $url = $request->getUri();
        if ('/' === $url) {
            return new Route($url, 'homepage');
        }

        if ('/new' === $url) {
            return new Route($url, 'create', [
                'request' => $request,
            ]);
        }

        if (preg_match('/^\/(\d+)$/', $url, $matches)) {
            return new Route($url, 'detail', [
                'id' => $matches[1],
            ]);
        }

        return new Route($url, 'error404');
    }
}
