<?php 

    $id = $_GET["id"];

    include "../banco/conexao.php";

    $conn = conectar();

    $sql = "DELETE FROM solicitacoes WHERE ID=$id;";
    
    $resultado = $conn->query($sql);

    if($resultado){
        desconectar($conn);
        header("Location: ../p_solicitacoes.php");
        die();
    }else{
        desconectar($conn);
        echo "<p>Problema</p>";
    }

?>
