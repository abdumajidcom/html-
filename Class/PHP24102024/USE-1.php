<?php

use Class\PHP23102024\flyNoWay;
use Class\PHP23102024\rocketProweredFly;
use Class\PHP23102024\flyWithWings;

require 'autoload.php';

$slowly = new flyNoWay('tuyaqush', 'chunkiy u kata');
$slowly->setslowly('uchmid');
var_dump($slowly->displayData());

$fast = new rocketProweredFly('raketa', 'NASA');
var_dump($fast->displayData());

$fast = new flyWithWings('lochin', 'judatezkor');
var_dump($fast->displayData());