<?php

define('APPLICATION_PATH', dirname(__DIR__));
define('__STATIC__', APPLICATION_PATH . '/static/');
define('CONFIG_PATH', APPLICATION_PATH . "/conf/application.ini");
define('FUNCTIONS_PATH', APPLICATION_PATH . '/functions/');

Yaf_Session::getInstance()->start();    //开启yaf框架的session

$application = new Yaf_Application(CONFIG_PATH);

$application->bootstrap()->run();