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
        $data_registro = $row["DATA_REGISTRO"];
        $hora_registro = $row["HORA_REGISTRO"];
        $id_espaco = $row["ID_ESPACO"];
    }
    } else {
    echo "<td>Nenhuma área cadastrada</td><td></td><td></td>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitações</title>
</head>
<body>
    <h2>Cadastro de solicitações</h2>
    <form action="php_bd/p_solicitacoes_editar_bd.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?php echo $nome ?>">
    </form>
    
</body>
</html>
