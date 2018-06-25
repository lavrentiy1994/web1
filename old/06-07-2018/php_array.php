<?php
/**
 *
 * @link http://php.net/manual/ru/language.types.array.php
 * @link http://php.net/manual/ru/control-structures.foreach.php
 *
 *
 *
 * @link
 * @link
 */

echo '<h1> Прямой массив </h1>';

//$array = array("foo", "bar", "hallo", "world");
//var_dump($array);

$vetka1 = array ('яблоко', 'груша');
$vetka2 = array ('лист', 'цветок');

$stvol = array ($vetka1, $vetka2);

$tree =  array ($stvol);

echo '<pre>';
var_dump ($tree);
echo '</pre>';


echo ' путь к листу: ' .  $tree[0][1][0];

$myVetka = $tree[0][1];

echo '<pre>';
var_dump ($myVetka);
echo '</pre>';

//*-----------------------------------------------------------------------------
echo '<h1> Массив с ключами </h1>';

$user1 = array (
  'name' => 'Вася пупкин',
  'login' => 'vasya',
  'pswd' => 'Qwerty'
);

$user2 = array (
  'name' => 'Петя Васечкин',
  'login' => 'petya',
  'pswd' => 'Qwerty',
  'email' => 'info@noneme.com'
);



echo '<ul>';
foreach ($user1 as $key => $value) {
    echo '<li>' .  $key .  ' - ' . $value .'</li>';
}
echo '</ul>';


$users =  array($user1, $user2);
echo '<ul>';
foreach ($users as $key => $value) {
  if (is_array($value)) {
    $value = 'Не могу вывести - там массив';
  }
    echo '<li>' .  $key .  ' - ' . $value .'</li>';
}
echo '</ul>';

//*-----------------------------------------------------------------------------

for ($i=0; $i < sizeof ($users); $i++){
    echo '<ul>';
    foreach ($users[$i] as $key => $value) {
        echo '<li>' .  $key .  ' - ' . $value .'</li>';
    }
    echo '</ul>';
}

echo sizeof ($users);

echo sizeof ($users[0]);
echo sizeof ($users[1]);
