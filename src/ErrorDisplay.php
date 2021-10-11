<?php

class ErrorDisplay
{
    public function toHtml()
    {
        ob_start();
        include __DIR__.'/../templates/error.phtml';
        return ob_get_clean();
    }
}
