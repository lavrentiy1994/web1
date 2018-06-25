<?php
    /**
     * описание возможности комнаты
     */
    class Room
    {


      public $ploshad;
      public $wallCount;

      public function setPl($p){
      $this->ploshad = $p;
      }




      public function getPl(){
          return $this->ploshad;
      }

      public function doBuildWalls ($wallCount = 0){
        if ($wallCount == 0){
          $wallCounr = rand(3,6);
        }
        $this->wallCount = $wallCount;
        for ($i=0; $i < $wallCount; $i++) {
          $this->walls[$i] = new Wall();
        }

      }


      function __construct() {
        $this->wallCount = rand(3,6);
        $this->setPl( rand(10,20) );
        echo 'У новой комнаты площадь:' . $this->ploshad . ' стен у нее '. $this->wallCount ;
      }
     }


 ?>
