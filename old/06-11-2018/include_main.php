<h1>Мы начинаем выполнение нашего скрипта</h1>

<?php
ini_set('display_errors', '1');
/**
 *
 * @link http://php.net/manual/ru/function.include.php
 * @link http://php.net/manual/ru/function.require.php


 * @link http://php.net/manual/ru/function.include-once.php
 * @link http://php.net/manual/ru/function.require-once.php
 */


$arr = ['ww', 'ee'];

include_once ('libs/prettyPrint.php');
pretty_print($arr);


include_once ('libs/prettyPrint.php');
pretty_print($arr);



/*

примреы инклюда

include ('view/forms/formLogin.tpl'); // - относительно файла

const BASE_DIR = '/var/www/clients/client4/web8/web/06-11-2018/';
include (BASE_DIR . 'view/forms/formLogin.tpl'); // - относительно корня! Начинается с /

// Для включения выше - ..
include ('../formLogin.tpl'); // - относительно файла на один каталог выше
include (BASE_DIR . '../formLogin.tpl'); // - относительно файла на один каталог выше
*/



?>

А потом у нас куча кода <br>


<?php
// echo get_include_path (); - базовые директории
// echo __DIR__; - текущая папка
?>
