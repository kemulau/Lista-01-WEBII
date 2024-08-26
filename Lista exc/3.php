<?php
echo "Digite o codigo do operario:";
$c = readline();
echo "Digite o numero de horas trabalhadas:";
$n = readline();

$valorHoraNormal = 10;
$valorHoraExcedente = 20;

$horasExcedentes = $n > 50 ? $n - 50 : 0;

$salarioNormal = $n * $valorHoraNormal;
$salarioExcedente = $horasExcedentes * $valorHoraExcedente;
$salarioTotal = $salarioNormal + $salarioExcedente;

echo "Codigo do operário: $c";
echo "Salário normal: R$ " . number_format($salarioNormal, 2, ',', '.') . "\n";
echo "Salário excedente: R$ " . number_format($salarioExcedente, 2, ',', '.') . "\n";
echo "Salário completo: R$ " . number_format($salarioTotal, 2, ',', '.') . "\n";    