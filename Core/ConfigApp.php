<?php
/**
 * Конфигурация всего веб приложения
 * Все настройки, которые нам нужны пы пишем тут и используем дальше
 *
 */

namespace Core; // Как страна или область для города

/*
Николаев - Николаевсая область
Николаев - Львовская область
- namespace - указание области для города
*/

class ConfigApp {
  static $appName = 'Наш сайт';

  static $baseDir = '/var/www/clients/client4/web8/web';
  static $tplDir = '/var/www/clients/client4/web8/web/resources/view';
}
