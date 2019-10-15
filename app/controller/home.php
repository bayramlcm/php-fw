<?php
class Home extends Controller {
  function index() {
    $this->loadModel('Users');
    $data = [
      'username' => 'Hidayet',
      'title' => 'Anasayfa',
      'users' => $this->Users->getAll(),
    ];
    $this->loadView('home', $data);
  }
}
