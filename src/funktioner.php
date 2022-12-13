<?php
declare (strict_types=1);

function skickaJSON(Response $response): never {
    $statusText = getStatusMeddelande($response->getStatus());
    header("$statusText;Content-type:application/json;charset=utf-8");
    $json = json_encode($response->getContent(), JSON_PRETTY_PRINT + JSON_UNESCAPED_UNICODE);
    echo $json;
    exit;
}

function getStatusMeddelande(int $status): string {
    switch ($status) {
        case 200:
            return "HTTP/1.1 200 OK";
        case 400:
            return "HTTP/1.1 400 Bad request";
        case 401:
            return "HTTP/1.1 401 Unauthorized";
        case 403:
            return "HTTP/1.1 403 Forbidden";
        case 405:
            return "HTTP/1.1 405 Method not allowed";
        case 500:
            return "HTTP/1.1 500 Internal Server Error";
        default:
            throw new Exception("Okänt felnummer ($status)");
    }
}
