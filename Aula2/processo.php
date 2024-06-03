<?php
$nome = isset($_POST['nome'])? $_POST['nome']: 'Anonimo';
$email = $_POST['email'] ?? 'Não informado';
$idade = $_POST['idade'] ?? 'Não informado';

// armazenamento dados em um array
$usuario = [
    'nome' => $nome,
    'email'=> $email,
    'idade'=> $idade
];
//funcao para dar boas vindas
function saudacao($nome) {
    return "Ola $nome, seja bem-vindo ao nosso sitema";
}

//exibindo uma messagem de boas vindas 

echo saudacao($usuario['nome']) . "<br>";
echo " aqui estão os detalhes do seu cadastro: <br>";
echo "Nome: " . $usuario['nome']. "<br>";
echo "Email: ". $usuario['email'] . "<br>";
echo "Idade: ". $usuario['idade'] . "<br>";

?>