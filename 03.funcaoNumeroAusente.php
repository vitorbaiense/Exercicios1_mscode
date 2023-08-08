<?php
$lista = [1, 2, 3, 4, 5, 6, 8, 9, 10];
$numeroAusente = numeroAusente($lista);

function numeroAusente($lista) {
    $somaTotal = 55;

    $somaLista = array_sum($lista);

    $numeroAusente = $somaTotal - $somaLista;

    return $numeroAusente;
}

echo "O número ausente na lista é: " . $numeroAusente;
?>