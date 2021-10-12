<?php

namespace Dawan;

class ContactSaver
{
    public function save($contact)
    {
        $this->allContacts = json_decode(
            file_get_contents(__DIR__.'/../data/contacts.json')
        );            

        $contact->id = $this->allContacts->nextId;
        $this->allContacts->records[] = $contact;
        ++$this->allContacts->nextId;

        file_put_contents(
            __DIR__.'/../data/contacts.json',
            json_encode($this->allContacts)
        );
    }
}
