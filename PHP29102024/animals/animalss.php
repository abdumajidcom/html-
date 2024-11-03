<?php

namespace Class\PHP28102024;

class animals extends UserBase
{

    public string $eat;
    public float $lives;
    public function __construct($eat, $lives)
    {
        $this->department = $eat;
        $this->salary = $lives;
    }

    
}