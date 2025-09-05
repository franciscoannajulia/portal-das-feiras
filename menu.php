    <!--   ___      .__   __. .__   __.      ___             __   _______ 
    /   \     |  \ |  | |  \ |  |     /   \           |  | |   ____|
   /  ^  \    |   \|  | |   \|  |    /  ^  \          |  | |  |__   
  /  /_\  \   |  . `  | |  . `  |   /  /_\  \   .--.  |  | |   __|  
 /  _____  \  |  |\   | |  |\   |  /  _____  \  |  `--'  | |  |     
/__/     \__\ |__| \__| |__| \__| /__/     \__\  \______/  |__|    -->  
                                                                

 <!-- Navigation -->
 <style>
     /*TITULO*/
.titulo {
position: absolute;
    margin-top: -13%;
    margin-left: 24%;
    font-size: 2.4vw;
    color: #fff;
    font-family: 'Arimo', sans-serif;
}

#subtitulo {
position: absolute;
margin-top: -10%;
margin-left: 10%;
font-size: 2.3vw;
color: #fff;
font-family: 'Arimo', sans-serif;
}
 </style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom fixed-top" style="background-image:url('img/footer.png');-webkit-background-size: cover;-moz-background-size: cover; -o-background-size: cover;background-size: 100% auto;">
    <div class="container">
        <a class="navbar-brand" href="#"> 
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" >
        <ul class="navbar-nav ml-auto" >
        <li class="nav-item">
            <a class="nav-link" href="index.php" style="color: #fff;">Inicio</a>
         </li>
        <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: #fff ">Apresentação</a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <a href="sobre.php" class="dropdown-item">Sobre o site</a>
                                <a href="sobre.php#parceiro" class="dropdown-item">Parceiros</a>
                                <a href="politicaeprivacidade.php" class="dropdown-item">Política de Privacidade</a>
                            </div>
        </li>
        <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color: #fff ">Feiras</a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                 <a href="feirasdeagronegocio.php" class="dropdown-item">Feira de Agronegócio</a>
                                 <a href="feirasdenegocio.php" class="dropdown-item">Feira de Negócio</a>
                                 <a href="feirasmapa.php" class="dropdown-item">Feiras por Estado</a>
                                 <a href="feiraspormes.php" class="dropdown-item">Feiras por Mês</a>
                                 <a href="cemfeiras.php" class="dropdown-item">Cem Maiores Feiras</a>
                                <!--<a href="#" class="dropdown-item">Leilões</a>
                                <a href="#" class="dropdown-item">Congressos, Cursos, Seminários,<br> Simpósios e Workshops</a>-->
                            </div>
                  </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php" style="color: #fff;">Contato</a>
          </li>
          <li class="nav-item">
        <a  onclick="doGTranslate('pt|pt');return false;" href="#" title="Português" class="idioma">
            <img src="img/br.png" style="width:20px;padding-top: 2px;" /></a> &nbsp;
        <a href="#" title="English" class="idioma">
            <img onclick="doGTranslate('pt|en');return false;" src="img/en.png" style="width:20px;padding-top: 2px;" /></a> &nbsp;
        <a href="#" title="Español" class="idioma">
            <img onclick="doGTranslate('pt|es');return false;" src="img/es.png" style="width:20px;padding-top:2px;" /></a> &nbsp;
        <a href="#" title="普通话" class="idioma">
            <img onclick="doGTranslate('pt|zh-CN');return false;" src="img/cn.png" style="width:20px;padding-top: 2px;" /></a> 
         </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navigation -->
  
  <!--Cabeçalho class="responsive"-->
  <div  class="responsive">
    <img src="img/header.png" alt="" style="padding-top: 51px" class="responsive"> 
    <h1 class="titulo tresponsive"><a href="index.php" style="color:#fff;text-decoration: none">IBCE - Instituto Brasileiro de Comércio Exterior Apresenta</a></h1>
    <div id="subtitulo" class="sresponsive" style="margin-left: 45%;">
    <p><i>Calendário das Feiras IBCE</i></p>        
    </div>
    </div>
  <!--End Cabeçalho-->
  
  <!--Pesquisa-->
<nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#"></a>
      <form class="form-inline my-2 my-lg-0" action="pesquisa_resultado.php" enctype="multipart/form-data" method="post">
        <input id="pesquisa" name="pesquisa" class="form-control mr-sm-2" type="text" placeholder="Procurando algo?" aria-label="Search">
        <button class="btn btn-outline-anna" type="submit" style="">Pesquisar</button>
      </form>
    </nav>
  <!--End Pesquisa-->