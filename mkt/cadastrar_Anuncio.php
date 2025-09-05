<?php 
include "../databaseconnect.php"; 
		session_start();
        if (isset($_SESSION["CodMkt"]))
        {
            $CodMkt = $_SESSION["CodMkt"];
            $Nome = $_SESSION["Nome"];
        }
        else
        {
        
            header("location: logout.php");
            exit;
        
        }
        $sql = "select * from marketing where CodMkt = :CodMkt";
        $result = $conn -> prepare($sql);
        $result->bindValue(":CodMkt", $CodMkt);
        $result->execute();
        $linha = $result->fetch(PDO::FETCH_ASSOC);
        
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!--Multipurpose: Modelo grátis por FreeHTML5.co Autor: https://freehtml5.co Facebook: https://facebook.com/fh5co Twitter: https://twitter.com/fh5co -->
    <link rel="shortcut icon" href="../img/icone_site.png" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Título do documento -->
    <title>Mkt-Portal Feiras</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Bootstrap core CSS -->
  <link href="../adm/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../adm/user/css/heroic-features.css" rel="stylesheet">
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

<body>

<!--Inicio Menu-->
<?php include "menu.php"?>
<!--fim Menu-->

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Cadastrar Anúncio</h1> 
      <!--<p class="lead">Aqui você pode acessar a parte cadastro e visualizar feiras e muito mais.</p>-->
    </header>

    <!-- Page Features -->
    
<form action="cadastrar_Anuncio2.php" enctype="multipart/form-data" method="post">
                        
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Titulo:</label>
      <input required class="form-control"  name="titulo" type="text" id="titulo">
    </div>
   <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Link:</label>
      <input required class="form-control"  name="link" type="text" id="link">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Plano:</label>
           <select  class="form-control"  name="plano" id="plano">
        <option value="Mensal">Mensal</option>
        <option value="Semestre">Semestre</option>
        <option value="Anual">Anual</option>
    </select>
    </div>
        <div class="form-group col-md-3">
    <label for="formGroupExampleInput">Data Inicio:</label>
    <input required class="form-control date-mask"  name="datainicio" type="date" id="datainicio">
    </div>
        <div class="form-group col-md-3">
    <label for="formGroupExampleInput">Data Fim:</label>
    <input required class="form-control date-mask"  name="datafim" type="date" id="datafim" >
    </div>
  </div>

    <div class="form-row">
        <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Tamanho:</label>
      <select  class="form-control"  name="medida" id="medida">
        <option value="950x500 - Carrossel">950x500 - Carrossel</option>
        <option value="160x600 - Vertical">160x600 - Vertical</option>
        <option value="1000x160 - Horizontal">1000x160 - Horizontal</option>
    </select>
    </div>
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Página:</label>
      <select  class="form-control"  name="pagina" id="pagina">
        <option value="1">Página 1 - Carrossel</option>
        <option value="2">Página 2 - P. Agronegocio</option>
        <option value="3">Página 3 - P. Negocio</option>
        <option value="4">Página 4 - Feiras</option>
        <option value="5">Página 5 - Cem Feiras</option>
        <option value="6">Página 6 - Estados</option>
        <option value="7">Página 7 - Postagens</option>
        <option value="8">Página 8 - Mapa</option>

    </select>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
      <label for="inputEmail4">Imagem:</label></br>
      <p><input required type="file" id="imagem" name="imagem"></br></p>
      <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
     
    </div>
</div>


</form>    

          </div>
        </div>
        

    </div>
    <!-- /.row -->

  </div>
  <center>
        <a style="color:#9c3021" href="javascript: history.go(-1)">Voltar</a> 

  </center>


  <!-- /.container -->

 <!--RODAPE-->
 <?php include "rodape.php"?>
 <!--fim RODAPE-->

  <!-- Bootstrap core JavaScript -->
  <script src="../adm/user/vendor/jquery/jquery.min.js"></script>
  <script src="../adm/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
