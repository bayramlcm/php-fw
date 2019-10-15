<?php
class System {

  protected static $route;

  // NOTE: Route Kontrolü
  protected static function Router($route) {
    return Router::route($route);
  }

}
