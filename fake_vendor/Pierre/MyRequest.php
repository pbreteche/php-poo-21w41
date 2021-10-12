<?php

namespace Pierre;

use Dawan\http\RequestInterface;

class MyRequest implements RequestInterface
{
    public function getUri(): string
    {
        return 'dawan.fr';
    }
}