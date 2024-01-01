<?php include 'sessao/verificar_autenticado.php'; ?>

<?php

    $id = $_GET["id"];

    include "banco/conexao.php";

    $conn = conectar();

    $sql = "SELECT * FROM solicitacoes where ID=$id";

    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $nome = $row["NOME"];
        $matricula = $row["MATRICULA"];
        $descricao = $row["DESCRICAO"];
        $data_inicio = $row["DATA_INICIO"];
        $hora_inicio = $row["HORA_INICIO"];
        $data_fim = $row["DATA_FIM"];
        $hora_fim = $row["HORA_FIM"];
        $espaco = $row["ID_ESPACO"];
    }
    } else {
        echo "<td>Nenhuma solicitação feita </td><td></td><td></td>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitações</title>
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
</style>
<body>
    
    <h2>Cadastro de solicitações</h2>
    <form action="php_bd/p_solicitacoes_editar_bd.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome ?>"><br><br>
        <label for="matricula">Matricula:</label>
        <input type="text" name="matricula" id="matricula" value="<?php echo $matricula ?>"><br><br>
        <label for="descricao">Descricão(justificativa):</label><br>
        <textarea name="descricao" id="descricao" cols="30" rows="10"><?php echo $descricao ?></textarea><br><br>
        <label for="hora_inicio">Hora do inicio do uso:</label>
        <input type="time" name="hora_inicio" id="hora_inicio" value="<?php echo $hora_inicio ?>">
        <label for="hora_fim">Hora do final de uso:</label>
        <input type="time" name="hora_fim" id="hora_fim" value="<?php echo $hora_fim ?>"><br><br>
        <label for="data_inicio">Data de inicio do uso</label>
        <input type="date" name="data_inicio" id="data_inicio" value="<?php echo $data_inicio ?>">
        <label for="data_fim">Data de final do uso</label>
        <input type="date" name="data_fim" id="data_fim" value="<?php echo $data_fim ?>"><br><br>
        <p>Selecione um espaço: <br>
            <?php 
                $sql = "SELECT * FROM espacos";
                $resultado = $conn->query($sql);
                if ($resultado->num_rows > 0) {
                while($row = $resultado->fetch_assoc()) {
                    echo "<input type='radio' name='espaco' value='".$row["ID"]."'";
                    //Verificar se foi a área selecionada
                    if($row["ID"] == $espaco){
                        echo " checked ";
                    }
                    
                    echo "/> ".$row["NOME"]."<br />";
                }
                } else {
                echo "Nenhuma área cadastrada";
                }
            ?>
        </p>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="editar" value="Edite">
    </form>
    
</body>
</html>
