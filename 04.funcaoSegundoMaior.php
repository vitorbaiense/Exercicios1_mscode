<?php
$lista = [2, 13, 35, 46, 51, 6, 61, 8, 96, 10];
$segundoMaior = segundoMaiorNumero($lista);

function segundoMaiorNumero($lista) {
    rsort($lista);

    $segundoMaior = $lista[1];

    return $segundoMaior;
}

echo "O segundo maior número na lista é: " . $segundoMaior;
?>