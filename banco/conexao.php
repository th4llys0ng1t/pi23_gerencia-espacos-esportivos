<?php

function conectar()
{
    $servidor = "localhost";
    $usuario = $_POST['nome'];
    $senha =$_POST['senha'];
    $banco = "projeto_gerenciamento_espaços_esportivos";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conn->connect_error) {
        die("a conexão falhou!" . $conn->connect_error);

    }

    return $conn;
}

function desconectar($conn){
    $conn->close();
}
