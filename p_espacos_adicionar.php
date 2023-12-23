<?php include 'sessao/verificar_autenticado.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Adicione espaços</title>
</head>
<body>
    <form action="php_bd/p_espacos_adicionar_bd.php" method="post">
        <div>
            <label for="nome_espaco">Nome do espaço:</label>
            <input type="text" name="nome_espaco" id="nome_espaco" placeholder="Nome do espaço" autofocus><br><br>
            <input type="submit" name="cadastrar" value="Cadastre">
        </div>
    </form>
</body> 
    
</html>