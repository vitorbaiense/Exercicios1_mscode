<?php
$palavra = "ornitorrinco";
$frase = "este onitorrinco fala";

function verifica($string) {
    if (strpos($string, ' ') !== false) {
        return true;
    } else {
        return false;
    }
}

if (verifica($palavra)) {
    echo "A primeira variável é uma frase e contém espaços". "<br>";
} else {
    echo "A primeira variável é uma palavra e não contém espaços". "<br>";
}

if (verifica($frase)) {
    echo "A segunda variável é uma frase e contém espaços". "<br>";
} else {
    echo "A segunda variável é uma palavra e não contém espaços". "<br>";
}

?>