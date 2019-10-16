<?php
include_once APPPATH . 'app.php';
include_once APPPATH . 'routes.php';
include_once APPPATH . 'config.php';
App::run(@$_GET['route']);
