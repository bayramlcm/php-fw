<?php
class App extends System {

  // NOTE: Tüm Routelar
  private static $appRoutes = [];
  // NOTE: Gelen URL
  public static $url = '';

  // NOTE: Tüm route'ları ekle
  public static function addRoute($method, $path, $controller) {
    self::$appRoutes[] = [
      'methods' => $method,
      'path' => $path,
      'controller' => $controller
    ];
  }

  // NOTE: App'i çalıştır
  public static function run($url='/') {
    self::$url = $url;
    foreach (self::$appRoutes as $appRoute) {
      // NOTE: Route'u bulursa sonlandır
      if (self::Router($appRoute)) {
        exit;
        break;
      }
    }
    self::page404();
  }

  public static function page404() {
    echo '404 not pages!';
    exit;
  }


}
