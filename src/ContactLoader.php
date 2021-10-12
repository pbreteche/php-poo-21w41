<?php

namespace Dawan;

class ContactLoader extends AbstractLoader
{
    private $allContacts;

    protected function getAll()
    {
        if (!$this->allContacts) {
            $this->allContacts = json_decode(
                file_get_contents(__DIR__.'/../data/contacts.json')
            )->records;
        }

        return $this->allContacts;
    }
}
