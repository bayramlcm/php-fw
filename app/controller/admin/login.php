<?php defined('SECRET') OR exit('Erişiminiz engellendi!');
class Login extends Controller {
  function index() {
    Log::salt(json_encode(['ok']));
    echo "Hülyaa :))";
  }
}
