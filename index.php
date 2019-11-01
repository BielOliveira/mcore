<?php
require_once 'core/config.php';
require_once 'core/core-functions.php';
require_once 'core/routes.php';

$uri = retriveRequest(__APP_ROOT__,$_SERVER["REQUEST_URI"]);

if(checkRoute($uri,$routes)){
    if($routes[$uri['uri']][2] != NULL) {
        $__setedVar[$routes[$uri['uri']][2]] = $uri['getValue'];
    }
    require_once $routes[$uri['uri']][1];
}
else{
    require_once '404.php';
}