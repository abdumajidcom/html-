<?php
namespace Class\PHP24102024;

class animals implements animalsInterface
{
    public string $eat;
    public string $do;
    public string $saund;

    public function __construct($eat, $do, $saund)
    {
        $this->eat = $eat;
        $this->do = $do;
        $this->saund = $saund;
    }

    public function display(): string
    {
        return 'eat: ' . $this->eat . 'do: ' . $this->do . 'saund: ' . $this->saund;
    }
}