<?php
declare (strict_types=1);

function allaActivityTester():string {
    $retur="";
    $retur.= test_HamtaAllaAktiviteter();
    $retur.= test_HamtaEnAktivitet();
    $retur.= test_SparaNyAktivitet();
    $retur.= test_UppdateraAktivitet();
    $retur.= test_RaderaAktivitet();
    
    return $retur;
}

function testActivityFunction(string $funktion):string {
    if (function_exists("test_$funktion")) {
        return call_user_func("test_$funktion");
    } else {
        return "<p class='error'>Funktionen test_$funktion finns inte.</p>";
    }
}

function test_HamtaAllaAktiviteter():string {
    $retur="<h2>test_HamtaAllaAktiviteter</h2>";
    $retur.= "<p class='ok'>Testar hämta alla aktiviteter</p>";
    return $retur;
}

function test_HamtaEnAktivitet():string {
    $retur="<h2>test_HamtaEnAktivitet</h2>";
    $retur.=  "<p class='ok'>Testar hämta en aktivitet</p>";
    $retur.=  "<p class='error'>Det här testet gick fel!</p>";
    return $retur;
}

function test_SparaNyAktivitet():string {
    $retur="<h2>test_SparaNyAktivitet</h2>";
    $retur.=  "<p class='ok'>Testar spara ny aktivitet</p>";
    $retur.=  "<p class='ok'>Ett test till för spara som givk bra</p>";
    return $retur;
}

function test_UppdateraAktivitet():string {
    $retur="<h2>test_UppdateraAktivitet</h2>";
    $retur.=  "<p class='ok'>Testar uppdatera aktivitet</p>";
    return $retur;
}

function test_RaderaAktivitet():string {
    $retur="<h2>test_RaderaAktivitet</h2>";
    $retur.=  "<p class='ok'>Testar radera aktivitet</p>";
    return $retur;
}