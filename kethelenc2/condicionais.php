<?php
function calcularMediaPonderada($nota1, $nota2, $nota3) {
    // Calcula a média ponderada
    $media = ($nota1 + $nota2 + 2 * $nota3) / 4;

    // Verifica se o aluno foi aprovado ou reprovado
    if ($media >= 6.0) {
        return "Aprovado. Média: " . $media;
    } else {
        return "Reprovado. Média: " . $media;
    }
}

// Notas do aluno (altere conforme necessário)
$nota1 = 8;
$nota2 = 7;
$nota3 = 6;

// Chama a função para calcular a média e determinar se o aluno foi aprovado ou reprovado
echo calcularMediaPonderada($nota1, $nota2, $nota3);
?>