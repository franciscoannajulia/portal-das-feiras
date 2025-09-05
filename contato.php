<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Calendário das Feiras IBCE</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.min.css" rel="stylesheet">
   
  <!-- Anna CSS-->
  <link rel="stylesheet" type="text/css" href="css/anna.css">
  <link rel="shortcut icon" href="img/icone_site.png" />
  <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/0f0520ae4d.js" crossorigin="anonymous"></script>
</head>

<body>

<?php include"menu.php"?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
 if (isset($_REQUEST["sim"])){
    echo '<script>alert("E-MAIL ENVIADO! Por Favor, verificar caixa de spam")</script>';
 }	
  if (isset($_REQUEST["nao"])){
           echo '<script>alert("E-MAIL INVALIDO! Este e-mail não está cadastrado")</script>';
      }	
?>
    <div class="container" >
            <h2>Entre em contato conosco por aqui:</h2>
            
             <form action="enviandoemail.php" method="post">
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Seu nome:">
                </div>
                <div class="col-md-6">
                  <input type="text" id="assunto" name="assunto" class="form-control" placeholder="Assunto(Expositor ou Visitante)">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                <input type="text" id="email" name="email" class="form-control" placeholder="E-mail:">
                </div>
                <div class="col-md-6">
<input required class="form-control" id="tel"  name="tel" type="text" placeholder="Celular/Telefone:">                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12"> 
                <textarea id="msg" name="msg" class="form-control"  cols="5" rows="8" placeholder="Mensagem" maxlength="500"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6 mr-auto">
                  <input type="submit" class="btn btn-block btn-success text-white py-3 px-5 rounded-0" value="Enviar mensagem">
                </div>
              </div>
            </form>
      </div>
    </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php include"rodape.php"?>

</body>

</html>
