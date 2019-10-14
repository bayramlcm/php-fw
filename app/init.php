<?php defined('SECRET') OR exit('Erişiminiz engellendi!');

include_once APPPATH.'config.php';
Module::loads($config['modules']);
include_once APPPATH.'routes.php';
