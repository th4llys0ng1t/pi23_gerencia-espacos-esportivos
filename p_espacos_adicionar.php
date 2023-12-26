<?php include 'sessao/verificar_autenticado.php'; ?> 

<!DOCTYPE html>
<html lang="en">
<head> 

    <?php include 'base/head.php'?> 
    <title>Adicione espaços</title> 
    <link rel="stylesheet" href="src/CSS/style2.css">
    <link rel="stylesheet" href="src/CSS/style.css"> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body> 

    <form action="php_bd/p_espacos_adicionar_bd.php" method="post">
        <div>
            <label for="nome_espaco">Nome do espaço:</label>
            <input type="text" name="nome_espaco" id="nome_espaco" placeholder="Nome do espaço" autofocus><br><br>
            <input type="submit" name="cadastrar" value="Cadastre">
        </div>
    </form> 

    <?php include 'base/rodape.php'?>
</body> 
    
</html>