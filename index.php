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
  <script>function fonte(e){
	var elemento = $(".acessibilidade");
	var fonte = elemento.css('font-size');
	if (e == 'a') {
		elemento.css("fontSize", parseInt(fonte) + 1);
	} else if('d'){
		elemento.css("fontSize", parseInt(fonte) - 1);
	}
}</script>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<?php include"menu.php";?>

    <!--Carrossel-->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
    <li data-target="#demo" data-slide-to="6"></li>
  </ul>
    <!--anuncio-->
          <div class="carousel-inner">
<?php 
    include"databaseconnect.php";
        $sql = "select * from anuncio where Pagina=1";
        $result = $conn -> prepare($sql);
        $result->execute();
    while ($linha = $result->fetch(PDO::FETCH_ASSOC))
    {	
    ?>  
    <div class="carousel-item active">
      <img src="<?php echo $linha["Imagem"]?>" alt="<?php echo $linha["Titulo"]?>" style="width: 100%; height:auto;">
        <div class="carousel-caption" style="padding-bottom:60px;padding-top:80px;margin-bottom:100px">
        <!--<h3 style="font-size: 3vw;">Venha ver o <?php echo $linha["Titulo"]?></h3>-->
        <a href="<?php echo $linha["Link"]?>" target="_blank" class="btn btn-anna" style="color:#fff;font-size: 2vw;">Ir Agora</a>
        </div>    
    </div>
    <?php } ?>
    <!--fim anuncio-->
    <div class="carousel-item">
      <img src="img/1.png" alt="100 Maiores Feiras" style="width: 100%; height:auto;">
        <div class="carousel-caption" style="padding-bottom:60px;padding-top:80px;margin-bottom:100px">
        <h3 style="font-size: 3vw;">Veja As 100 Maiores Feiras</h3>
        <p style="font-size: 2vw;">Conheça as principais Feiras e Exposições realizadas em todo país.</p>
        <a href="cemfeiras.php" class="btn btn-anna" target="_blank" style="color:#fff;font-size: 2vw;">Ir Agora</a>
        </div>
    </div>
    <div class="carousel-item">
      <img src="img/2.png" alt="Site do IBCE" style="width: 100%; height:auto;">
        <div class="carousel-caption" style="padding-bottom:60px;padding-top:80px;margin-bottom:100px">
        <h3 style="font-size: 3vw;">Conheça o site do IBCE</h3>
        <p style="font-size: 2vw;">O Instituto Brasileiro de Comercio Exterior, é responsavel pela criação desse site e outros projetos incriveis.</p>
        <a href="https://ibcesaopaulo.com.br" target="_blank" class="btn btn-anna" style="color:#fff;font-size: 2vw;">Saiba Mais</a>
        </div>    
    </div>
    <div class="carousel-item">
      <img src="img/3.png" alt="Catálogo dos Expositores" style="width: 100%; height:auto;">
        <div class="carousel-caption" style="padding-bottom:60px;padding-top:80px;margin-bottom:100px">
        <h3 style="font-size: 3vw;">Venha ver o Catálogo dos Expositores</h3>
        <p style="font-size: 2vw;">Conheça as principais Feiras e Exposições realizadas em todo país.</p>
        <a href="https://testecatalogo.000webhostapp.com" target="_blank" class="btn btn-anna" style="color:#fff;font-size: 2vw;">Ir Agora</a>
        </div>    
    </div>
    </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev" style="margin-bottom:100px">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next" style="margin-bottom:100px">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    <!--End Carrossel-->
    
    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  
<section>
    <div class="container" >
      <div class="row align-items-center">
          <div class="row row-cols-1 row-cols-md-2 g-4">
              <div class="col">
                <div class="card">
                  <img
                    src="img/feiraagro.jpg"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 5vw;">Feiras de Agronegócio</h5>
                    <p class="card-text" align="justify" >
            Aqui você encontras centenas de feiras de agronegócio, com diveros expositores e uma diversidade de produtos, que torna o setor competitivo e com uma produtividade mais expressiva.
                    </p>
                    <a href="feirasdeagronegocio.php" class="btn btn-anna" style="color:#fff">Ir Agora</a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img
                    src="img/feiranego.jpg"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body">
                    <h5 class="card-title" style="font-size: 5vw;">Feiras de Negócio</h5>
                    <p class="card-text" align="justify">
                      Com a crescente aposta no marketing de experiência, muitas empresas estão fugindo das estratégias convencionais e apostando em novas formas de estar em contato com o seu público, estas são as feiras e exposições. 
                       </p>
                       <a href="feirasdenegocio.php" class="btn btn-anna" style="color:#fff">Ver Mais</a>  
                  </div>
                </div>
              </div>
            </div>
      </div>
    </div>
</section>
  
    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  
<?php include"rodape.php";?>

</body>

</html>
