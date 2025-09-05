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
      //CARROSSEL{
      $sql1 = "select * from anuncio where Pagina = 1";
      $result1 = $conn-> prepare($sql1);
      $result1->execute();
      //P. AGRO
      $sql2 = "select * from anuncio where Pagina = 2";
      $result2 = $conn-> prepare($sql2);
      $result2->execute();
      //P. NEG
      $sql3 = "select * from anuncio where Pagina = 3";
      $result3 = $conn-> prepare($sql3);
      $result3->execute();
      //FEIRAS
      $sql4 = "select * from anuncio where Pagina = 4";
      $result4 = $conn-> prepare($sql4);
      $result4->execute();
      //CEM FEIRAS
      $sql5 = "select * from anuncio where Pagina = 5";
      $result5 = $conn-> prepare($sql5);
      $result5->execute();
      //ESTADOS
      $sql6 = "select * from anuncio where Pagina = 6";
      $result6 = $conn-> prepare($sql6);
      $result6->execute();
      //POSTAGENS
      $sql7 = "select * from anuncio where Pagina = 7";
      $result7 = $conn-> prepare($sql7);
      $result7->execute();
      //MAPA
      $sql8 = "select * from anuncio where Pagina = 8";
      $result8 = $conn-> prepare($sql8);
      $result8->execute();
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
/* BOTAO */
.botao{
    display:inline-block;
    margin-bottom:0;
    font-weight:400;
    text-align:center;
    white-space:nowrap;
    vertical-align:middle;
    -ms-touch-action:manipulation;
    touch-action:manipulation;
    cursor:pointer;
    background-image:none;
    border:1px solid transparent;
    padding:6px 12px;
    font-size:14px;
    line-height:1.42857143;
    border-radius:4px;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    user-select:none
}
.botao.active.focus,.botao.active:focus,.botao.focus,.botao:active.focus,.botao:active:focus,.botao:focus{
    outline:5px auto -webkit-focus-ring-color;
    outline-offset:-2px
}
.botao.focus,.botao:focus,.botao:hover{
    color:#333;
    text-decoration:none
}
.botao.active,.botao:active{
    background-image:none;
    outline:0;
    -webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);
    box-shadow:inset 0 3px 5px rgba(0,0,0,.125)
}
.botao.disabled,.botao[disabled],fieldset[disabled] .botao{
    cursor:not-allowed;
    filter:alpha(opacity=65);
    opacity:.65;
    -webkit-box-shadow:none;
    box-shadow:none
}
a.botao.disabled,fieldset[disabled] a.botao{
    pointer-events:none
}
.botao-default{
    color:#333;
    background-color:#fff;
    border-color:#ccc
}
.botao-default.focus,.botao-default:focus{
    color:#333;
    background-color:#e6e6e6;
    border-color:#8c8c8c
}
.botao-default:hover{
    color:#333;
    background-color:#e6e6e6;
    border-color:#adadad
}
.botao-default.active,.botao-default:active,.open>.dropdown-toggle.botao-default{
    color:#333;
    background-color:#e6e6e6;
    background-image:none;
    border-color:#adadad
}
.botao-default.active.focus,.botao-default.active:focus,.botao-default.active:hover,.botao-default:active.focus,.botao-default:active:focus,.botao-default:active:hover,.open>.dropdown-toggle.botao-default.focus,.open>.dropdown-toggle.botao-default:focus,.open>.dropdown-toggle.botao-default:hover{
    color:#333;
    background-color:#d4d4d4;
    border-color:#8c8c8c
}
.botao-default.disabled.focus,.botao-default.disabled:focus,.botao-default.disabled:hover,.botao-default[disabled].focus,.botao-default[disabled]:focus,.botao-default[disabled]:hover,fieldset[disabled] .botao-default.focus,fieldset[disabled] .botao-default:focus,fieldset[disabled] .botao-default:hover{
    background-color:#fff;
    border-color:#ccc
}
.botao-default .badge{
    color:#fff;
    background-color:#333
}

.botao-success{
    color:#fff;
    background-color:#82B840;
    border-color:#4cae4c
}
.botao-success.focus,.botao-success:focus{
    color:#fff;
    background-color:#82B840;
    border-color:#255625
}
.botao-success:hover{
    color:#fff;
    background-color:#82B840;
    border-color:#398439
}
.botao-success.active,.botao-success:active,.open>.dropdown-toggle.botao-success{
    color:#fff;
    background-color:#82B840;
    background-image:none;
    border-color:#398439
}
.botao-success.active.focus,.botao-success.active:focus,.botao-success.active:hover,.botao-success:active.focus,.botao-success:active:focus,.botao-success:active:hover,.open>.dropdown-toggle.botao-success.focus,.open>.dropdown-toggle.botao-success:focus,.open>.dropdown-toggle.botao-success:hover{
    color:#fff;
    background-color:#398439;
    border-color:#255625
}
.botao-success.disabled.focus,.botao-success.disabled:focus,.botao-success.disabled:hover,.botao-success[disabled].focus,.botao-success[disabled]:focus,.botao-success[disabled]:hover,fieldset[disabled] .botao-success.focus,fieldset[disabled] .botao-success:focus,fieldset[disabled] .botao-success:hover{
    background-color:#82B840;
    border-color:#4cae4c
}
.botao-success .badge{
    color:#82B840;
    background-color:#fff
}
.botao-info{
    color:#fff;
    background-color:#5bc0de;
    border-color:#46b8da
}
.botao-info.focus,.botao-info:focus{
    color:#fff;
    background-color:#31b0d5;
    border-color:#1b6d85
}
.botao-info:hover{
    color:#fff;
    background-color:#31b0d5;
    border-color:#269abc
}
.botao-info.active,.botao-info:active,.open>.dropdown-toggle.botao-info{
    color:#fff;
    background-color:#31b0d5;
    background-image:none;
    border-color:#269abc
}
.botao-info.active.focus,.botao-info.active:focus,.botao-info.active:hover,.botao-info:active.focus,.botao-info:active:focus,.botao-info:active:hover,.open>.dropdown-toggle.botao-info.focus,.open>.dropdown-toggle.botao-info:focus,.open>.dropdown-toggle.botao-info:hover{
    color:#fff;
    background-color:#269abc;
    border-color:#1b6d85
}
.botao-info.disabled.focus,.botao-info.disabled:focus,.botao-info.disabled:hover,.botao-info[disabled].focus,.botao-info[disabled]:focus,.botao-info[disabled]:hover,fieldset[disabled] .botao-info.focus,fieldset[disabled] .botao-info:focus,fieldset[disabled] .botao-info:hover{
    background-color:#5bc0de;
    border-color:#46b8da
}
.botao-info .badge{
    color:#5bc0de;
    background-color:#fff
}.botao-danger{
    color:#fff;
    background-color:#d9534f;
    border-color:#d43f3a
}
.botao-danger.focus,.botao-danger:focus{
    color:#fff;
    background-color:#c9302c;
    border-color:#761c19
}
.botao-danger:hover{
    color:#fff;
    background-color:#c9302c;
    border-color:#ac2925
}
.botao-danger.active,.botao-danger:active,.open>.dropdown-toggle.botao-danger{
    color:#fff;
    background-color:#c9302c;
    background-image:none;
    border-color:#ac2925
}
.botao-danger.active.focus,.botao-danger.active:focus,.botao-danger.active:hover,.botao-danger:active.focus,.botao-danger:active:focus,.botao-danger:active:hover,.open>.dropdown-toggle.botao-danger.focus,.open>.dropdown-toggle.botao-danger:focus,.open>.dropdown-toggle.botao-danger:hover{
    color:#fff;
    background-color:#ac2925;
    border-color:#761c19
}
.botao-danger.disabled.focus,.botao-danger.disabled:focus,.botao-danger.disabled:hover,.botao-danger[disabled].focus,.botao-danger[disabled]:focus,.botao-danger[disabled]:hover,fieldset[disabled] .botao-danger.focus,fieldset[disabled] .botao-danger:focus,fieldset[disabled] .botao-danger:hover{
    background-color:#d9534f;
    border-color:#d43f3a
}
.botao-danger .badge{
    color:#d9534f;
    background-color:#fff
}
/* LEIA MAIS*/ 
.leiamais{
  max-width: 10ch;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.capa{
    height: 50px;
}
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
<?php include "menu.php";
?>
<!--fim Menu-->
<?php
 if (isset($_REQUEST["sim"])){
    echo '<script>alert("CADASTRO COM  SUCESSO!!")</script>';
 }	
  if (isset($_REQUEST["nao"])){
           echo '<script>alert("Você não pode cadastrar mais anuncio nessa pagina!!")</script>';
      }	
?>
    <!-- Page Content -->
    <div class="container">
    
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
    <h1 class="display-3">Anúncios</h1>
    <p style="color:red">Os anúncios do site Portal das Feiras, possui anuncios manuais, aqui você ira gerenciar todos os anuncios por pagina. Atenção:</p>
    Existe três tipos de banners de anúncio e devem estar nas seguintes medidas: carrossel 950x500; banner vertical 160x600; banner horizontal 700x160;<br>
    Página 1 - O carrossel pode ter até <b>seis</b> banner/anúncios;<br>
    Página 2 à 6 - Devem ter OBRIGATÓRIAMENTE <b>dois</b> banner/anúncios;<br>
    Página 7 e 8 - Podem ter <i>três</i>, mas devem ter OBRIGATÓRIAMENTE <b>dois</b> banner/anúncios;</br>

    </div>
    </header>

    <div class="container">
        <div  id="topo">    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="#menu1" class="btn btn-outline-primary">Página 1</a>
<a href="#menu2" class="btn btn-outline-primary">Página 2</a>
<a href="#menu3" class="btn btn-outline-primary">Página 3</a>
<a href="#menu4" class="btn btn-outline-primary">Página 4</a>
<a href="#menu5" class="btn btn-outline-primary">Página 5</a>
<a href="#menu6" class="btn btn-outline-primary">Página 6</a>
<a href="#menu7" class="btn btn-outline-primary">Página 7</a>
<a href="#menu8" class="btn btn-outline-primary">Página 8</a>
</div>

    <!--Inicio-->
    <div id="menu1" class="container"><br>
    <h3>Anúncios: <a href="../index.php" target="_blank">Carrossel</a></h3>
        Limite de <b>sete</b> banner/anúncios;    <a href="cadastrar_Anuncio.php" class="btn btn-success">Cadastrar Anúncio</a>
<br>

    <?php 
      while ($linha1 = $result1->fetch(PDO::FETCH_ASSOC))
      {	
    ?>
    <div class="card">
        <div class="card-header">
        Código <?php echo $linha1["CodAnuncio"]?> - <?php echo $linha1["Medida"]?>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <img name="capa" id="capa" src="../<?php echo $linha1["Imagem"]?>" style="width:190px;height:150px"/>
                </div>
                <div class="form-group col-md-6">
                    <b>Titulo:</b> <?php echo $linha1["Titulo"]?> </br>
                    <b>Link:</b> <?php echo $linha1["Link"]?> </br>
                    <b>Data Inicio:</b> <?php echo $linha1["DataInicio"]?> </br>
                    <b>Data Fim: </b><?php echo $linha1["DataFim"]?> </br>
                    <b>Plano: </b><?php echo $linha1["Plano"]?> 
                </div> 
            </div> 
<a class="btn btn-danger" data-toggle="modal" data-target="#Apagar" role="button" style="color: #fff;">Apagar</a>             <a href="alterar_Anuncio.php?id=<?php echo $linha1["CodAnuncio"]?>" class="btn btn-primary">Alterar</a>
             
        </div> <?php } ?>      
        <!--Modal-->
        <div class="modal fade" id="Apagar" name="apagar" role="dialog">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">            
        <h4 class="modal-title">Tem certeza que quer excluir?</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form id="confirmando" action="excluir_Anuncio.php" method="post">
        <p>Para excluir, confirme o código da anuncio:</p>
        <input class="form-control" id="codigo" name="codigo" placeholder="Código" type="text" tabindex="4" required>
        </div>
        <div class="modal-footer">
        <button type="button"  class="botao botao-info" data-dismiss="modal">Cancelar </button>
        <input type="submit" value="Apagar"   class="botao botao-danger">
        </div>
        </form>
        </div>
        </div>
        </div> 
        </div>
        <!--ModalFim-->
    </div>
    </div>
    <!--Fim-->
    <!--Inicio-->
    <div id="menu2" class="container"></br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <h3>Anúncios: <a href="../feiras.php?id=2" target="_blank">Feiras de Agronegocio</a></h3>
    Devem ter OBRIGATÓRIAMENTE <b>dois</b> banner/anúncios;&nbsp;&nbsp;<a href="#top" class="btn btn-outline-primary">Voltar Menu</a>&nbsp;&nbsp;<br> 

    <?php 
      while ($linha2 = $result2->fetch(PDO::FETCH_ASSOC))
      {	
    ?>
    <div class="card">
        <div class="card-header">
        Código <?php echo $linha2["CodAnuncio"]?> - <?php echo $linha2["Medida"]?>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <img name="capa" id="capa" src="../<?php echo $linha2["Imagem"]?>" style="width:190px;height:150px"/>
                </div>
                <div class="form-group col-md-6">
                    <b>Titulo:</b> <?php echo $linha2["Titulo"]?> </br>
                    <b>Link:</b> <?php echo $linha2["Link"]?> </br>
                    <b>Data Inicio:</b> <?php echo $linha2["DataInicio"]?> </br>
                    <b>Data Fim: </b><?php echo $linha2["DataFim"]?> </br>
                    <b>Plano: </b><?php echo $linha2["Plano"]?> 
                </div> 
            </div> 
            <a href="alterar_Anuncio.php?id=<?php echo $linha2["CodAnuncio"]?>" class="btn btn-primary">Alterar</a>
          
        </div>   <?php } ?>   
    </div> 
    </div> 
    <!--Fim-->
    <!--Inicio-->
    <div id="menu3" class="container"><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <h3>Anúncios: <a href="../feiras.php?id=3" target="_blank">Feiras de Negócio</a></h3>
    Devem ter OBRIGATÓRIAMENTE <b>dois</b> banner/anúncios;&nbsp;&nbsp;<a href="#top" class="btn btn-outline-primary">Voltar Menu</a>&nbsp;&nbsp;<br> 
    <?php 
      while ($linha3 = $result3->fetch(PDO::FETCH_ASSOC))
      {	
    ?>
    <div class="card">
        <div class="card-header">
        Código <?php echo $linha3["CodAnuncio"]?> - <?php echo $linha3["Medida"]?>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <img name="capa" id="capa" src="../<?php echo $linha3["Imagem"]?>" style="width:190px;height:150px"/>
                </div>
                <div class="form-group col-md-6">
                    <b>Titulo:</b> <?php echo $linha3["Titulo"]?> </br>
                    <b>Link:</b> <?php echo $linha3["Link"]?> </br>
                    <b>Data Inicio:</b> <?php echo $linha3["DataInicio"]?> </br>
                    <b>Data Fim: </b><?php echo $linha3["DataFim"]?> </br>
                    <b>Plano: </b><?php echo $linha3["Plano"]?> 
                </div> 
            </div> 
            <a href="alterar_Anuncio.php?id=<?php echo $linha3["CodAnuncio"]?>" class="btn btn-primary">Alterar</a>
       
        </div>   <?php } ?>   
    </div>  
    </div>
    <!--Fim-->
    <!--Inicio-->
    <div id="menu4" class="container"><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <h3>Anúncios: <a href="../feiras.php" target="_blank">Feiras</a></h3>
    Devem ter OBRIGATÓRIAMENTE <b>dois</b> banner/anúncios;&nbsp;&nbsp;<a href="#top" class="btn btn-outline-primary">Voltar Menu</a>&nbsp;&nbsp;<br> 
    <?php 
      while ($linha4 = $result4->fetch(PDO::FETCH_ASSOC))
      {	
    ?>
    <div class="card">
        <div class="card-header">
        Código <?php echo $linha4["CodAnuncio"]?> - <?php echo $linha4["Medida"]?>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <img name="capa" id="capa" src="../<?php echo $linha4["Imagem"]?>" style="width:190px;height:150px"/>
                </div>
                <div class="form-group col-md-6">
                    <b>Titulo:</b> <?php echo $linha4["Titulo"]?> </br>
                    <b>Link:</b> <?php echo $linha4["Link"]?> </br>
                    <b>Data Inicio:</b> <?php echo $linha4["DataInicio"]?> </br>
                    <b>Data Fim: </b><?php echo $linha4["DataFim"]?> </br>
                    <b>Plano: </b><?php echo $linha4["Plano"]?> 
                </div> 
            </div> 
            <a href="alterar_Anuncio.php?id=<?php echo $linha4["CodAnuncio"]?>" class="btn btn-primary">Alterar</a>
       
        </div>   <?php } ?>   
    </div> 
    </div>
    <!--Fim-->
    <!--Inicio-->
    <div id="menu5" class="container"><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <h3>Anúncios: <a href="../cemfeiras.php" target="_blank">Cem Maiores Feiras</a></h3>
        Devem ter OBRIGATÓRIAMENTE <b>dois</b> banner/anúncios;&nbsp;&nbsp;<a href="#top" class="btn btn-outline-primary">Voltar Menu</a>&nbsp;&nbsp;<br> 

    <?php 
      while ($linha5 = $result5->fetch(PDO::FETCH_ASSOC))
      {	
    ?>
    <div class="card">
        <div class="card-header">
        Código <?php echo $linha5["CodAnuncio"]?> - <?php echo $linha5["Medida"]?>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <img name="capa" id="capa" src="../<?php echo $linha5["Imagem"]?>" style="width:190px;height:150px"/>
                </div>
                <div class="form-group col-md-6">
                    <b>Titulo:</b> <?php echo $linha5["Titulo"]?> </br>
                    <b>Link:</b> <?php echo $linha5["Link"]?> </br>
                    <b>Data Inicio:</b> <?php echo $linha5["DataInicio"]?> </br>
                    <b>Data Fim: </b><?php echo $linha5["DataFim"]?> </br>
                    <b>Plano: </b><?php echo $linha5["Plano"]?> 
                </div> 
            </div> 
            <a href="alterar_Anuncio.php?id=<?php echo $linha5["CodAnuncio"]?>" class="btn btn-primary">Alterar</a>
       
        </div>   <?php } ?>   
    </div> 
    </div>
    <!--Inicio-->
    <div id="menu6" class="container"><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <h3>Anúncios: <a href="../feirasPagina.php?id=28" target="_blank">Paginas</a></h3>
    Devem ter OBRIGATÓRIAMENTE <b>dois</b> banner/anúncios;&nbsp;&nbsp;<a href="#top" class="btn btn-outline-primary">Voltar Menu</a>&nbsp;&nbsp;<br> 
    <?php 
      while ($linha6 = $result6->fetch(PDO::FETCH_ASSOC))
      {	
    ?>
    <div class="card">
        <div class="card-header">
        Código <?php echo $linha6["CodAnuncio"]?> - <?php echo $linha6["Medida"]?>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <img name="capa" id="capa" src="../<?php echo $linha6["Imagem"]?>" style="width:190px;height:150px"/>
                </div>
                <div class="form-group col-md-6">
                    <b>Titulo:</b> <?php echo $linha6["Titulo"]?> </br>
                    <b>Link:</b> <?php echo $linha6["Link"]?> </br>
                    <b>Data Inicio:</b> <?php echo $linha6["DataInicio"]?> </br>
                    <b>Data Fim: </b><?php echo $linha6["DataFim"]?> </br>
                    <b>Plano: </b><?php echo $linha6["Plano"]?> 
                </div> 
            </div> 
            <a href="alterar_Anuncio.php?id=<?php echo $linha6["CodAnuncio"]?>" class="btn btn-primary">Alterar</a>
       
        </div>   <?php } ?>   
    </div> 
    </div>
    <!--Fim-->
    <!--Inicio-->
    <div id="menu7" class="container"><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <h3>Anúncios: Postagens - 2 banner horizontal e 1 vertical</h3>
    Podem ter <i>três</i>, mas devem ter OBRIGATÓRIAMENTE <b>dois</b> banner/anúncios;&nbsp;&nbsp;<a href="#top" class="btn btn-outline-primary">Voltar Menu</a>&nbsp;&nbsp;<br> 
    <?php 
      while ($linha7 = $result7->fetch(PDO::FETCH_ASSOC))
      {	
    ?>
    <div class="card">
        <div class="card-header">
        Código <?php echo $linha7["CodAnuncio"]?> - <?php echo $linha7["Medida"]?>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <img name="capa" id="capa" src="../<?php echo $linha7["Imagem"]?>" style="width:190px;height:150px"/>
                </div>
                <div class="form-group col-md-6">
                    <b>Titulo:</b> <?php echo $linha7["Titulo"]?> </br>
                    <b>Link:</b> <?php echo $linha7["Link"]?> </br>
                    <b>Data Inicio:</b> <?php echo $linha7["DataInicio"]?> </br>
                    <b>Data Fim: </b><?php echo $linha7["DataFim"]?> </br>
                    <b>Plano: </b><?php echo $linha7["Plano"]?> 
                </div> 
            </div> 
            <a href="alterar_Anuncio.php?id=<?php echo $linha7["CodAnuncio"]?>" class="btn btn-primary">Alterar</a>
        </div>   
          
    </div>    <?php } ?> </div>

    <!--Fim-->
    <!--Inicio-->
    <div id="menu8" class="container"><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <h3>Anúncios: <a href="../feirasmapa.php">Mapa</a></h3>
    Devem ter OBRIGATÓRIAMENTE <b>dois</b> banner/anúncios; &nbsp;&nbsp;<a href="#top" class="btn btn-outline-primary">Voltar Menu</a>&nbsp;&nbsp;<br> 
          <?php 
      while ($linha8 = $result8->fetch(PDO::FETCH_ASSOC))
      {	
    ?>
    <div class="card">
        <div class="card-header">
        Código <?php echo $linha8["CodAnuncio"]?> - <?php echo $linha8["Medida"]?>
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <img name="capa" id="capa" src="../<?php echo $linha8["Imagem"]?>" style="width:190px;height:150px"/>
                </div>
                <div class="form-group col-md-6">
                    <b>Titulo:</b> <?php echo $linha8["Titulo"]?> </br>
                    <b>Link:</b> <?php echo $linha8["Link"]?> </br>
                    <b>Data Inicio:</b> <?php echo $linha8["DataInicio"]?> </br>
                    <b>Data Fim: </b><?php echo $linha8["DataFim"]?> </br>
                    <b>Plano: </b><?php echo $linha8["Plano"]?> 
                </div> 
            </div> 
            <a href="alterar_Anuncio.php?id=<?php echo $linha8["CodAnuncio"]?>" class="btn btn-primary">Alterar</a>
       
        </div>     
    </div> <?php } ?> 
    </div> </div>
    </div> 
    </div>
    <!--Fim-->
     </div>
     
    <!-- /.row -->
    </div>  
    <!-- /.container -->
    </div>
    <!-- /.container -->
    </div>

 <!--RODAPE-->
 <?php include "rodape.php"?>
 <!--fim RODAPE-->
  <!-- Bootstrap core JavaScript -->
  <script src="../adm/user/vendor/jquery/jquery.min.js"></script>
  <script src="../adm/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>
