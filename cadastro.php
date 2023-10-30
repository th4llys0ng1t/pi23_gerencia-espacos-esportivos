<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerencia Esportiva</title>
    <link href="stylesheet" rel="style2.css">
    <link href="stylesheet" rel="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
    <style>
        body{
            margin: 20px;
            background-color: #252c3a;
            font-family: Arial, Helvetica, sans-serif;
            overflow: hidden;
        }
        .area-login{
            display: flex;
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
            background-color: #23232e;
            border-radius: 15px;
            width: 355px;
            height: 420px;
            padding: 35px;
        }
        .login form{
            display: flex;
            width: 100%;
            flex-direction: column;
        }
        .login input{
            margin-top: 10px;
            background-color: #ffff;
            padding-left: 10px;
            color: black;
            border: none;
            height: 35px;
            outline: none;
            border-radius: 8px;
        }
        .login img{
            width: 95px;
            height: auto;
        }
        .login::placeholder{
            color: black;
            font-size: 14px;
            
        }
    
         #navbar{
             position: absolute ;
             top: 0;
             left: 0;
            width: 100%;
    height: 100px;
    background-color: rgb(43, 40, 40);
  }

  .ul{
  list-style: none;
  display: flex;
  align-items: center;
  height: 100%;
  margin: 0;
}

.li{
  margin-right: 10px;
}
        form [type="submit"]{
            display: block;
            background-color: #0772EB;
            font-size: 20px;
            text-transform: uppercase;
            font-weight: bold;
            color: #ffff;
            cursor: pointer;
        }
        p{
            color: #ffff;
        }
        a{
            color: #0772EB;
            text-decoration: none;
            margin-left: 5px;
        }
    </style>
</head>
<body>
<nav class="col-md col-xl navbar navbar-expand-lg navbar-dark " id = "navbar">
        <div class="container-fluid">
            <a class="logonav" href="index.php"><img src="../img/logo.png" width="90" height="auto" alt="ifrn"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item" style = "margin: 20px;">
                <a class="nav-link" href="#">ÁREAS ESPORTIVAS</a>
              </li>
              <li class="nav-item" style = "margin: 20px;">
                <a class="nav-link" href="#">CADASTRO</a>
              </li>
              <li class="nav-item" style = "margin: 20px;">
                <a class="nav-link" href="#">LOGIN</a>
              </li>
              <li class="nav-item" style = "margin: 20px;">
                <a class="nav-link" href="#">PERFIL</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Digite sua busca" aria-label="Search">
              <button class="btn btn-dark" type="submit">Buscar</button>
            </form>
            
          </div>
        </div>
      </nav>
    <section class="area-login">
        <div class="login">
            <div>
                <img src="imagens/logo2_1.png">
            </div>
            <form>
               
                <input type="text" name="nome" placeholder="Email" autofocus>
                <input type="text" name="nome" placeholder="Confirme seu email" autofocus>
                <input type="password" name="senha" placeholder="Senha" autofocus>
                <input type="password" name="senha" placeholder="Confirme sua senha" autofocus>
                <input type="submit" value="entrar">
            </form>
           
        </div>

    </section>
    <footer>
        <br/>
          <p><center>Copyright &copy Hermes Bookstore - IFRN Cang 2023</center></p>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>