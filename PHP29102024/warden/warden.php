<?php

namespace Class\PHP29102024;

class warden extends UserBase
{
    public string $class;
    public function __construct($lookAfter,$feedsing)
    {
        $this->lookAfter = $lookAfter;
        $this->feedsing = $feedsing;
    }
}