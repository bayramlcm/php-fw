<?php
/**
 * Router Yapısı
 */
class Router {

  private static $url;

  function __construct($url) {
    self::$url = trim($url, '/');
  }

  function route($methods, $route, $callback) {
    $methods = is_array($methods) ? $methods : [$methods];
    if (in_array($methods, $_SERVER['REQUEST_METHOD'])) {
      if (trim('/', $route) == self::$url) {
        call_user_func($callback);
        return true;
      }
    }
    return false;
  }
}
