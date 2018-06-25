<?php
require ( 'config.php' );//подключаем конфиг
require ( 'autoload.php' );//чтоб автоматически добавляло все классы

//Показывать ошибки
error_reporting(E_ALL);
ini_set('display_errors', 1);


echo '<h1>Моё первое описание объекта АВТОМОБИЛЬ</h1>'.'<br>' ;

//укажите обязательно какой вид резины должен быть:Зимняя или Летняя

$myWheels = new Wheels('','' , '');
$myColorCar = new Color('');
$myTrans = new Transmission('');











?>
