<?php
/**
 *
 * @link http://php.net/manual/ru/reserved.constants.php
 * @link http://php.net/manual/ru/reserved.variables.server.php
 *
 *
 * Правила оформления кода
 * @link https://svyatoslav.biz/misc/psr_translation/
 * @link https://www.phpdoc.org/
 */


// Входящие параметры
/*
echo '<br /> GET <br />' . PHP_EOL;
var_dump ($_GET);
echo '<br /> POST <br />' . PHP_EOL;
var_dump ($_POST);
echo '<br /> COOKIE <br />' . PHP_EOL;
var_dump ($_COOKIE);
echo '<br /> SESSION <br />' . PHP_EOL;
var_dump ($_SESSION);
echo '<br /> SERVER <br />' . PHP_EOL;
echo '<pre>';
var_dump ($_SERVER);
echo '</pre>';
*/

// Полные и относительные пути к файлам
/*
echo 'Где находится корень сайта ' .  $_SERVER['DOCUMENT_ROOT'] . '<br />' . PHP_EOL;
echo 'Путь в урл от корня ' .  $_SERVER['PHP_SELF'] . '<br />' . PHP_EOL;
echo 'Магические переменные __DIR__ __FILE__ __LINE __' .
__DIR__ . ' / ' . __FILE__ . ' : ' . __LINE__ . '<br />' . PHP_EOL;
*/


// generation HTML
echo '<form action="'. $_SERVER['PHP_SELF'] .'" method="GET">';
echo '<input name="myVar" type="text" />';
echo '<input name="doMyVar" type="submit" />';
echo '</form>';

if (isset ($_GET)) {
  // @link http://php.net/manual/ru/function.isset.php
  echo ' Переменная GET существует и обьявлена <br />' . PHP_EOL;

  if (isset ($_GET['myVar'])) {
    echo $_GET['myVar'] . ' Существует и обьявлена';
    if (is_numeric ($_GET['myVar'])){
      echo ' Можем складывать';
    }else {
      echo ' Ошибка - введите число';
    }
    //echo
  } else {
    echo ' Нельзя понять - чего хочет пользователь - переменной нет';
    echo $_GET['myVar'];
  }

}


// Создание переменных
/*
$a = 2;
$b = 2;

echo $a + $b;
echo $a . $b;
*/
