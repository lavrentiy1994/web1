<?php
/*
*@var weigh  ширина колеса
*@var radius радиус колеса
*@var profil зимняя или летняя резина
*@var wheels количество колёс
*таким образом описал класс колёса
*/

class Wheels
{
  public $color = 'White';
  const WHEELS = 4;
  public $weight;
  public $radius;
  public $profil;


   function __construct($weight,$radius,$profil) {
     if ($weight == '') {
       $weight = 'R'.rand(15,20);
     }
     $this->weight = $weight;


     if ($radius == '') {
       $radius = rand(12,15);
     }
     $this->radius = $radius;

     



     if ($profil == '') {
       $this->profilWheels = ConfigApp::randomProfil();

     }


     $this->profil = ConfigApp::randomProfil();
       echo '<p>Количество колёс:' .self::WHEELS .'<br>Новое колесо имеет---- Ширину: ' .  $this->weight . '<br> Радиус:' .   $this->radius . '<br>Профиль:'.$this->profil.'</p>';
   }
 }

?>
