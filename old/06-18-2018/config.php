<?php
/**
 * Класс допустимых параметров для нашего
 * веб- приложения, с функциями их создания
 * случайным образом
 */

class ConfigApp
{
  static public $availableCarCaseType = ['Седан','Хечбек','Кабриалет'];
  static public $availableCarCaseColor = ['зеленый','синий','красный'];

  /**
   * Генерирует тип корпуса из доступных
   * @return string тип корпуса
   */
  static function randomCarCaseType (){
    return self::$availableCarCaseType [ rand(0, sizeof(self::$availableCarCaseType) - 1 ) ];
  }

  /**
   * Возвращает цвет корпуса из доступных
   * @return string цвет
   */
  static function randomCarCaseColor (){
    return self::$availableCarCaseColor [ rand(0, sizeof(self::$availableCarCaseColor) - 1 ) ];
  }
}
