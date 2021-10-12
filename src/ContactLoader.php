<?php

namespace Dawan;

class ContactLoader extends AbstractLoader
{
    private $allContacts;

    private function getAllContacts()
    {
        if (!$this->allContacts) {
            $this->allContacts = json_decode(file_get_contents(__DIR__.'/../data/contacts.json'));            
        }

        return $this->allContacts;
    }
}
