<?php

namespace Dawan;

class ContactLoader
{
    public function load()
    {
        return json_decode(file_get_contents(__DIR__.'/../data/contacts.json'));
    }
}
