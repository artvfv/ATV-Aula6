<?php

$peso = 75;
$altura = 1.80;

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Abaixo do peso";
} elseif ($imc >= 18.5 && $imc < 24.9) {
    echo "Peso normal";
} elseif ($imc >= 25 && $imc < 29.9) {
    echo "Sobrepeso";
} else {
    echo "Obesidade";
}

?>