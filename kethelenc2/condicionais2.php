<?php
function verificarAposentadoria($idade, $tempoServico) {
    // Verifica as condições para aposentadoria
    if ($idade >= 65 || $tempoServico >= 28|| ($idade >= 60 && $tempoServico >= 22)) {
        return "Pode se aposentar";
    } else {
        return "Não pode se aposentar";
    }
}

// Idade e tempo de serviço do trabalhador (altere conforme necessário)
$idade = 60;
$tempoServico = 22;

// Chama a função para verificar se o trabalhador pode se aposentar
echo verificarAposentadoria($idade, $tempoServico);
?>