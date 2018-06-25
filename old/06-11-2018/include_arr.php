<?php
ini_set('display_errors', '1');
/**
 *
 * @link
 *
 */
include_once ('libs/prettyPrint.php');
include_once ('libs/arrRand.php');

 $arr = ['ww', 'ee'];

 echo arrRand ($arr);
 echo arrRand ($arr,10);
