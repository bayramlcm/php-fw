<?php
/**
 * Controller
 */
class Controller {

  // NOTE: Controller ı kontrol et ve çalıştır
  private function checkFile($files) {
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
  private function searchFiles($route, $method=Null) {
    $files = [];
    $routeParse = explode('/', $route);
    $filename = array_pop($routeParse);
    $path = CONTROLLER . implode(DS, $routeParse);
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
  public function run($route, $method=Null) {
    $file = self::checkFile(
      self::searchFiles($route, $method),
      $method
    );
    if (empty($file)) exit('Controller bulunamadı.');
    call_user_func($file['class'] . '::' . $file['method']);
    // include_once CONTROLLER."{$route}.php";
    // call_user_func(self::getClass($route).'::'.$loadMethod);
  }

}
