
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
 <div class="container">
      <a class="navbar-brand" href="home.php" style="color: black;padding:2px"><img src="../../img/icone_site.png" width="25" style="margin:2px;padding:2px">PORTAL DAS FEIRAS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Inicio
              <span class="sr-only">(current)</span>
            </a>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cadastrar
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="cadastrar_Usuario.php">Usúario</a>
            <a class="dropdown-item" href="cadastrar_Postagem.php">Postagens</a>
            </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Ver
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="equipe.php">Equipe</a>
            <a class="dropdown-item" href="ver_Postagens.php">Postagens</a>
            <a class="dropdown-item" href="ver_Cemfeiras.php">Cem Feiras</a>
            </div>
            </li>

           <li class="nav-item">
            <a class="nav-link" href="perfil_Usuario.php"> <?php echo "@".$linha3["Usuario"]?></a>
          </li>
 	    <li class="nav-item">
            <a class="nav-link" href="../logout.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>