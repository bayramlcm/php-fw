<?php
/**
 * Log
 */
class Log {

  public static function salt($message) {
    echo $message;
    exit;
  }
  
  public static function error($message) {
    echo "<b>Error:</b>{$message}";
    exit;
  }
  public static function warning($message) {
    echo "<b>Warning:</b>{$message}";
    exit;
  }
  public static function debug($message) {
    echo "<b>Debug:</b>{$message}";
    exit;
  }

}
