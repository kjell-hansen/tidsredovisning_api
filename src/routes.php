<?php

declare (strict_types=1);

function getRoute(string $querystring, string $method = "GET"): Route {
    if (substr($querystring, -1) === "/") {
        $querystring = substr($querystring, 0, -1);
    }
    $uri = explode("/", $querystring);
    $params=[];
    switch (count($uri)) {
        case 0:
        case 1:
        case 2:
            $route = "";
            break;
        case 3:
            $route = $uri[2];
            break;
        default :
            $route = $uri[2];
            $params = array_slice($uri, 3);
    }

    $rutt = $route === "" ? "/" : "/{$route}/";
    $parametrar = $params ?? [];

    if ($method === "POST") {
        $metod = RequestMethod::POST;
        if (isset($_POST["action"]) && $_POST["action"] === "delete") {
            $metod = RequestMethod::DELETE;
        } elseif (isset($_POST["action"]) && $_POST["action"] === "save" && count($params) > 0) {
            $metod = RequestMethod::PUT;
        }
    } else {
        $metod = RequestMethod::GET;
    }

    return new Route($rutt, $parametrar, $metod);
}
