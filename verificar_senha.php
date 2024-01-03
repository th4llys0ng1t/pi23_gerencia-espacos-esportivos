<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $senha_certa = "senha12345";
        $senha_digitada = $_POST["senha"];

        if ($senha_digitada == $senha_certa) {
            header("Location: p_espacos.php ");
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } 
?> 

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

    <a class="nav_link" href="senha.php"> Tentar novamente</a><br><br>
    
</body>
</html>