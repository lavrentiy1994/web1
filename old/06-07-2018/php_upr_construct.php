<?php
/**
 *
 * @link http://php.net/manual/ru/language.control-structures.php
 * @link
 *
 *
 *
 * @link
 * @link
 */


$a = 5;
$b = 20;

if ($a > $b) {
  echo "a more b";
} else {
  echo "a menshe b";
}


while ($a <= 10) {
  $a++;
  echo $a;
}

$str = 'ru';

switch ($str) {
  case 'ru':
  case 'RU':
    echo ' Выбран русский язык';
    break;

    case 'en':
    case 'EN':
      echo ' Выбран английский язык';
      break;

  default:
    echo ' Язык не понятен';
    break;
}
