<?php

    require_once dirname(__DIR__) . '/config/init.php';

new \wfm\App();
var_dump(\wfm\App::$app->getProperties());