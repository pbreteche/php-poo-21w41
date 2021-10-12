<?php

namespace Dawan;

class Route
{
    private string $requestUri;
    private string $controllerMethod;
    private array $args;

    public function __construct(
        string $requestUri,
        string $controllerMethod,
        array $args = []
    ) {
        $this->requestUri = $requestUri;
        $this->controllerMethod = $controllerMethod;
        $this->args = $args;
    }

    public function getRequestUri(): string
    {
        return $this->requestUri;
    }
    public function getControllerMethod(): string
    {
        return $this->controllerMethod;
    }
    public function getArgs(): array
    {
        return $this->args;
    }
}
