<?php

namespace Class\PHP23102024;

class rocketProweredFly extends FlyBehavior
{
    public function __construct($fast,$transport)
    {
        parent::__construct($fast,$transport);
    }

    /**
     * @return string
     */
    public function displayData(): string
    {
        return $this->display() . ',class rocketProweredFly';
    }
}