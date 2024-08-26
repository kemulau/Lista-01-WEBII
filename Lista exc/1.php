<?php
echo "Digite o primeiro numero: ";
$num1 = readline();
echo "Digite o segundo numero: ";
$num2 = readline();
echo "Digite o terceiro numero: ";
$num3 = readline();
echo "Digite o quarto numero: ";
$num4 = readline();

$quadrado1 = $num1 * $num1;
$quadrado2 = $num2 * $num2;
$quadrado3 = $num3 * $num3;
$quadrado4 = $num4 * $num4;

if ($quadrado3 >= 1000) {
    echo "O quadrado do terceiro numero eh: " . $quadrado3;
} else {
    echo "Numeros digitados: $num1, $num2, $num3, $num4\n";
    echo "O quadrado dos numeros digitados eh: $quadrado1, $quadrado2, $quadrado3, $quadrado4";
}