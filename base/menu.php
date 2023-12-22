<nav class="col-md col-xl navbar navbar-expand-lg navbar-dark " id = "navbar">
        <div class="container-fluid">
            <a class="logonav" href="index.php"><img src="src/IMG/logo.png" width="90" height="auto" alt="ifrn"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              

              <?php
                 
                if(session_id() == '')
                  session_start();
                if(isset($_SESSION["matricula"])){
              ?>
                  <li class="nav-item" style = "margin: 20px;">
                    <a class="nav-link" href="areas_esportivas.php">ÁREAS ESPORTIVAS</a>
                  </li>
                  <li class="nav-item" style = "margin: 20px;">
                    <a class="nav-link" href="perfil.php">PERFIL</a>
                  </li>
                  <li class="nav-item" style = "margin: 20px;">
                    <a class="nav-link" href="sessao/remover_sessao.php">SAIR</a>
                  </li>
              
              <?php 
                }else{
              ?>

                <li class="nav-item" style = "margin: 20px;">
                  <a class="nav-link" href="cadastro.php">CADASTRO</a>
                </li>
                <li class="nav-item" style = "margin: 20px;">
                  <a class="nav-link" href="autenticacao.php">LOGIN</a>
                </li>

              <?php 
                }
              ?>

            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Digite sua busca" aria-label="Search">
              <button class="btn btn-dark" type="submit">BUSCAR</button>
            </form>
            
          </div>
        </div>
      </nav>