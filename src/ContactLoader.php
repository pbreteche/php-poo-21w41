<?php

namespace Dawan;

class ContactLoader
{
    private $allContacts;

    public function load()
    {
        return $this->getAllContacts();
    }

    public function loadById(int $id)
    {
        $data = $this->getAllContacts();

        $dataById = array_column($data, null, 'id');

        return $dataById[$id] ?? null;
    }

    private function getAllContacts()
    {
        if (!$this->allContacts) {
            $this->allContacts = json_decode(file_get_contents(__DIR__.'/../data/contacts.json'));            
        }

        return $this->allContacts;
    }
}
