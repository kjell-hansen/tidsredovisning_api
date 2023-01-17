<?php

declare (strict_types=1);

function connectDb(): PDO {
    // Koppla mot databasen
    $dsn = 'mysql:dbname=tidsapp;host=localhost';
    $dbUser = 'root';
    $dbPassword = "";
    $db = new PDO($dsn, $dbUser, $dbPassword);

    return $db;
}
