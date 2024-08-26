<?php
function classificarNadador() {
    $idade = readline("Digite a idade do nadador: ");

    if (!is_numeric($idade)) {
        echo "Numero invalido";
        return;
    }

    $idade = intval($idade);

    if ($idade >= 5 && $idade <= 7) {
        return "Infantil A";
    } elseif ($idade >= 8 && $idade <= 11) {
        return "Infantil B";
    } elseif ($idade >= 12 && $idade <= 13) {
        return "Juvenil A";
    } elseif ($idade >= 14 && $idade <= 17) {
        return "Juvenil B";
    } else {
        return "Idade invalida para a classificação";
    }
}

$categoria = classificarNadador();

if ($categoria) {
    echo "O nadador pertence a categoria: " . $categoria;
}