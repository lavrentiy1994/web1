<?php

include_once ('vendor/autoload.php'); // Подключение автозагрузки


// Создадим объект ответа
$appResponse = new Core\Response();

// будем выполнять дейтсвия по наполнению обьекта тут


$appResponse->echo ();
