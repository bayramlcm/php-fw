<?php defined('SECRET') OR exit('Erişiminiz engellendi!');

Router::route('GET', '/', function() {
  echo 'Anasayfa';
});

Router::route('GET', '/login', function() {
  echo 'Giriş Yap';
});

Router::route('GET', '/logout', function() {
  echo 'Çıkış Yap';
});
