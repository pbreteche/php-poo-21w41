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

        // détecter les urls de type /1, /2, /3, etc
        // et retourner 'detail'

        return 'error404';
    }
}
