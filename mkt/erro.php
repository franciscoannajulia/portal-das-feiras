<?php 
include "../../databaseconnect.php"; 
        ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User-Portal Feiras e Eventos</title>
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
<style>
 .whatsapp-link {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 40px;
			right: 40px;
			background-color: #25d366;
			color: #fff;
			border-radius: 50px;
			text-align: center;
			font-size: 30px;
			box-shadow: 1px 1px 2px #888;
			z-index: 1000;
		}

		.fa-whatsapp {
			margin-top: 16px;
		}
</style>
</head>

<body oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>

 <!--Inicio Menu-->
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="home.php"><img src="../../images/logo/logo.png" width="120" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Voltar
              <span class="sr-only">(current)</span>
            </a>
          </li>
         
 	 <li class="nav-item">
            <a class="nav-link" href="../logout.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--fim Menu-->

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
    <div align="center"><img src="../../images/erro.png" width="200" style="aling:center;">
      <h1 class="display-3">OCORREU  UM ERRO!</h1></div>
      
      <?php
            
            
            if (isset ($_REQUEST["erro"]))
            {
                echo "<h3>".$_REQUEST ["erro"]."</h3>";
            
            }
            else
            {
                echo" &nbsp;&nbsp; <h3>Tente: Recarregar a página; Logar novamente; Verificar se os dados estão certos;</h3>";	  
            }
?>
    </header>

  </div>
  <!-- /.container -->

 <!--RODAPE-->
 <?php include "rodape.php"?>
 <!--fim RODAPE-->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
