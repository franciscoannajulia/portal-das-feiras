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
        	if (isset($_REQUEST["id"]))
	{	
		$CodPostagem = $_REQUEST["id"];
		$sql1 = "select * from postagem where CodPostagem = :CodPostagem";
		$result1 = $conn -> prepare($sql1);
		$result1->bindValue(":CodPostagem", $CodPostagem);
		$result1->execute();
		$linha1 = $result1->fetch(PDO::FETCH_ASSOC);
       $Tipo = $linha1["Tipo"];
       $CemFeira = $linha1["CemFeira"];
       if($Tipo=="Agronegocio"){
         $checkedum = "checked";
         $checkeddois = "";
       }
       else{
        $checkedum = "";
        $checkeddois = "checked";
       }
       if($CemFeira=="S"){
        $checkedsim = "checked";
        $checkednao = "";
      }
      else{
        $checkedsim = "";
        $checkednao = "checked";
      }
	};
        
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

<body oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>

<!--Inicio Menu-->
 <?php include "menu.php"?>
<!--fim Menu-->

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Alterar Postagem</h1>
      <!--<p class="lead">Aqui você pode acessar a parte cadastro e visualizar feiras e muito mais.</p>-->
    </header>

    <!-- Page Features -->
    
<form action="alterar_Postagem2.php" enctype="multipart/form-data" method="post">
      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Código postagem <span style="color:red">*não apagar ou alterar</span>:</label>
      <input value="<?php echo $linha1["CodPostagem"];?>" required="" class="form-control" name="codigo" type="text" id="codigo">
  </div>    
    </div>
         
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Titulo:</label>
      <input required="" class="form-control" name="titulo" type="text" id="titulo" value="<?php echo $linha1["Titulo"];?>">
    </div>
   <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Periocidade:</label>
      <input required="" class="form-control" name="periocidade" type="text" id="periocidade" value="<?php echo $linha1["Periocidade"];?>">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">País:</label>
      <input required="" class="form-control" name="pais" type="text" id="pais" value="<?php echo $linha1["Pais"];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Estado: <span style="color:red">**(Se for do Brasil, abreviar, ex: SP)</span></label>
      <input required class="form-control"  name="estado" type="text" id="estado" value="<?php echo $linha1["Estado"];?>">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Cidade:</label>
      <input required="" class="form-control" name="cidade" type="text" id="cidade" value="<?php echo $linha1["Cidade"];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Bairro:</label>
      <input required="" class="form-control" name="bairro" type="text" id="bairro" value="<?php echo $linha1["Bairro"];?>">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Endereço(com Nº):</label>
      <input required="" class="form-control" name="endereco" type="text" id="endereco" value="<?php echo $linha1["Endereco"];?>">
    </div>
   <div class="form-group col-md-6">
      <label for="formGroupExampleInput">CEP:</label>
      <!-- permitindo apenas numeros -->
<input value="<?php echo $linha1["CEP"];?>" required="" class="form-control" id="cep" name="cep" type="text" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Local:</label>
      <input value="<?php echo $linha1["Local"];?>" required="" class="form-control" name="local" type="text" id="local">
    </div>
   <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Site:</label>
      <input value="<?php echo $linha1["Site"];?>" required="" class="form-control" name="site" type="text" id="site">
    </div>
  </div>

  <div class="form-row">
   <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Categoria:</label><br>
       <input value="<?php echo $linha1["Categoria"];?>" required="" class="form-control" name="categoria" type="text" id="categoria">
    </div>
     <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Segmento:</label>
      <input  class="form-control" name="segmento" type="text" id="segmento" value="<?php echo $linha1["Segmento"]?>" >
<div class="form-check form-check-inline">
  <input  class="form-check-input" type="radio" name="tipo" id="tipo" value="Agronegocio" <?php echo $checkedum ;?> >
  <label class="form-check-label" for="inlineRadio1">Agronegocio</label>
</div>
<div class="form-check form-check-inline">
  <input  class="form-check-input" type="radio" name="tipo" id="tipo" value="Negócio" <?php echo $checkeddois ;?>>
  <label class="form-check-label" for="inlineRadio1">Negócio</label>
</div>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="formGroupExampleInput">Data Inicio:</label>
    <input required="" class="form-control date-mask" name="datainicio" type="date" id="datainicio" value="<?php echo $linha1["DataInicio"];?>">
    </div>
    <div class="form-group col-md-6">
    <label for="formGroupExampleInput">Hora Inicio:</label>
    <input required="" class="form-control date-mask" name="horainicio" type="time" id="horainicio" value="<?php echo $linha1["HoraInicio"];?>">
    </div>
</div>

  <div class="form-row">
    <div class="form-group col-md-6">
    <label for="formGroupExampleInput">Data Fim:</label>
    <input required="" class="form-control date-mask" name="datafim" type="date" id="datafim" value="<?php echo $linha1["DataFim"];?>">
    </div>
        <div class="form-group col-md-6">
    <label for="formGroupExampleInput">Hora Fim:</label>
    <input required="" class="form-control date-mask" name="horafim" type="time" id="horafim" value="<?php echo $linha1["HoraFim"];?>">
    </div>
</div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Promotor:</label>
      <input value="<?php echo $linha1["Promotor"];?>" required="" class="form-control" name="promotor" type="text" id="promotor">
    </div>
   <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Endereço do Promotor:</label>
      <input value="<?php echo $linha1["EnderecoPromotor"];?>" required="" class="form-control" name="enderecopromotor" type="text" id="enderecopromotor">
    </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Telefone:</label>
            <!-- permitindo apenas numeros -->
<input value="<?php echo $linha1["Telefone"];?>" required="" class="form-control" id="telefone" name="telefone" type="text" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57">
    </div>
   <div class="form-group col-md-6">
      <label for="inputEmail4">E-mail:</label>
      <input value="<?php echo $linha1["Email"];?>" required="" class="form-control" name="email" type="email" id="email">
    </div>
  </div>

    <div class="form-row">
  <div class="form-group col-md-6">
    <label for="formGroupExampleInput">Descrição:</label>
    <br>
    <textarea class="form-control" id="descricao" name="descricao" cols="5" rows="8" placeholder="Limite 500 caracteres" maxlength="500"><?php echo $linha1["Descricao"];?></textarea>
    </div>
    <div class="form-group col-md-6">
    </br>
      <label for="formGroupExampleInput">Está na lista Cem  Maiores Feiras?</label>
      <div class="form-check form-check-inline">
      <input  class="form-check-input" type="radio" name="cemfeira" id="cemfeira" value="S" <?php echo $checkedsim ;?>>
      <label class="form-check-label" for="inlineRadio1">Sim</label>
      </div>
      <div class="form-check form-check-inline">
      <input  class="form-check-input" type="radio" name="cemfeira" id="cemfeiras" value="N" <?php  echo $checkednao ;?>>
      <label class="form-check-label" for="inlineRadio1">Não</label>
      </div>
    </div>  
    </div>

    <div class="form-row">
            <div class="form-group col-md-6">
    </br>
      <label for="formGroupExampleInput" style="color:red">Alterar capa?</label>*IMPORTANTE RESPONDER PARA CONCLUIR A ALTERAÇÃO
      <div class="form-check form-check-inline">
      <input  class="form-check-input" type="radio" name="alterar" id="alterar" value="S">
      <label class="form-check-label" style="color:red" for="inlineRadio1">Sim</label>
      </div>
      <div class="form-check form-check-inline">
      <input  class="form-check-input" type="radio" name="alterar" id="alterar" value="N" >
      <label class="form-check-label" style="color:red" for="inlineRadio1">Não</label>
      </div>
      <br><?php echo $linha1["Capa"];?><p><input type="file" id="capa" name="capa"><br></p>
      <button type="submit" class="btn btn-primary">Alterar</button>
      </div>
    </div>
</form></div>

    <!-- /.row -->

    <!-- /.container -->

 <!--RODAPE-->
 <?php include "rodape.php"?>
 <!--fim RODAPE-->

  <!-- Bootstrap core JavaScript -->
  <script src="../adm/user/vendor/jquery/jquery.min.js"></script>
  <script src="../adm/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
