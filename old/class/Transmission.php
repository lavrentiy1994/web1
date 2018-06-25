<?php
/*
*@var
*
*
*/

class Transmission
{

  public $trans;
  
  function __construct($trans) {
     if ($trans == '') {
       $this->transVid = ConfigApp::randomTrans();
       echo '<br> Коробка передач :'.$this->transVid;

     }
     $this->trans =  ConfigApp::randomTrans();

   }

}
?>
