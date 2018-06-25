<?php
// Подключение автозагрузки классов
require ('config.php');
require ('class/my_autoload.php');



$myCase = new CarCase ();

$mySW = new SummerWheel ();
$myWW = new WinterWheel ();


$curW = $mySW;
$curW->callTormoz ();


$curW = $myWW;
$curW->callTormoz ();
