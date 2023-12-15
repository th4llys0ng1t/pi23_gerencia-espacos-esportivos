<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "base/head.php"?>
    <title>Gerencia Esportiva</title>
    <link rel="stylesheet" href="src/CSS/style2.css">
    <link rel="stylesheet" href="src/CSS/style.css">
    <?php

    
    ?>
   
  <style>
    .area-login{
      margin-top: 30px;
      padding: 70px;
      background-color: #ffff;
      justify-content: center;
      align-items: center;
      height: 70vh;
      justify-content: center;
      align-items: center;
    }
    
    .login{
      margin-top: 50px;
      display: flex;
      flex-direction: column;
      align-items: center;
      border-radius: 15px;
      width: 355px;
      height: 420px;
      padding: 35px;
    }

    .login form{
      display: flex;
      width:350px;
      border-radius:15px;
      flex-direction: column;
    }

    form{
      background-color: rgb(43, 40, 40);
    }
    
    form [type="submit"]{
      background-color: #0f7a0f;
      text-transform: uppercase;
      font-weight: bold;
      color: white;
    }
    
    .login img{
      margin-top: -50px;
    }
  </style>
</head>
<body>
   
    <?php include 'base/menu.php'?>
    <center>
      <section class="area-login">
        <div class="login">
            <div>
                <img src="src/IMG/logo.png" width="100">
            </div>
            <form method="post">
                <input type="text" name="nome" placeholder="Matrícula" autofocus>
                <input type="password" name="senha" placeholder="Senha" autofocus>
                <input type="submit" name="entrar">
            </form>
        </div>
    </center>
    </div>
 

    <?php include 'base/rodape.php'?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>