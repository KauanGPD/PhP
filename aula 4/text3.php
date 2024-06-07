<?php

$hoje = "Quarta"; // Definindo o valor da variável $hoje como "Quarta"

switch ($hoje) {
    case "Segunda":
        echo "Hoje é segunda-feira"; // Se $hoje for "Segunda", essa mensagem será exibida
        break;
    case "Terça":
        echo "Hoje é terça-feira"; // Se $hoje for "Terça", essa mensagem será exibida
        break;
    case "Quarta":
        echo "Hoje é quarta-feira"; // Se $hoje for "Quarta", essa mensagem será exibida
        break;
    default:
        echo "Não é início da semana"; // Se $hoje não corresponder a nenhum dos casos anteriores, essa mensagem será exibida
}
