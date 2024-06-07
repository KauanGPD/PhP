<?php
    #criação de uma array
   $produto =[
    "maça" => 1.99,
    "uva" => 7.99,
    "laranja" => 2.49,];
    #exibir os preços da lista
    echo "lista precos:<br>";
    foreach($produto as $produto => $preco)
    {
        echo $produto."custa R$" .$preco."<br>";
    }

    #calculo total
    $total = 0;
    foreach($produto as $preco)
    {
        $total += $preco;
        echo "total: R$" .$total. "<br>";
    }
    ?>