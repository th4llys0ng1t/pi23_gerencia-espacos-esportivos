<?php include 'sessao/verificar_autenticado.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head> 

    <?php include 'base/head.php'?> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicite</title> 
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
      label{
        text-transform: uppercase;
        font-weight: bold;
      }
      .peba{
        margin-top: 120px;
      }
      

</style>

<body>
<?php include 'base/menu.php'?> 

<div class="peba">
    <form action="php_bd/p_solicitacoes_adicionar_bd.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br><br>
        <label for="matricula">Matricula:</label>
        <input type="text" name="matricula" id="matricula"><br><br>
        <label for="descricao">Descrição(justificativa):</label><br>
        <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea><br><br>
        <label for="hora_inicio">Hora do inicio do uso:</label>
        <input type="time" name="hora_inicio" id="hora_inicio">
        <label for="hora_fim">Hora do final de uso:</label>
        <input type="time" name="hora_fim" id="hora_fim"><br><br>
        <label for="data_inicio">Data de inicio do uso</label>
        <input type="date" name="data_inicio" id="data_inicio">
        <label for="data_final">Data de final do uso</label>
        <input type="date" name="data_final" id="data_final"><br><br>
        <label for="data_registro">Data de registro da solicitação:</label>
        <input type="date" name="data_registro" id="data_registro">
        <label for="hora_registro">Hora de registro da solicitação:</label>
        <input type="time" name="hora_registro" id="hora_registro"><br><br>
        <p>Selecione um espaço: <br>
            <?php 
                include "banco/conexao.php";
                $conn = conectar();
                $sql = "SELECT * FROM espacos";
                $resultado = $conn->query($sql);
                if ($resultado->num_rows > 0) {
                while($row = $resultado->fetch_assoc()) {
                    echo "<input type='radio' name='espaco' value='".$row["ID"]."' /> ".$row["NOME"]."<br />";

                }
                } else {
                    echo "Nenhum espaço cadastrado";
                }
            ?>
        </p>
        <input type="submit" value="Solicite" name="solicite">
    </form>  
    </div>


</body>
</html>