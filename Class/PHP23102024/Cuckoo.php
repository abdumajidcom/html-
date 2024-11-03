<?php

namespace Class\PHP23102024;

class Cuckoo extends Bird
{
    public function __construct($name, $type)
    {
        parent::__construct($name, $type);
    }

    /**
     * @return string
     */
    public function displayData(): string
    {
        return $this->display() . ', Class Cuckoo';
    }
}