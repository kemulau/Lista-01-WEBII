<?php
$numeros = [];

for ($i = 0; $i < 500; $i++) {
    $numeros[] = rand(1, 1000);
}

$maiorValor = $numeros[0];
$menorValor = $numeros[0];
$soma = 0;

foreach ($numeros as $numero) {
    if ($numero > $maiorValor) {
        $maiorValor = $numero;
    }
    if ($numero < $menorValor) {
        $menorValor = $numero;
    }
    $soma += $numero;
}

$media = $soma / count($numeros);

echo "O maior valor eh: " . $maiorValor . "\n";
echo "O menor valor eh: " . $menorValor . "\n";
echo "A media dos valores eh: " . $media . "\n";