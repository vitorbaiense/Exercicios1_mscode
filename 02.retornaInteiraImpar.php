<?php
$lista = [1, 3, 5, 6, 7, 8, 11];
$resultado = numeros($lista);

function numeros($lista) {
    $produto = 1;

    foreach ($lista as $numero) {
        if ($numero % 2 !== 0) {
            $produto *= $numero;
        }
    }

    return $produto;
}

echo "O produto dos números inteiros ímpares na lista é: ". $resultado;

?>