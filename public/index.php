<?php
define('APPLICATION_PATH', dirname(__DIR__));
//session_start();

$application = new Yaf_Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();