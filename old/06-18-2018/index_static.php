<?php
// Подключение автозагрузки классов
require ('config.php');
require ('class/my_autoload.php');

echo '<hr /><h3> Будет обращение к статической переменной и функции без создяния обьекта. Ответит 10</h3>';
// Обращение к переменной статической без создания обьекта
echo StaticTry::$var;
// Обращение к переменной статической без создания обьекта
StaticTry::echoVar();



echo '<hr /><h3> Создам три обьекта - обращусь во втором</h3>';

$a = new StaticTry ();
$b = new StaticTry ();
$с = new StaticTry ();


echo $b::$var;
$b::echoVar ();


echo '<hr /><h3> меняю свойство в пером- вывожу во втором. Меняю в третьем - вывожу в первом</h3>';

$a::$var = 20;

echo $b::$var;
$b::echoVar ();


echo $a::$var;
$a::echoVar ();

echo StaticTry::$var;
StaticTry::echoVar();
