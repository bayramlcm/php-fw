<?php
/**
 * Router Yapısı
 */
class Router {

  private static $url;

  function __construct($url) {
    self::$url = trim($url, '/');
  }

  function route($methods, $route, $controller=Null, $controllerMethod=Null) {
    $route = trim($route, '/');
    $controller = empty($controller) ? Null : trim($controller, '/');
    $methods = is_array($methods) ? $methods : [$methods];
    if (in_array($_SERVER['REQUEST_METHOD'], $methods)) {
      if ($route === self::$url) {
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
