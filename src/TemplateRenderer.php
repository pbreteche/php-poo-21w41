<?php

class TemplateRenderer
{
    private const INCLUDE_DIR = __DIR__.'/../templates/';

    public function render(string $path, array $data = [])
    {
        if (!file_exists(self::INCLUDE_DIR.$path)) {
            // gestion d'erreur
        }
        ob_start();
        extract($data);
        include self::INCLUDE_DIR.$path;
        return ob_get_clean();
    }
}
