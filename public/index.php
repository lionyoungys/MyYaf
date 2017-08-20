<?php

define('APPLICATION_PATH', dirname(__DIR__));
define('__STATIC__', APPLICATION_PATH . '/static/');
define('CONFIG_PATH', APPLICATION_PATH . "/conf/application.ini");
define('FUNCTIONS_PATH', APPLICATION_PATH . '/functions/');

$application = new Yaf_Application(CONFIG_PATH);

$application->bootstrap()->run();