<?php
/**
 * Module
 */
class Module {

  // NOTE: Modülü yükle
  public static function load($module) {
    $modulePath = MODULES . $module . '.php';
    if (file_exists($modulePath)) {
      include_once $modulePath;
      if (class_exists(Basic::getClass($module))) {
        return True;
      }
    }
    return False;
  }

  // NOTE: Modülleri Yükle
  public static function loads($modules) {
    foreach ($modules as $module) {
      self::load($module);
    }
  }
}
