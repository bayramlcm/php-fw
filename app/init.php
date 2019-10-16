<?php
include_once APPPATH . 'app.php';
include_once APPPATH . 'routes.php';
App::run(@$_GET['route']);
