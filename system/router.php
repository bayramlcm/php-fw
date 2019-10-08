<?php
/**
 * Router Yapısı
 */
class Router {

  private static $url;

  function __construct($url) {
    self::$url = trim($url, '/');
  }

  function route($methods, $route, $controller=Null, $controllerMethod='index') {

    $methods = is_array($methods) ? $methods : [$methods];
    if (in_array($_SERVER['REQUEST_METHOD'], $methods)) {
      if (trim($route, '/') === self::$url) {
        Controller::run(
          empty($controller) ? $route : $controller,
          $controllerMethod
        );
        return True;
      }
    }
    return False;
  }
}
