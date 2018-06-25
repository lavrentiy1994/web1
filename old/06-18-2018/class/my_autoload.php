<?php
/**
 * Autoload
 * Оперделение собственного метода поиска и подключения классов
 * на основе структуры страны.
 *
 * @link http://php.net/manual/ru/function.spl-autoload-register.php
 *
 * @author  Oleksandr Nykytin <nikitin_a@itstep.org>
 */

/**
 * Определяем функцию, которая выступит в качестве загрузчика
 * и заменит require
 */

spl_autoload_register(
    function ($class) {
//        echo '<ul class="info"><li> Try find class: ' . $class . '</li>' . PHP_EOL;

        /**
         * Разбираем имя класса и строим путь к файлу
         */
//        $pathParts = explode('\\', $class);
//        $filePath = 'class/' . implode('/', $pathParts) . '.php';

        $filePath = 'class/' . $class . '.php'; // Сейчас работает так, пока нет namespace


//        echo '<li> Construct path to file: ' . $filePath . '</li>' . PHP_EOL;

        if (is_file($filePath)) {
            include_once $filePath;
//            echo '<li class="success"> Class load </li></ul>' . PHP_EOL;
            return true;
        } else {
  //          echo '<li class="error"> File: ' . $filePath . ' not found.</li></ul>' . PHP_EOL;
            return false;
        }


    }
);

