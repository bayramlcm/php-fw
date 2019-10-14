<?php defined('SECRET') OR exit('Erişiminiz engellendi!');

Router::route('GET', '/', 'home');

Router::route('GET', '/admin/login');

Router::route('GET', '/logout');
