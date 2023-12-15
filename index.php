<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerencia Esportiva</title>
    <link rel="stylesheet" href="src/CSS/style2.css">
    <link rel="stylesheet" href="src/CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <style>

      .card {
        background-color: #0f7a0f;
        color: #ffff;
      }
        
    </style>
</head>
<body>
    <header>
        
      <nav class="col-md col-xl navbar navbar-expand-lg navbar-dark " id = "navbar">
        <div class="container-fluid">
            <a class="logonav" href="index.php"><img src="src/IMG/logo.png" width="90" height="auto" alt="ifrn"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item" style = "margin: 20px;">
                <a class="nav-link" href="cadastro.php">CADASTRO</a>
              </li>
              <li class="nav-item" style = "margin: 20px;">
                <a class="nav-link" href="autenticacao.php">LOGIN</a>
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
          <img src="src/IMG/campus.jpg" class="card-img-top" alt="quadra">
          <div class="card-body">
          </a>  <p class="card-text"><center>GÍNASIO</center></p>
          </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-3" >
          <a href="#">
          <div class="card" style="width: 18rem;">
            <img src="src/IMG/campus.jpg" class="card-img-top" alt="volei">
            <div class="card-body">
            </a> <p class="card-text"><center>QUADRA DE AREIA</center></p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-xl-3" >
          <a href="#">
            <div class="card" style="width: 18rem;">
              <img src="src/IMG/campus.jpg" class="card-img-top" alt="piscina">
              <div class="card-body">
              </a> <p class="card-text"><center>PISCINA</center></p>        
              </div>  
            </div>
          </div>

          <div class="col-md-6 col-xl-3" >
            <a href="#">
              <div class="card" style="width: 18rem;">
                <img src="src/IMG/campus.jpg" class="card-img-top" alt="piscina">
                <div class="card-body">
                </a> <p class="card-text"><center>SALA DE JOGOS</center></p>        
                </div>  
              </div>
            </div>

            <div class="col-md-6 col-xl-3" >
            <a href="#">
              <div class="card" style="width: 18rem;">
                <img src="src/IMG/campus.jpg" class="card-img-top" alt="piscina">
                <div class="card-body">
                </a> <p class="card-text"><center>SALA DE MÚSICA</center></p>        
                </div>  
              </div>
            </div>

            <div class="col-md-6 col-xl-3" >
            <a href="#">
              <div class="card" style="width: 18rem;">
                <img src="src/IMG/campus.jpg" class="card-img-top" alt="piscina">
                <div class="card-body">
                </a> <p class="card-text"><center>ACADEMIA</center></p>        
                </div>  
              </div>
            </div>

            <div class="col-md-6 col-xl-3" >
            <a href="#">
              <div class="card" style="width: 18rem;">
                <img src="src/IMG/campus.jpg" class="card-img-top" alt="piscina">
                <div class="card-body">
                </a> <p class="card-text"><center>SALA DE LUTAS</center></p>        
                </div>  
              </div>
            </div>

            <div class="col-md-6 col-xl-3" >
            <a href="#">
              <div class="card" style="width: 18rem;">
                <img src="src/IMG/campus.jpg" class="card-img-top" alt="piscina">
                <div class="card-body">
                </a> <p class="card-text"><center>SALA DE ARTES</center></p>        
                </div>  
              </div>
            </div>
        </div>
    </center>
    
    <footer class="rodape" id="contato">
    <div class="rodape-div">

        <div class="rodape-div-1">
            <div class="rodape-div-1-coluna">
                <!-- elemento -->
                <span><a class="logo" href="index.php"><img src="src/IMG/logo.png" width="70" height="auto" alt="ifrn"></a></span>
                <p>160 BR-101, S/N - Areia Branca, </br>Canguaretama - RN, 59190-000</p>
            </div>
        </div>

        <div class="rodape-div-2">
            <div class="rodape-div-2-coluna">
                <!-- elemento -->
                <span><b>Contatos</b></span>
                <p>ifrn@gmail.com</p>
                <p>+55 (84) 99999-9999</p>
            </div>
        </div>

        <div class="rodape-div-3">
            <div class="rodape-div-3-coluna">
                <!-- elemento -->
                <span><b>Links</b></span>
                <p><a href="https://portal.ifrn.edu.br/servicos/">Serviços</a></p>
                <p><a href="https://portal.ifrn.edu.br/campus/canguaretama/">Instituto</a></p>
                <p><a href="https://portal.ifrn.edu.br/">Sobre</a></p>
            </div>
        </div>

        <div class="rodape-div-4">
            <div class="rodape-div-4-coluna">
                <!-- elemento -->
                <span><b>Outros</b></span>
                <p>Políticas de Privacidade</p>
            </div>
        </div>

    </div>
    <p class="rodape-direitos">Copyright © 2023 – Todos os Direitos Reservados ao IFRN.</p>
</footer>
 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

       
</body>
</html>