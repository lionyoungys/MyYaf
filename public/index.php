<?php
define('APPLICATION_PATH', dirname(__DIR__));
define('CONFIG_PATH', APPLICATION_PATH . "/conf/application.ini");
define('FUNCTIONS_PATH', APPLICATION_PATH . '/functions/');
//session_start();

$application = new Yaf_Application(CONFIG_PATH);

$application->bootstrap()->run();