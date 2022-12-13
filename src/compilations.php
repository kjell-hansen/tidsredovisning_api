<?php

declare (strict_types=1);

function compilations(Route $route): Response {
    try {
        if (count($route->getParams()) === 2 && $route->getMethod() === RequestMethod::GET) {
            return hamtaDatum(new DateTimeImmutable($route->getParams()[0]), new DateTimeImmutable($route->getParams()[1]));
        }
    } catch (Exception $exc) {
        return new Response($exc->getMessage(), 400);
    }

    return new Response("Okänt anrop", 400);
}

function hamtaDatum(DateTimeInterface $from, DateTimeInterface $tom): Response {
    return new Response("Hämta alla tasks mellan " . $from->format("Y-m-d") . " och " . $tom->format("Y-m-d"), 200);
}

