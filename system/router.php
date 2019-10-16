<?php
class Router {

  // NOTE: Controller ı kontrol et ve çalıştır
  private static function checkFile($files) {
    if (count($files) > 0) {
      foreach ($files as $file) {
        include_once $file['file'];
        if (method_exists($file['class'], $file['method'])) {
          return $file;
        }
      }
    }
  }

  // NOTE: Controller ı tara
  private static function searchFiles($route, $method=Null) {
    $files = [];
    $routeParse = explode('/', $route);
    $filename = array_pop($routeParse);
    $path = Constant::CONTROLLLERPATH . implode(DS, $routeParse);
    if (count($routeParse) > 0 && empty($method)) {
      if (file_exists($path . '.php')) {
        $files[] = [
          'file' => $path . '.php',
          'method' => $filename,
          'class' => Basic::getClass(end($routeParse)),
        ];
      }
    }
    if (file_exists($path . DS . $filename . '.php')) {
      $files[] = [
        'file' => $path . DS . $filename . '.php',
        'method' => empty($method) ? 'index' : $method,
        'class' => Basic::getClass($filename),
      ];
    }
    return array_reverse($files);
  }

  // NOTE: Controller Çalıştır
  private static function run($route, $method=Null) {
    $file = self::checkFile(
      self::searchFiles($route, $method),
      $method
    );
    if (empty($file)) exit('Controller bulunamadı.');
    call_user_func(
      [
        new $file['class'](), $file['method']
      ]
    );
    return True;
  }

  // NOTE: Ayrıştır
  public static function route($route) {
    $route['path'] = trim($route['path'], '/');
    $route['methods'] = is_array($route['methods']) ? $route['methods'] : [$route['methods']];
    $route['controller'] = empty($route['controller']) ? Null : trim($route['controller'], '/');
    $route['controllerMethod'] = empty($route['controllerMethod']) ? Null : $route['controllerMethod'];
    if (in_array($_SERVER['REQUEST_METHOD'], $route['methods'])) {
      if ($route['path'] == App::$appUrl) {
        // NOTE: Controller ı başlat
        return self::run(
          empty($route['controller']) ? $route['path'] : $route['controller'],
          $route['controllerMethod']
        );
      }
    }
  }
}
