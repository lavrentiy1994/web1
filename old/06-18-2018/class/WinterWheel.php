<?php
/**
 *
 */
class WinterWheel extends abstractWheel
{

  function __construct($r = '')
  {
    echo '<h4> Создано зимнее колесо</h4>';
    parent::__construct ($r);

  }

  function getR (){
    return $this->r;
  }

  function tormoz ($weather){
    echo ' tormoz зима';
  }

  function callTormoz ($a=0, $b=0){
    $a = ' Зимой тормозим с заносом, сробатывает АБС и тд ';
    $b = 20;
    echo parent::callTormoz ($a, $b) . '<br />';
  }
}
