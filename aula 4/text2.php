<?php


    $nome = "falso"; // Exemplo de nome "falso"
    
    if ($nome != "falso") {
        echo "Nome válido: " . $nome . "<br>";
        // Outro código que você deseja executar se o nome for válido
    } else {
        echo "Nome inválido: " . $nome . "<br>";
        // Outro código que você deseja executar se o nome for inválido
    }
 while ($nome == "falso");

echo "Fim do loop."; // Esta linha será executada quando o nome for diferente de "falso"
?>