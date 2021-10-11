<?php

class UrlParser
{
    public function getLastSegment($url)
    {
        return array_pop(explode('/', $url));
    }
}
