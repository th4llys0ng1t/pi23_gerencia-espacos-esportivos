<?php

function conectar()
{
    $servidor = "localhost";
    $usuario = "root";
    $senha ="123";
    $banco = "projeto_gerenciamento_espaços_esportivos";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conn->connect_error) {
        die("a conexão falhou!" . $conn->connect_error);

    }else {
        header('Location: ../php/perfil.php');
    }

    return $conn;
}

function desconectar($conn){
    $conn->close();
}
