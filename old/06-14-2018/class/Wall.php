<?php
/**
 * Класс описания стены
 */

class Wall
{
  public $color;

  function __construct($color = 'Green')  {
    $this->color = $color;
    echo 'Создана стена';
    // в свойства класса color будет записана инфомация
    // из переменной color
  }
}
