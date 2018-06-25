<?php
// Подключение автозагрузки классов
require ('my_autoload.php');

echo '<p>Hello Rooms</p>';

$myRoom = new Room();
$myRoom->setPl(30);
//echo $myRoom->getPl();

for ($i = 0; $i < 3; $i++){
  $someRoom[$i] =  new Room();
//  $someRoom[$i]->setPl(rand(10,20));
//  echo 'У новой комнаты площадь: ' . $someRoom[$i]->getPl() . '<br />';
}


$myCabrialet = new Car ();

$myCabrialet->setColor ('#RRGGBB');
$myCabrialet->getLastTO ();

$myCabrialet->echoPhoto ();
