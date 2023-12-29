<<<<<<< HEAD
<?php 

    






?>
=======
<?php

$id = $_GET["id"];

include "../banco/conexao.php";

$conn = conectar();  

$sql = "DELETE FROM espacos WHERE ID=$id;"; 

$resultado = $conn->query($sql); 

if($resultado){
    desconectar($conn);
    header("Location: ../p_solicitacoes.php");
    die();

}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}
>>>>>>> 822db47f38d61cfce8c59dd1a857ee14eec411b8
