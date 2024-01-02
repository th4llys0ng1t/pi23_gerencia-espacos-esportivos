<!DOCTYPE html>
<html lang="en">
<head>
    <title> Senha de Adm</title> 
    <?php include "base/head.php"?>  
    <br><br> 
    <br><br> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="src/CSS/style2.css">
    <link rel="stylesheet" href="src/CSS/style.css">
</head>

<body> 
    <?php include 'base/menu.php'?>

    <h2>Por favor, insira a senha de administrador para acessar a área de espaços:</h2>
    <form action="verificar_senha.php" method="post">
        Senha: <input type="password" name="senha">
        <input type="submit" value="Acessar">
    </form>
</body>
</html>