<?php

namespace Class\PHP29102024;

class UserBase implements UserInterface
{
    public string $name_zoo;
    public string $last_name;
    public int $id;
    public int $age;

    public function setter($key, $value): void
    {
        $this->$key = $value;
    }

    public function getter($key)
    {
        return $this->$key;
    }

    public function getAll(array $data)
    {
        return $data;
    }

    public function getFirst()
    {
        // TODO: Implement getFirst() method.
    }

    public function getLast()
    {
        // TODO: Implement getLast() method.
    }

    public function removeById(array $data, int $id): array
    {
        if (isset($data[$id])) {
            unset($data[$id]);
        } else {
            var_dump('Cannot delete data, because it is not found');
        }
        return $data;
    }

    public function add()
    {
        // TODO: Implement add() method.
    }
}