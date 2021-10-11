<?php

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

        return 'error404';
    }
}
