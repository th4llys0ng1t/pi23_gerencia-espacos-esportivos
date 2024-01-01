<?php include 'sessao/verificar_autenticado.php'; ?> 

<?php

    $id = $_GET["id"];

    include "banco/conexao.php";
    
    $conn = conectar();
    
    $sql = "SELECT * FROM espacos where ID=$id";
    
    $resultado = $conn->query($sql);
    
    if ($resultado->num_rows > 0) {
      while($row = $resultado->fetch_assoc()) {
        $nome_espaco = $row["NOME"];
      }
    } else {
      echo "<td>Nenhuma área cadastrada</td><td></td><td></td>";
    }
    
    desconectar($conn);

?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "base/head.php"?> 

    <title>Edite os espaços</title> 
    <link rel="stylesheet" href="src/CSS/style2.css">
    <link rel="stylesheet" href="src/CSS/style.css">
</head>
<style>
    form [type="submit"]{
        background-color: #0f7a0f;
        text-transform: uppercase;
        font-weight: bold;
        color: white;
      }
</style>
<body> 
    
    <br> <br> <br> <br>
    <h2>Edição de espaços</h2>
    <form action="php_bd/p_espacos_editar_bd.php" method="post">
        <label for="nome_espaco_editado">Nome do espaço:</label>
        <input type="text" name="nome_espaco_editado" id="nome_espaco_editado" value="<?php echo $nome_espaco; ?>">
        <input type="hidden" name="id_espaco_editado" value="<?php echo $id; ?>">
        <input type="submit" name="editar" value="Edite"> 
    </form> 
  
</body> 

</html>


