<?php
define('SECRET', '@bayramlcm');

define('PS', PATH_SEPARATOR);
define('DS', DIRECTORY_SEPARATOR);

define('ROOT', __DIR__.DS);
define('APP', ROOT.'app'.DS);
define('SYSTEM', ROOT.'system'.DS);

include_once SYSTEM.'init.php';
include_once APP.'init.php';
