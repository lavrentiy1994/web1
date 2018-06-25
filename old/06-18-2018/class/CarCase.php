<?php

/**
 *
 */
class CarCase
{
  public $caseType;
  public $caseColor;

  public $color = ['зеленый','синий','красный'];

  function __construct($caseType = '', $caseColor = '' )
  {
    if ($caseType == '') { // Пользователь не ввел тип кузова
      // Выберем тип кузова самостоятельно
      //var_dump (ConfigApp::$availableCarCaseType);
      $this->caseType = ConfigApp::randomCarCaseType();
      echo '<p> создан корпус ' . $this->caseType . '  </p>';

    } else { // Тип кузова известен
      // Свойство обьекта = аргумент
      $this->caseType = $caseType;
    } // Обработка типа кузова


    if ($caseColor == '') { // Пользователь не ввел цвет
      // Выберем цвет
// Метод создания цвета из внутри
// Но он не изящный
//       $this->color = $this->color [rand(0, sizeof($this->color))];
      $this->caseColor = ConfigApp::randomCarCaseColor();
      echo '<p> корпус окрашен в : ' . $this->caseColor . '  </p>';
    } else {
      // Свойство обьекта = аргумент
      $this->caseColor = $caseColor;
    } // Обработка типа кузова


  } // Констуктор

}
