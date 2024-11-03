<?php

namespace classlogistics;

class RoadLogistics extends logistics
{
    public function __construct($type, $km)
    {
        parent::__construct($type, $km);
    }
     /**
     * @return string
     */
    public function displayData(): string
    {
        return $this->display() . ',class roadLogistics';
    }

}