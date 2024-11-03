<?php

namespace Class\PHP29102024;

class clients extends UserBase
{

    public string $walking;
    public float $pay;
    public function __construct($walking, $pay)
    {
        $this->department = $walking;
        $this->salary = $pay;
    }

    public static function additionalPaying($pay, $percent)
    {
        return $pay + ($pay * $percent / 100);
    }

    
}