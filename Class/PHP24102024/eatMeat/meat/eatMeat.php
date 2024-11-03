<?php

namespace Class\PHP24102024\eatMeat\meat;
use Class\PHP24102024\animals;
class eatMeat extends animals
{
    public function __construct($eat, $do, $saund)
    {
        parent::__construct($eat, $do, $saund);
    }

    /**
     * @return string
     */
    public function displayData(): string
    {
        return $this->display() . ', Class eatMeat ';
    }
}