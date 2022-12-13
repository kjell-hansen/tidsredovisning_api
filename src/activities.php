<?php

declare (strict_types=1);

function activities(Route $route, array $postData): Response {
    try {
        if (count($route->getParams()) === 0 && $route->getMethod() === RequestMethod::GET) {
            return hamtaAlla();
        }
        if (count($route->getParams()) === 1 && $route->getMethod() === RequestMethod::GET) {
            return hamtaEnskild((int) $route->getParams()[0]);
        }
        if (count($route->getParams()) === 0 && $route->getMethod() === RequestMethod::POST) {
            return sparaNy((string) $postData["activity"]);
        }
        if (count($route->getParams()) === 1 && $route->getMethod() === RequestMethod::PUT) {
            return uppdatera((int) $route->getParams()[0], (string) $postData["activity"]);
        }
        if (count($route->getParams()) === 1 && $route->getMethod() === RequestMethod::DELETE) {
            return radera((int) $route->getParams()[0]);
        }
    } catch (Exception $exc) {
        return new Response($exc->getMessage(), 400);
    }

    var_dump($route);
    var_dump($postData);
    return new Response("Okänt anrop", 400);
}

function hamtaAlla(): Response {
    return new Response("Hämta alla aktiviteter", 200);
}

function hamtaEnskild(int $id): Response {
    return new Response("Hämta aktivitet $id", 200);
}

function sparaNy(string $aktivitet): Response {
    return new Response("Sparar ny aktivitet:$aktivitet", 200);
}

function uppdatera(int $id, string $aktivitet): Response {
    return new Response("Uppdaterar aktivetet $id -> $aktivitet", 200);
}

function radera(int $id): Response {
    return new Response("Raderar aktivitet $id", 200);
}
