<h1>Мы начинаем выполнение нашего скрипта</h1>

<?php

/**
 *
 * @link http://php.net/manual/ru/function.include.php
 * @link
 * @link
 * @link
 */

include ('view/forms/formLogin.tpl'); // - относительно файла

const BASE_DIR = '/var/www/clients/client4/web8/web/06-11-2018/';
include (BASE_DIR . 'view/forms/formLogin.tpl'); // - относительно корня! Начинается с /


// Для включения выше - ..
include ('../formLogin.tpl'); // - относительно файла на один каталог выше
include (BASE_DIR . '../formLogin.tpl'); // - относительно файла на один каталог выше



?>

А потом у нас куча кода <br>


<?php
//echo get_include_path ();
//echo __DIR__;
//include ('formLogin.tpl');

?>
