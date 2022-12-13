<?php

declare (strict_types=1);

function tasklists(Route $route): Response {
    try {
        if (count($route->getParams()) === 1 && $route->getMethod() === RequestMethod::GET) {
            return hamtaSida((int) $route->getParams()[0]);
        }
        if (count($route->getParams()) === 2 && $route->getMethod() === RequestMethod::GET) {
            return hamtaDatum(new DateTimeImmutable($route->getParams()[0]), new DateTimeImmutable($route->getParams()[1]));
        }
    } catch (Exception $exc) {
        return new Response($exc->getMessage(), 400);
    }
    
        return new Response("Okänt anrop", 400);
}

function tasks(Route $route, array $postData): Response {
    try {
        if (count($route->getParams()) === 1 && $route->getMethod() === RequestMethod::GET) {
            return hamtaEnskild((int) $route->getParams()[0]);
        }
        if (count($route->getParams()) === 0 && $route->getMethod() === RequestMethod::POST) {
            return sparaNy($postData);
        }
        if (count($route->getParams()) === 1 && $route->getMethod() === RequestMethod::PUT) {
            return uppdatera((int) $route->getParams()[0], $postData);
        }
        if (count($route->getParams()) === 1 && $route->getMethod() === RequestMethod::DELETE) {
            return radera((int) $route->getParams()[0]);
        }
    } catch (Exception $exc) {
        return new Response($exc->getMessage(), 400);
    }
    
    return new Response("Okänt anrop", 400);
}

function hamtaSida(int $sida): Response {
    return new Response("Hämta alla tasks sida $sida", 200);
}

function hamtaDatum(DateTimeInterface $from, DateTimeInterface $tom): Response {
    return new Response("Hämta alla tasks mellan " . $from->format("Y-m-d") . " och " . $tom->format("Y-m-d"), 200);
}

function hamtaEnskild(int $id): Response {
    return new Response("Hämta task $id", 200);
}

function sparaNy(array $postData): Response {
    return new Response("Sparar ny task", 200);
}

function uppdatera(int $id, array $postData): Response {
    return new Response("Uppdaterar task $id", 200);
}

function radera(int $id): Response {
    return new Response("Raderar task $id", 200);
}
