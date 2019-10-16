<?php
App::addModule(
  ['mysql']
);

App::setConfig(
  [
    'mysql' => [
      'host' => 'localhost',
      'user' => 'root',
      'pass' => '',
      'db' => '',
    ],
  ]
);
