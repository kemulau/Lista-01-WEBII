<?php
$numeros = range(1, 20);

$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero;
}

echo "A soma de todos os elementos eh: " . $soma;