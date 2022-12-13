<?php

declare (strict_types=1);

/**
 * Funktion för att testa alla aktiviteter
 * @return string html-sträng med resultatet av alla tester
 */
function allaCompilationTester(): string {
// Kom ihåg att lägga till alla testfunktioner
    $retur = "<h1>Testar alla sammanställningsfunktioner</h1>";
    $retur .= test_HamtaSammanstallning();
    return $retur;
}

/**
 * Funktion för att testa en enskild funktion
 * @param string $funktion namnet (utan test_) på funktionen som ska testas
 * @return string html-sträng med information om resultatet av testen eller att testet inte fanns
 */
function testCompilationFunction(string $funktion): string {
    if (function_exists("test_$funktion")) {
        return call_user_func("test_$funktion");
    } else {
        return "<p class='error'>Funktionen $funktion kan inte testas.</p>";
    }
}

/**
 * Tester för funktionen hämta en sammmanställning av uppgifter mellan två datum
 * @return string html-sträng med alla resultat för testerna 
 */
function test_HamtaSammanstallning(): string {
    $retur = "<h2>test_HamtaSammanstallning</h2>";
    $retur .= "<p class='ok'>Testar hämta sammanställning mellan två datum</p>";
    return $retur;
}
