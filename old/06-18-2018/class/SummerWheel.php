<?php
/**
 *
 */
class SummerWheel extends abstractWheel
{

  function __construct($r = '')
  {
    echo '<h4> Создано летнее колесо</h4>';
    parent::__construct ($r);

  }

  function getR (){
    return $this->r;
  }

  function tormoz ($weather){
    echo ' tormoz leto';
  }

  function callTormoz ($a=0, $b=0){
    $a = ' летом тормозим на сухую по другому без заноса ';
    $b = 10;
    echo parent::callTormoz ($a, $b). '<br />';
  }
}
