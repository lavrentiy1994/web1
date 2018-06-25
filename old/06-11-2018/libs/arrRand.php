<?php
/**
 * Вернуть случайный элемент массива
 *
 * @param Массив
 * @param Количество элементов случайных

 * @return Случайный элемень
 */


function arrRand ($arr, $num = 1){
  echo ' мой массив внутри :';
  pretty_print ($arr);
  echo ' количество элементов, которые надо вренуть ' . $num . '<br />';

  $t = rand (0, sizeof($arr));
  return $arr[$t];
}
