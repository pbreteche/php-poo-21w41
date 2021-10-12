<?php

abstract class AbstractLoader
{
    public function load()
    {
        return $this->getAll();
    }

    public function loadById(int $id)
    {
        $data = $this->getAll();

        $dataById = array_column($data, null, 'id');

        return $dataById[$id] ?? null;
    }

    abstract protected function getAll();
}
