<?php
/**
 * Описание возможностей комнаты, нужная нам инфомация и методы доступа к ней
 */

class Room
{
  /**
   * Список переменных для сохарнения данных о комнате
   * @var ploshad - площадь комнаты
   * @var wallCount - количество стен
   * @var walls - массив обьектов типа Стена (Wall)
   */
  public $ploshad;

  public $wallCount;
  public $walls;


  /**
   * Установить площадь комнаты
   * @param $p получает площадь комнаты
   */
  public function setPl($p){
    $this->ploshad = $p;
  }


  /**
   * Получить площадь
   * @return возвращает площадь комнаты
   */
  public function getPl(){
    return $this->ploshad;
  }

  /**
   * Создание стен
   * @param  integer $wallCount Количество стен
   * @return
   */
  public function doBuildWalls ($wallCount = 0){
    if ($wallCount == 0){
      $wallCount = rand(3,6);
    }
    $this->wallCount = $wallCount;
    for ($i = 0; $i < $wallCount; $i++){
      $this->walls[$i] = new Wall();
    }


  }

  /**
   * Создает комнату, придумывая, сколько может быть стен, и какая ее площадь
   */
  function __construct() {
    $this->wallCount = rand(3,6);
    $this->setPl( rand(10,20) );
      echo '<p> У новой комнаты площадь: ' .  $this->ploshad . ' а стен у нее ' . $this->wallCount . '</p>';
    $this->doBuildWalls ($this->wallCount );
      // $this - обозначает, что мы берем инфомацию из класса
      // если нету $this - берется переменая из метода (функции)


  }

}
