<?php
include_once SYSTEMPATH.'constant.php';
include_once SYSTEMPATH.'basic.php';
include_once SYSTEMPATH.'router.php';
new Router(@$_GET['route']);
include_once SYSTEMPATH.'controller.php';
include_once SYSTEMPATH.'module.php';
