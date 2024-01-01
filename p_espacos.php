<?php include 'sessao/verificar_autenticado.php'; ?> 

<!DOCTYPE html>
<html lang="en">
<head> 

    <?php include "base/head.php"?>  
    <br><br> 
    <br><br>
    <title>Espaços</title>  
    <link rel="stylesheet" href="src/CSS/style2.css">
    <link rel="stylesheet" href="src/CSS/style.css">
</head>
<style>
  h2{
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
  
    <h2><center>Espaços</center></h2>
    <a class="nav_link" href="p_espacos_adicionar.php">Adicionar</a><br><br>

    <tr>
        <th>Nome</th>
        <th>Editar</th>
        <th>Remover</th>
    </tr><br>  
    </br>


</body> 

<?php 
    include "banco/conexao.php";

    $conn = conectar();
    
    $sql = "SELECT * FROM espacos";
    
    $resultado = $conn->query($sql);
    
    if ($resultado->num_rows > 0) {
      while($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["NOME"]."</td>  ";
        echo "<td><a href='p_espacos_editar.php?id=".$row["ID"]."'>EDITAR</a></td>  ";
        echo "<td><a href='php_bd/p_espacos_remover_bd.php?id=".$row["ID"]."'>REMOVER</a></td>";
        echo "</tr><br>";
      }
    } else {
      echo "<td>Nenhuma área cadastrada</td><td></td><td></td>";
    }
    
    desconectar($conn);
?>
    
</html>