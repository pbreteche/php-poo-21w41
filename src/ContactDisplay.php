<?php

class ContactDisplay
{
    public function indextoHtml(array $contacts)
    {
        ob_start();
        include __DIR__.'/../templates/index.phtml';
        return ob_get_clean();
    }
}
