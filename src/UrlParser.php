<?php

class UrlParser
{
    public function getLastSegment(string $url): string
    {
        return array_pop(explode('/', $url));
    }
}
