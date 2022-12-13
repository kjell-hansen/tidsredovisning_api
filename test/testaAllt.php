<?php

declare (strict_types=1);

require './testActivities.php';
require './testCompilation.php';
require './testTasks.php';

function testaAllaFunktioner(): string {

    $allaFunktioner = get_defined_functions();
    $retur = "";

    foreach ($allaFunktioner['user'] as $funk) {
        if (substr($funk, 0, 5) === "test_") {
            $retur .= "<h2>$funk</h2>" . call_user_func($funk) . "\n";
        }
    }

    return $retur;
}
