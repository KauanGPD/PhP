<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <?php
        //array com chave => Valor
        $listaAlunoIdade = array(
            "leonardo" => 31,
            "gabriela" => 27,
            "bianca" => 07
        );

        //array apenas valor
        $listaCores = array(
            "vermelho",
            "amarelo",
            "laranja",
            "verde"
        );

        //acesso ao item do array $listaAulaIdade[Chave]
        echo $listaAlunoIdade["leonardo"];
        
        echo "<br />";
        
        echo $listaCores[2];

        echo "<br />";

        //exibir em tela todo o conteudo (chave e valor) de um array var_dump(array;);
        var_dump($listaAlunoIdade);

        echo "<br />";

        var_dump($listaCores);

        ?>
</body> 
</html>