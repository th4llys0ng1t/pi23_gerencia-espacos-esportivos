<?php

function conectar()
{
    $servidor = "localhost";
    $usuario = "2023_info4_pi_ger_esportivo";
    $senha ="geresp1234";
    $banco = "2023_info4_pi_ger_esportivo";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conn->connect_error) {
        die("a conexão falhou!" . $conn->connect_error);
    }

    return $conn;
}

function desconectar($conn){
    $conn->close();
}
