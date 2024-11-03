<?php

namespace Class\PHP24102024;

class herebivorouse extends animals
{
    private string $color;
    private string $can;

    public function __construct($eat, $do)
    {
        parent::__construct($eat, $do, 'test');
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCan(): string
    {
        return $this->can;
    }

    public function setCan(string $can): void
    {
        $this->can = $can;
    }

    /**
     * @return string
     */
    public function displayData(): string
    {
        $string = $this->display() . ', Class herebivorous';
        if (isset($this->color) && $this->getColor() != '') {
            $string .= ', Color: ' . $this->getColor();
        }
        if (isset($this->can) && $this->getCan() != '') {
            $string .= ', can: ' . $this->getCan();
        }
        return $string;
    }
}