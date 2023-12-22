<?php include 'sessao/verificar_autenticado.php'; ?> 

<?php
$id = $_GET["id"];
include "banco/conexao.php";

$conn = conectar();  
$sql = "SELECT * FROM espacos where id=$id";
$result = $conn->query($sql);

desconectar($conn);

?>  

<!DOCTYPE html>
<html lang="en">

<head>
    
    <title> Espaços </title>
</head>
<body>
    
</body> 

</html>


