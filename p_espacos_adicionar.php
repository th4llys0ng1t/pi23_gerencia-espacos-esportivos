<?php include 'sessao/verificar_autenticado.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADICIONE OS ESPAÇOS</title>
    </style>
</head>
<body>
    
    <form action="php_bd/p_espacos_adicionar" method="post">
        <div>
            <input type="number" name="id_espaco" placeholder="Id do espaço" autofocus><br>
            <input type="text" name="nome_espaco" placeholder="Nome do espaço" autofocus><br>
            <input type="submit" name="cadastrar" value="Cadastre">
        </div>
    </form>
</body> 
    
</html>