<?php
/**
 * о
 *
 *
 */

class ConfigApp
{
  static public $profilWheels = ['Зимняя','Летняя','Шипованная'];

  static public $transVid = ['Автомат', 'Ручная', 'Вариатор'];
  /**
   *
   *
   */
   static function randomProfil (){
     return self::$profilWheels [ rand(0, sizeof(self::$profilWheels) - 1 ) ];
   }


   static function randomTrans (){
     return self::$transVid [ rand(0, sizeof(self::$transVid) - 1 ) ];
   }

  /**
   * Возвращает цвет корпуса из доступных
   * @return string цвет
   */
  static function randomCarCaseColor (){
    return self::$availableCarCaseColor [ rand(0, sizeof(self::$availableCarCaseColor) - 1 ) ];
  }
}
