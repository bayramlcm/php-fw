<?php
include_once SYSTEM.'constant.php';
include_once SYSTEM.'router.php';
new Router(@$_GET['route']);
