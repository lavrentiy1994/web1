<?php
    class Car
    {
     /**
     *@var motor какой мотор в автомобиле
     *@var wheels колёса
     *@var transmission каробка передач
     *@var collor цвет
     */

      public $motor;
      public $wheels;
      public $transmission;
      public $color;


      public function setMot($mot)
      {
        $this->motor = $mot;
      }
      public function getMot()
      {
        return $this->motor;
      }




    }



?>
