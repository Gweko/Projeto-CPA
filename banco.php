<?php

include_once("config.php");

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);


$digite = filter_input (INPUT_POST, 'digite', FILTER_SANITIZE_STRING);

echo "Nome: $nome <br>";
echo "Digite: $digite <br>";

if($conn->connect_errno)
{
    echo "Erro"; 
}

else
{
    echo "Seu Formulário foi enviado com sucesso. Volte a guia principal aqui: https://www.youtube.com/watch?v=NyUTYwZe_l4";
}

$result_requerimento = "INSERT INTO requerimentos(nome, created,digite) VALUES ('$nome','$digite')";
$resultado_requerimento = mysqli_query($conn, $result_requerimento);
?>