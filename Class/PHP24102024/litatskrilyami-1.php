<?php

namespace Class\PHP23102024;

class flyWithWings extends FlyBehavior
{
    public string $fast;
    public string $slowly;

    public function __construct()
    {
        parent::__construct();
    }

    public function getFast(): string
    {
        return $this->fast;
    }

    public function setFast(string $fast): void
    {
        $this->fast = $fast;
    }

    public function getSlowly(): string
    {
        return $this->slowly;
    }

    public function setslowly(string $slowly): void
    {
        $this->slowly = $slowly;
    }

    /**
     * @return string
     */
    public function displayData(): string
    {
        $string = $this->display() . ', Class flyWithWings';
        if (isset($this->fast) && $this->getFast() != '') {
            $string .= ', Fast: ' . $this->getFast();
        }
        if (isset($this->slowly) && $this->getSlowly() != '') {
            $string .= ', slowly: ' . $this->getSlowly();
        }
        return $string;
    }
}