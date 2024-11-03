<?php

namespace Class\PHP29102024;

class lookAfter extends zooPark
{
    private string $feeding;
    private string $washing;

    public function __construct($feeding, $washing)
    {
        parent::__construct($feeding, $washing);
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
        $string = $this->display() . ',looking after animals';
        
        
        if (isset($this->can) && $this->getCan() != '') {
            $string .= ', can: ' . $this->getCan();
        }
        return $string;
    }
}