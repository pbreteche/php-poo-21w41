<?php

namespace Dawan\http;

interface ResponseInterface
{
    public function setStatus(int $status);

    public function setBody(string $body);

    public function send(): void;
}
