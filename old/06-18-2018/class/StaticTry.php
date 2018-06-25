<?php

/**
 * @link http://php.net/manual/ru/language.oop5.static.php
 */
class StaticTry
{
  static public $var = 10;
  static function  echoVar (){
    echo '<p> ' .self::$var . ' </p>';
  }
}
