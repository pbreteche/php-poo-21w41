<?php

namespace Dawan;

class UrlParser
{
    public function getLastSegment(string $url): string
    {
        return array_pop(explode('/', $url));
    }

    public function matchUrl(string $url): Route
    {
        if ('/' === $url) {
            return new Route($url, 'homepage');
        }

        if ('/new' === $url) {
            return new Route($url, 'create');
        }

        if (preg_match('/^\/(\d+)$/', $url, $matches)) {
            return new Route($url, 'detail', [
                'id' => $matches[1],
            ]);
        }

        return new Route($url, 'error404');
    }
}
