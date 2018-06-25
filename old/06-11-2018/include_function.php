<?php
ini_set('display_errors', '1');
/**
 *
 * @link http://php.net/manual/ru/function.include.php
 *
 */

$a = ' Я а и живу Снаружи '. '<br>' . PHP_EOL;
 echo __FILE__ . __LINE__ . $a;


 echo ' Подключаем бибилиотеку с описанием функции' . '<br>' . PHP_EOL;

 include_once ('libs/doJuice.php');

// 1
// echo doJuice (' яблоко ');

// 2
 // $ChtoVernulaFunctiya = doJuice (' Чтоя  передаю функции, будет записана внутри функции в переменную $fruct ');
//  echo $ChtoVernulaFunctiya;

//3
$sobraliVSadu = 'Всякие фрукты мы собрали в саду';
$sokNaZakrutku = doJuice ($sobraliVSadu);
echo $sokNaZakrutku;


echo __FILE__ . __LINE__ . $a;
