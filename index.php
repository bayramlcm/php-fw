<?php
define('SECRET', '@bayramlcm');

define('PS', PATH_SEPARATOR);
define('DS', DIRECTORY_SEPARATOR);

define('ROOT', __DIR__.DS);
define('APPPATH', ROOT.'app'.DS);
define('SYSTEMPATH', ROOT.'system'.DS);

$s = microtime(true);
include SYSTEMPATH . 'init.php';
include APPPATH . 'init.php';
$e = microtime(true);
echo $e-$s;
