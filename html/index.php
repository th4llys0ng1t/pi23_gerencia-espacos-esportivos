<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerencia Esportiva</title>
    <!--<link rel="stylesheet" href="navbar.css">-->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>

body{
    margin: 20px;
    padding: 0;
    font-family: 'Inter', sans-serif;
    background-color: rgb(43, 40, 40);
}

  p{
   background-color: #2c3547;
    color: #ffff;
  }
  #navbar{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 90px;
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

  .row{
    margin-top: 40px;
    padding: 70px;
    background-color: #ffff;
  }
  
  .card {
    background-color: #0f7a0f;
    color: #ffff;
  }
  form [type="submit"]{
    background-color: #0f7a0f;

  }
  a {
    color: #ffff;
    text-decoration: none;
    transition: 0.3s;
  }
    </style>
</head>
<body>
    <header>
        
      <nav class="col-md col-xl navbar navbar-expand-lg navbar-dark " id = "navbar">
        <div class="container-fluid">
            <a class="logonav" href="#"><img src="../img/logo.png" width="90" height="auto" alt="ícone de livro"></a>
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
       
       
       <center>
        <div class="row">

        <div class="col-md-6 col-xl-3" >
          <a href="#">
          <div class="card" style="width: 18rem;">
          <img src="../img/campus.jpg" class="card-img-top" alt="quadra">
          <div class="card-body">
          </a>  <p class="card-text"><center>QUADRA</center></p>
          </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-3" >
          <a href="#">
          <div class="card" style="width: 18rem;">
            <img src="../img/campus.jpg" class="card-img-top" alt="volei">
            <div class="card-body">
            </a> <p class="card-text"><center>QUADRA DE VÔLEI</center></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-3" >
          <a href="#">
            <div class="card" style="width: 18rem;">
              <img src="../img/campus.jpg" class="card-img-top" alt="piscina">
              <div class="card-body">
              </a> <p class="card-text"><center>PISCINA</center></p>        
              </div>  
            </div>
          </div>

          <div class="col-md-6 col-xl-3" >
            <a href="#">
              <div class="card" style="width: 18rem;">
                <img src="../img/campus.jpg" class="card-img-top" alt="piscina">
                <div class="card-body">
                </a> <p class="card-text"><center>SALA DE JOGOS</center></p>        
                </div>  
              </div>
            </div>
  
        </div>
    </center>
        <footer>
          <br/>
          <br/>
          <br/>
            <p><center>Copyright &copy Gerencia Esportiva - IFRN Cang 2023</center></p>
        </footer>
 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

       
</body>
</html>