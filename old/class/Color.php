<?php
/*
*@var collor цвет машины
*
*/


class Color
{
  public $color;

  function __construct($color)  {
    if ($color == 0) {
      $color = '#'.rand(0,65000);
    $this->collor = $color;
    echo '<br>Видим цвет будущей машины:'. $color;
    // в свойства класса color будет записана инфомация
    // из переменной color
  }
}
}
?>
