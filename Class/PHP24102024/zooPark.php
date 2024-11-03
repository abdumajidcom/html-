<?php
namespace Class\PHP29102024;

class zooPark implements zooParkInterface
{
    public string $walk;
    public string $eat;

    public function __construct($eat, $walk)
    {
        $this->eat = $eat;
        $this->walk = $walk
    }

    public function display(): string
    {
        return 'eat: ' . $this->eat . 'walk: ' . $this->walk;
    }
    
}