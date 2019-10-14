<?php
/**
 * Basic
 */
class Basic {
  // NOTE: Sınıf ismine çevir
  public function getClass($route) {
    $class = explode('/', $route);
    return ucfirst(end($class));
  }
}
