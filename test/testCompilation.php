<?php
declare (strict_types=1);

function allaCompilationTester():string {
    return test_HamtaAllaAktiviteter();
}

function testCompilationFunction(string $funktion):string {
    if (function_exists("testa$funktion")) {
        return call_user_func("testa$funktion");
    } else {
        return "<p class='error'>Funktionen $funktion kan inte testas.</p>";
    }
}

function test_HamtaSammanstallning():string {
    return "<p class='ok'>Testar hämta sammanställning mellan två datum</p>";
}

