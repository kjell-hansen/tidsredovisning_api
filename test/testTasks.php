<?php
declare (strict_types=1);

function allaTaskTester():string {
    return test_HamtaAllaAktiviteter();
}

function testTaskFunction(string $funktion):string {
    if (function_exists("testa$funktion")) {
        return call_user_func("testa$funktion");
    } else {
        return "<p class='error'>Funktionen $funktion kan inte testas.</p>";
    }
}

function test_HamtaUppgifterSida():string {
    return "<p class='ok'>Testar hämta alla uppgifter på en sida</p>";
}

function test_HamtaAllaUppgifterDatum():string {
    return "<p class='ok'>Testar hämta alla uppgifter mellan två datum</p>";
}

function test_HamtaEnUppgift():string {
    return "<p class='ok'>Testar hämta en uppgift</p>";
}

function test_SparaUppgift():string {
    return "<p class='ok'>Testar spara uppgift</p>";
}

function test_UppdateraUppgifter():string {
    return "<p class='ok'>Testar uppdatera uppgift</p>";
}

function test_RaderaUppgift():string {
    return "<p class='ok'>Testar radera uppgift</p>";
}