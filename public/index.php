<?php

if (PHP_MAJOR_VERSION < 8) {
    die('Необходима версия PHP >= 8');
}

require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS . '/functions.php';
require_once CONFIG . '/routes.php';


new \wfm\App();
// Из функции helpers в режиме дебага берет данные и завершает работу
debug(\wfm\Router::getRoutes());
//var_dump(\wfm\App::$app->getProperties());
//throw new Exception('Возникла ошибочка!', 404);
//echo $test;
