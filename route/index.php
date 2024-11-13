<?php
use Class\Database\Database;
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






//$db=new Database();
//var_dump($db->select('select * from countries'));

//$new= new Database();
//var_dump($new->insert('test',['name' => 'Abdumajid']
//));
//die();
//$new= new Database();
//var_dump($new->delete('insert * from countries'));

$new= new Database();
var_dump($new->update('test',['name'=>'Abdumajid'],['id','=',1]));
echo "STOP HERE";
die();


//$db = new Database();
//$countries = $db->select('countries', ['id', 'name', 'iso3', 'emoji'])
//    ->where(['iso3', '=', '\'USA\''])
//    ->get();
//var_dump($countries);
//die();

//$db = new Database();
//$countries = $db->get(['id', '=', 10]);
//$countries = $db->get(['name', 'LIKE', '%John%'], ['AND']);
//var_dump($countries);

//$db = new Database();

//$success = $db->update('users', $updateData, ['id', '=', 10]);

//if ($success) {
//    echo "ID = 10 bo'lgan foydalanuvchi ma'lumotlari muvaffaqiyatli yangilandi";
//} else {
//    echo "Maʼlumotlarni yangilashda xatolik bor";
//}

//$db = new Database();


//$success = $db->delete('users', ['id', '=', 5]);

//if ($success) {
//    echo "ID = 5 bo'lgan foydalanuvchi muvaffaqiyatli o'chirildi";
//} else {
//    echo "Foydalanuvchini oʻchirishda xatolik yuz berdi";
//}