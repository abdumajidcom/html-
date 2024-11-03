<?php
use Class\PHP29102024\animals;
use Class\PHP29102024\animals\zooPark\lookAfter;
// use Class\PHP23102024\Cuckoo;
// use Class\PHP23102024\Duck;
// use Class\PHP23102024\Ostrich;

// use Class\PHP24102024\eatMeat\meat\eatMeat;
// use Class\PHP24102024\animals;
require 'autoload.php';

// $duck = new Duck('Skruch', 'Millioner');
// $duck->setColor('Yellow');
// var_dump($duck->displayData());

// $cuckoo = new Cuckoo('Cuckoo', 'ABBOS');
// var_dump($cuckoo->displayData());

// $ostrich = new Ostrich('Osrich', 'Abdumajid');
// var_dump($ostrich->displayData());






$eat = new animals('eating', 'sea peopls', 'test');


var_dump($eat->displayData());

$feeding = new lookAfter('fiding animals', 'washing animals');
var_dump($feeding->displayData());