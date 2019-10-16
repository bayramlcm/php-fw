<?php
class Module {

  function __construct($appModules) {
    // NOTE: Modülleri listele
    foreach($appModules as $appModule) {
      include_once Constant::MODULEPATH . $appModule . '.php';
      $appModuleClass = Basic::getClass($appModule);
      $this->$appModuleClass = new $appModuleClass();
    }
  }

}
