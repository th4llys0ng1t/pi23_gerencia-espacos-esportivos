<?php include 'sessao/verificar_autenticado.php'; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Espaços</title>
</head>
<body>
    <h3>Espaços</h3>
    <a class="nav-link" href="p_espacos_adicionar.php">Adicionar</a><br><br>

    <tr>
        <th>Nome</th>
        <th>Editar</th>
        <th>Remover</th>
    </tr><br>
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