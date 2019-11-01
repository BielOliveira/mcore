<?php

function retriveRequest($base,$uri) 
{
    $lessBase = str_replace($base, "", $uri);
    $explodedUri = explode("/",$lessBase);
    if (is_numeric($explodedUri[count($explodedUri)-1])){
        $getVar = $explodedUri[count($explodedUri)-1];
        unset($explodedUri[count($explodedUri)-1]);
        $uri = implode("/",$explodedUri);
        $requestString = ["uri" => $uri, "getValue" => $getVar];
    }
    else{
        $getVar = NULL;
        $uri = implode("/",$explodedUri);
        $requestString = ["uri" => $uri, "getValue" => $getVar];
    }
    return $requestString;
}

function checkRoute(array $uri, array $routes)
{
    $cahve = $uri['uri'];
    if(isset($routes[$cahve])) {
        return true;
    }
    else {
        return false;
    }
}

function validateRoutes($routes)
{
    foreach ($routes as $rota) {
        if(!isset($rota[2])){
            $routes[$rota[0]][2]=null;
        }
    }
    return $routes;
}