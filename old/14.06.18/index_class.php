<?php
    require ('class/Room.php');
    

    $myRoom = new Room();
    $myRoom->setPl(30);
    echo $myRoom->getPl();

    for ($i=0; $i < 10; $i++) {
      $someRoom[$i] = new Room();
      $someRoom[$i]->setPl(rand(10,20));
    //  echo 'У новой комнаты площадь:' . $someRoom[$i]->getPl().'<br>';
    }





?>
