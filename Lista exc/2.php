<?php
echo "Digite um numero:";
$numero = readline();

$numero = intval($numero);

if ($numero % 2 == 0) {
    echo "O numero $numero eh par\n";
} else {
    echo "O numero $numero eh impar\n";
}

if ($numero > 0) {
    echo "O numero eh positivo";
} elseif ($numero < 0) {
    echo "O numero eh negativo";
} else {
    echo "O numero eh zero";
}