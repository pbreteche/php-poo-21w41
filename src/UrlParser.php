<?php

namespace Dawan;

class UrlParser
{
    public function getLastSegment(string $url): string
    {
        return array_pop(explode('/', $url));
    }

    public function matchUrl(string $url): string
    {
        if ('/' === $url) {
            return 'homepage';
        }

        if (preg_match('/^\/(\d+)$/', $url, $matches)) {
            return 'detail';
        }

        return 'error404';
    }
}
