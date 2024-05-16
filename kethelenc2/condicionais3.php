<?php
function calcularAumentoSalario($salarioAtual, $tempoServico) {
    // Tabela de aumento de salário baseado no tempo de serviço
    $aumentoPorAno = 150; // Aumento de R$ 150 por ano de serviço

    // Calcula o novo salário com base no tempo de serviço
    $novoSalario = $salarioAtual + ($tempoServico * $aumentoPorAno);

    return $novoSalario;
}

// Salário atual e tempo de serviço do funcionário (altere conforme necessário)
$salarioAtual = 2500;
$tempoServico = 6;

// Chama a função para calcular o salário reajustado
echo "Salário reajustado: R$" . calcularAumentoSalario($salarioAtual, $tempoServico);
?>