<?php

namespace Dawan;

class ContactLoader
{
    public function load()
    {
        return json_decode(file_get_contents(__DIR__.'/../data/contacts.json'));
    }

    public function loadById(int $id)
    {
        $data = json_decode(file_get_contents(__DIR__.'/../data/contacts.json'));

        $dataById = array_column($data, null, 'id');

        return $dataById[$id] ?? null;
    }
}
