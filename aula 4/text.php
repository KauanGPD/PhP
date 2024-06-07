
<?php
$idade = 15; // Exemplo de idade menor que 18

while ($idade > 18) {
    echo "A idade é: " . $idade . "<br>";
    // Outro código que você deseja executar enquanto a idade for maior que 18
    $idade--; // Decrementa a idade para evitar um loop infinito
}

echo "A pessoa não tem idade suficiente."; // Esta linha será executada quando a idade for menor ou igual a 18
?>