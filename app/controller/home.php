<?php
class Home extends Controller {
  function index() {
    echo "Merhaba Dünya!";
    // NOTE: Model Yükleme
    $this->loadModel('Users');
    // NOTE: View Yükleme ve Değişkenleri gönderme
    $data = [
      'users' => $this->Users->getAll(),
    ];
    $this->loadView('home', $data);
  }
}
