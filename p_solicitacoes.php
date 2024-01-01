<?php include 'sessao/verificar_autenticado.php'; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Solicitações</title> 
    <?php include "base/head.php"?>
    <link rel="stylesheet" href="src/CSS/style2.css">
    <link rel="stylesheet" href="src/CSS/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
   h2{
    margin-top: 120px;
    background-color: #0f7a0f;
        width: 500px;
        height: 80px;
        align-items: center;
        justify-content: center;
        color: #ffff;
        border-radius: 20px;
  }
  .nav_link{
        text-decoration: none;
        font-size: 25px;
        color: black;
    }
</style>
<body>
<?php include 'base/menu.php'?>

    <h2><center>Solicitações</center></h2>
    <a class="nav_link" href="p_solicitacoes_adicionar.php">Adicionar</a><br><br>

    <tr>
        <th>Nome</th>
        <th>Editar</th>
        <th>Remover</th>
    </tr><br>

    <?php

      include "banco/conexao.php";

      $conn = conectar();

      $sql = "SELECT * FROM solicitacoes";

      $resultado = $conn->query($sql);

      if ($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc()) {
          echo "<tr>";  
          echo "<td>".$row["NOME"]."</td> ";
          echo "<td><a href='p_solicitacoes_editar.php?id=".$row["ID"]."'>EDITAR</a></td> ";
          echo "<td><a href='php_bd/p_solicitacoes_remover_bd.php?id=".$row["ID"]."'>REMOVER</a></td> ";
          echo "</tr><br>";
        }
      }else{
        echo "<td>Nenhuma solicitação feita</td><td></td><td></td>";
      }

      desconectar($conn);

?>
</body>
</html>