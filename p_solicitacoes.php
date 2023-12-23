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
<body>
    <h2>Solicitações</h2>
    <a class="nav-link" href="p_solicitacoes_adicionar.php">Adicionar</a><br><br>

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
          echo "<td>".$row["NOME"]."</td>";
          echo "<td><a href='p_solicitacoes_editar.php?codigo=".$row["ID"]."'>EDITAR</a></td>";
          echo "<td><a href='php/p_solicitacoes_remover_bd.php?codigo=".$row["ID"]."'>REMOVER</a></td>";
          echo "</tr>";
        }
      }else{
        echo "<td>Nenhum núcleo cadastrado</td><td></td><td></td>";
      }

      desconectar($conn);

?>
</body>
</html>