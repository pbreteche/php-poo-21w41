<?php

namespace Dawan;

class CompanyLoader extends AbstractLoader
{
    private $allCompanies;

    private function getAll()
    {
        if (!$this->allCompanies) {
            $this->allCompanies = json_decode(
                file_get_contents(__DIR__.'/../data/companies.json')
            );            
        }

        return $this->allCompanies;
    }
}