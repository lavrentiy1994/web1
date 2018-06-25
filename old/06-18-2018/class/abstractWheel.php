<?php

/**
 * Абстрактный класс - это значит, что нет возможности создать
 * экземпляр этого класса
 * Нельзя создать колесо, которое не известно как тормозит
 *
 * Абстрактная функция - это такая функция которую в наследнике кодер
 * обязан описать.
 */
abstract class abstractWheel
{
  public $r;

  function __construct($r = '15'){
//    echo '<h4> Создано абстрактное колесо</h4>';
    $this->r = $r;
  }

  /**
   * Описание принципа торможения
   * @return тормозной путь
   */
  abstract function tormoz ($weather);

  /**
   * Расчет тормозного пути
   * @param  [type] $a [description]
   * @param  [type] $b [description]
   * @return [type]    [description]
   */
  function callTormoz ($a, $b){
    return $a . ' ' .  $b;
  }

}
