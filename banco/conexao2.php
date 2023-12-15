<?php

function conectar(){
    
    $servidor = "localhost";
    $usuario = "root";
    $senha ="123";
    $banco = "projeto_gerenciamento_espaços_esportivos";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conn->connect_error) {
        die("a conexão falhou!" . $conn->connect_error);
    }

    $usuarioc=$_POST['usuario'];
    $emailc=$_POST['email'];
    $senhac=$_POST['senha'];
    $matriculac=$_POST['matricula'];
    $sql = "INSERT INTO administrador (EMAIL, MATRICULA, USUARIO, SENHA)
    VALUES ('$emailc', '$matriculac',' $usuarioc','$senhac')";

    if($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Location: ../php/autenticacao.php');
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    return $conn;
}

function desconectar($conn){
    $conn->close();
}
