<?php
class System {

  protected static $route;

  // NOTE: Route Kontrolü
  protected static function Router($route) {
    return Router::route($route);
  }

  // NOTE: Modül Yükle
  protected static function Module() {
    return Module::run();
  }

}
