<?php
class App extends System {

  // NOTE: Tüm Routelar
  private static $appRoutes = [];
  // NOTE: Tüm Modüller
  public static $appModules = [];
  // NOTE: Tüm Ayarlar
  private static $appConfig = [];
  // NOTE: Gelen URL
  public static $appUrl = '';

  // NOTE: Tüm route'ları ekle
  public static function addRoute($method, $path, $controller) {
    self::$appRoutes[] = [
      'methods' => $method,
      'path' => $path,
      'controller' => $controller
    ];
  }

  // NOTE: Modül Yükle
  public static function addModule($appModule = []) {
    $appModule = is_array($appModule) ? $appModule : [$appModule];
    self::$appModules = array_merge(self::$appModules, $appModule);
  }

  // NOTE: Ayarları yükle
  public static function setConfig($appConfig) {
    self::$appConfig = $appConfig;
  }

  // NOTE: App'i çalıştır
  public static function run($appUrl='/') {
    self::$appUrl = $appUrl;
    // NOTE: Route'ları çalıştır
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
    echo '404 not page!';
    exit;
  }


}
