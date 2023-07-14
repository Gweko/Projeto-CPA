<?php

include_once("config.php");

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input (INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

echo "Nome: $nome <br>";
echo "Senha: $senha <br>";

if($conn->connect_errno)
{
    echo "Erro"; 
}

else
{
    echo "Seu Formulário foi enviado com sucesso. Volte a guia principal aqui: https://www.youtube.com/watch?v=NyUTYwZe_l4";
}

$result_requerimento = "INSERT INTO criação(nome, email, senha) VALUES ('$nome','$email','$senha')";
$resultado_requerimento = mysqli_query($conn, $result_requerimento);
?>