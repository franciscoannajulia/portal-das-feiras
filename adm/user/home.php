<?php 
    include("../../databaseconnect.php");
		session_start();
        if (isset($_SESSION["CodUsuario"]))
        {
            $CodUsuario = $_SESSION["CodUsuario"];
            $Nome = $_SESSION["Nome"];
        }
        else
        {
        
            header("Location: logout.php");
        
        }
        $sql3 = "select * from usuario where CodUsuario = :CodUsuario";
        $result3 = $conn -> prepare($sql3);
        $result3->bindValue(":CodUsuario", $CodUsuario);
        $result3->execute();
        $linha3 = $result3->fetch(PDO::FETCH_ASSOC);
        ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>User-Portal Feiras</title>
  <link rel="shortcut icon" href="../../img/icone_site.png" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>

 <!--Inicio Menu-->
<?php include "menu.php"?>
<!--fim Menu-->

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Bem-Vindo <?php echo $Nome?>!</h1>
      <p class="lead">Aqui você pode acessar a parte cadastro e visualizar feiras e muito mais.</p>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Cadastrar</h4>
            <p class="card-text">Aqui você pode realizar as postagens do site.</p>
          </div>
          <div class="card-footer">
            <a href="cadastrar_Postagem.php" class="btn btn-primary">Ir</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Visualizar</h4>
            <p class="card-text">Aqui você pode visualizar as postagens, editar ou apagar.</p>
          </div>
          <div class="card-footer">
            <a href="ver_Postagens.php" class="btn btn-primary">Ir</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Perfil</h4>
            <p class="card-text">Aqui você tem acesso aos seus dados de usúario.</p>
          </div>
          <div class="card-footer">
            <a href="perfil_Usuario.php" class="btn btn-primary">Ir</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title">Novo Usúario</h4>
            <p class="card-text">Aqui você cadastra novos usúarios.</p>
          </div>
          <div class="card-footer">
            <a href="cadastrar_Usuario.php" class="btn btn-primary">Ir</a>
          </div>
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
