<?php 
include "../databaseconnect.php"; 
		session_start();
        if (isset($_SESSION["CodAdm"]))
        {
            $CodAdm = $_SESSION["CodAdm"];
            $Nome = $_SESSION["Nome"];
        }
        else
        {
        
            header("Location: logout.php");
            
        }
                        $sql3 = "select * from administrador where CodAdm = :CodAdm";
        $result3 = $conn -> prepare($sql3);
        $result3->bindValue(":CodAdm", $CodAdm);
        $result3->execute();
        $linha3 = $result3->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!--Multipurpose: Modelo grátis por FreeHTML5.co Autor: https://freehtml5.co Facebook: https://facebook.com/fh5co Twitter: https://twitter.com/fh5co -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Título do documento -->
  <title>Adm-Portal das Feiras</title>
  <link rel="shortcut icon" href="../img/icone_site.png" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">



  <!-- Bootstrap core CSS -->
  <link href="user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="user/css/heroic-features.css" rel="stylesheet">

	<style>
    a{
		color: #82B840;
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
    </style>
  </head>

<body oncontextmenu='return false' onselectstart='return false' ondragstart='return false'>



<!--Inicio Menu-->
<?php include "adm_menu.php";
            $sql = "select * from marketing";
            $result = $conn -> prepare($sql);
            $result->execute();
?>
<!--fim Menu-->

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Visualizar</h1>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

	<table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Apagar</th>

                     </tr>
                </thead>
                <?php	
          while ($linha = $result->fetch(PDO::FETCH_ASSOC))
          {	
        ?>  
                <tbody>
                    <tr> 
                    <td scope="row"><?php echo $linha["CodMkt"];?></td>
                        <td scope="row"><?php echo $linha["Nome"];?></td>
                        <td scope="row"><?php echo $linha["Email"];?></td>
                       <td> <a class="botao botao-danger" data-toggle="modal" data-target="#Apagar" role="button" style="color: #fff;">Apagar</a></td>
                </tbody>
        <?php
        };
        ?>
                </table>
         
           <!-- Modal -->
            <div class="modal fade" id="Apagar" role="dialog">
            <div class="modal-dialog modal-sm">
            <div class="modal-content">
            <div class="modal-header">            
            <h4 class="modal-title">Tem certeza que quer excluir?</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <form id="confirmando" action="excluir_Mkt.php" method="post">
            <p>Para excluir, confirme o código do Usuario:</p>
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
    <!-- /.row -->

  </div>
  <!-- /.container -->

 <!--RODAPE-->
 <?php include "rodape.php"?>
 <!--fim RODAPE-->
  <!-- Bootstrap core JavaScript -->
  <script src="user/vendor/jquery/jquery.min.js"></script>
  <script src="user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>
