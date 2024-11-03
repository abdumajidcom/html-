<?php
 namespace classlogistics

 class logistics implements logistInterfase
 {
    private string $delivery;
    public string $type;
    public string $km;

 
 public function __construct($type, $km);
 {
    $this->delivery = $delivery;
    $this->type = $typ;
    $this->km = $km;
 }

/**
     * Display data
     * @return string
     */

     public function display():string 
     {
        return 'delivery: ' . $this->delivery .
            ', type: ' . $this->type .
            ', km: ' . $this->km;
     }
}
