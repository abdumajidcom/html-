<?php

namespace Class\PHP29102024;

interface UserInterface
{
    public function getAll(array $data);

    public function getFirst();

    public function getLast();

    public function removeById(array $data, int $id);

    public function add();
}