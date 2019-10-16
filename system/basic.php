<?php
class Basic {
  // NOTE: Sınıf ismine çevir
  public static function getClass($route) {
    $class = explode('/', $route);
    return ucfirst(end($class));
  }
}
