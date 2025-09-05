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

<!--Inicio Menu-->
<?php include "menu.php"?>
<!--fim Menu-->

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Cadastrar Postagem</h1>
      <!--<p class="lead">Aqui você pode acessar a parte cadastro e visualizar feiras e muito mais.</p>-->
    </header>

    <!-- Page Features -->
    
<form action="cadastrar_Postagem2.php" enctype="multipart/form-data" method="post">
                        
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Titulo:</label>
      <input required class="form-control"  name="titulo" type="text" id="titulo">
    </div>
   <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Periocidade:</label>
      <input required class="form-control"  name="periocidade" type="text" id="periocidade" >
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">País:</label>
      <input required class="form-control"  name="pais" type="text" id="pais" >
    </div>
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Estado: <span style="color:red">**(Se for do Brasil, abreviar, ex: SP)</span></label>
      <input required class="form-control"  name="estado" type="text" id="estado">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Cidade:</label>
      <input required class="form-control"  name="cidade" type="text" id="cidade">
    </div>
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Bairro:</label>
      <input required class="form-control"  name="bairro" type="text" id="bairro">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Endereço(com Nº):</label>
      <input required class="form-control"  name="endereco" type="text" id="endereco">
    </div>
   <div class="form-group col-md-6">
      <label for="formGroupExampleInput">CEP:</label>
      <!-- permitindo apenas numeros -->
<input required class="form-control"  id="cep" name="cep" type="text" 
   onkeypress="return event.charCode >= 48 && event.charCode <= 57">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Local:</label>
      <input required class="form-control"  name="local" type="text" id="local">
    </div>
   <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Site:</label>
      <input required class="form-control"  name="site" type="text" id="site" >
    </div>
  </div>

  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Categoria:</label></br>
       <input required class="form-control"  name="categoria" type="text" id="categoria">
    </div>
     <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Segmento(alimento, tecnologia, vestuario)*pode ser mais de uma:</label>
      <input required class="form-control" name="segmento" type="text" id="segmento" >
<div class="form-check form-check-inline">
  <input required class="form-check-input" type="radio" name="tipo" id="tipo" value="Agronegocio">
  <label class="form-check-label" for="inlineRadio1">Agronegocio</label>
</div>
<div class="form-check form-check-inline">
  <input required class="form-check-input" type="radio" name="tipo" id="tipo" value="Negócio">
  <label class="form-check-label" for="inlineRadio1">Negócio</label>
</div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="formGroupExampleInput">Data Inicio:</label>
    <input required class="form-control date-mask"  name="datainicio" type="date" id="datainicio">
    </div>
    <div class="form-group col-md-6">
    <label for="formGroupExampleInput">Hora Inicio:</label>
    <input required class="form-control date-mask"  name="horainicio" type="time" id="horainicio" >
    </div>
</div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="formGroupExampleInput">Data Fim:</label>
    <input required class="form-control date-mask"  name="datafim" type="date" id="datafim" >
    </div>
        <div class="form-group col-md-6">
    <label for="formGroupExampleInput">Hora Fim:</label>
    <input required class="form-control date-mask"  name="horafim" type="time" id="horafim" >
    </div>
</div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Promotor:</label>
      <input required class="form-control"  name="promotor" type="text" id="promotor">
    </div>
   <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Endereço do Promotor:</label>
      <input required class="form-control"  name="enderecopromotor" type="text" id="enderecopromotor" >
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Telefone:</label>
            <!-- permitindo apenas numeros -->
<input required class="form-control" id="telefone"  name="telefone" type="text" 
   onkeypress="return event.charCode >= 48 && event.charCode <= 57">
    </div>
   <div class="form-group col-md-6">
      <label for="inputEmail4">E-mail:</label>
      <input required class="form-control"  name="email" type="email" id="email" >
    </div>
  </div>

    <div class="form-row">
  <div class="form-group col-md-6">
    <label for="formGroupExampleInput">Descrição:</label>
    <br>
    <textarea class="form-control" id="descricao"  name="descricao" cols="5" rows="8" placeholder="Limite 500 caracteres" maxlength="500"></textarea>
    </div>
    <div class="form-group col-md-6">
    </br>
      <label for="formGroupExampleInput">Está na lista Cem  Maiores Feiras?</label>
      <div class="form-check form-check-inline">
      <input required class="form-check-input" type="radio" name="cemfeira" id="cemfeira" value="S">
      <label class="form-check-label" for="inlineRadio1">Sim</label>
      </div>
      <div class="form-check form-check-inline">
      <input required class="form-check-input" type="radio" name="cemfeira" id="cemfeira" value="N">
      <label class="form-check-label" for="inlineRadio1">Não</label>
      </div>
    </div>
  </div>

    <div class="form-row">
      <div class="form-group col-md-6">
      <label for="inputEmail4">Capa da Postagem:</label></br>
      <p><input required type="file" id="capa" name="capa"></br></p>
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
  <!-- /.container -->

 <!--RODAPE-->
 <?php include "rodape.php"?>
 <!--fim RODAPE-->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
