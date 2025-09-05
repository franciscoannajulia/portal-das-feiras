<?php 
include "../../databaseconnect.php"; 
		session_start();
        if (isset($_SESSION["CodUsuario"]))
        {
            $CodUsuario = $_SESSION["CodUsuario"];
            $Nome = $_SESSION["Nome"];
        }
        else
        {
        
            header("location: logout.php");
        
        }
        $sql3 = "select * from usuario where CodUsuario = :CodUsuario";
        $result3 = $conn -> prepare($sql3);
        $result3->bindValue(":CodUsuario", $CodUsuario);
        $result3->execute();
        $linha3 = $result3->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!--Multipurpose: Modelo grátis por FreeHTML5.co Autor: https://freehtml5.co Facebook: https://facebook.com/fh5co Twitter: https://twitter.com/fh5co -->
    <link rel="shortcut icon" href="../../img/icone_site.png" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Título do documento -->
    <title>User-Portal das Feiras</title>
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
<?php
 if (isset($_REQUEST["id"]))	
  echo '<script>alert("SENHAS DIFERENTES!!")</script>'
 
?>
<!--Inicio Menu-->
<?php include "menu.php"?>
<!--fim Menu-->

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Cadastrar Usuario</h1>
      <!--<p class="lead">Aqui você pode acessar a parte cadastro e visualizar feiras e muito mais.</p>-->
    </header>

    <!-- Page Features -->
    
    <form action="cadastrar_Usuario2.php" method="post">                        

      <div class="form-row">
          <div class="form-group col-md-6">
          <label for="inputEmail4">Nome Completo:</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="">
          </div>
          <div class="form-group col-md-6">
          <label for="inputPassword4">E-mail:</label>
          <input  type="email" class="form-control" id="email" name="email" placeholder="">
          </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-4">
          <label for="inputCity">Usuario:</label>
          <input  type="text" class="form-control" id="login" name="login">
          </div>
          <div class="form-group col-md-4">
          <label for="inputCity">Senha:</label>
          <input type="password" class="form-control" id="senha1" name="senha1">
          </div>
          <div class="form-group col-md-4">
          <label for="inputState">Digite Novamente:</label>
          <input  type="password" class="form-control" id="senha2" name="senha2" placeholder="">
          </select>
          </div>
      </div>
                   
                      <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>    

          </div>
        </div>
        

    </div>
    <!-- /.row -->

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
