<?php
/**
 * Controller
 */
class Controller {

  private function getClass($route) {
    $class = explode('/', $route);
    return ucfirst(end($class));
  }

  // NOTE: Controller Çalıştır
  public function run($route, $loadMethod) {
    include_once CONTROLLER."{$route}.php";
    call_user_func(self::getClass($route).'::'.$loadMethod);
  }

}
