<?php
class Controller {

  protected $Module;

  function __construct() {
    $this->Module = new Module(App::$appModules);
  }

  // NOTE: Model Yükle
  protected function loadModel($name) {
    include_once Constant::MODELPATH . $name . '.php';
    $this->$name = new $name();
  }

  // NOTE: View Yükle
  protected function loadView($name, $vars=[]) {
    restore_include_path();
    extract(
      (array) $vars
      // compact((array) $vars)
    );
    include_once Constant::VIEWPATH . $name . '.php';
  }


}
