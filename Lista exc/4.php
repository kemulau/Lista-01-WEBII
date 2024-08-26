<?php
echo "Digite o indice de poluição atual: ";
$indicePoluicao = readline();

$indicePoluicao = floatval($indicePoluicao);

if ($indicePoluicao >= 0.5) {
    echo "Todas as industrias devem paralisar suas atividades";
} elseif ($indicePoluicao >= 0.4) {
    echo "As industrias dos grupos 1 e 2 devem paralisar suas atividades";
} elseif ($indicePoluicao >= 0.3) {
    echo "As industrias do grupo 1 devem paralisar suas atividades";
} else {
    echo "O indice de poluição está dentro dos limites aceitáveis";
}