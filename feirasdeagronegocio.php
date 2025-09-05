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
  <style>
a:hover{
 color: #9c3021;
 text-decoration: none;
}
a{
 color: #9c3021;
 text-decoration: none;
}
.imgtitulo{
    background-color: rgba(0,0,0,0.5);
    padding: 2px;
    color:#fff;
    font-size:12px;
    position: absolute;
    padding-top:10px;
}
  </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<?php 
    include"menu.php";
    include"databaseconnect.php";
    //limite por pagina
    $limite = 12;
    //se id não existe atribui 1 a variável id
    $id = (isset($_GET['id'])) ? (int)$_GET['id'] : 1;
    //Atribui a variável inicio o inicio de onde os registros vão ser mostrados por página, exemplo 0 à 10, 11 à 20 e assim por diante
    $inicio = ($id * $limite) - $limite;

        //2
        $sql = "select * from postagem where Tipo = 'Agronegocio' LIMIT $inicio, $limite";
        $result = $conn -> prepare($sql);
        $result->bindValue(":inicio", $inicio);
        $result->bindValue(":limite", $limite);
        $result->execute();
        $anuncio1=3;
        $anuncio2=4;

?>
    <!--anuncio-->
        <?php 
        include"databaseconnect.php";
        $sql3 = "select * from anuncio where CodAnuncio=:anuncio1";
        $result3 = $conn -> prepare($sql3);
        $result3->bindValue(":anuncio1", $anuncio1);
        $result3->execute();
        while ($linha3 = $result3->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
        <center>
            <a href="<?php echo $linha3["Link"]?>" target="_blank"><img  class="anuncio" src="<?php echo $linha3["Imagem"]?>" alt="<?php echo $linha3["Titulo"]?>" style="height:auto; padding: 3%; align:center"></a>
        </center>
        <?php } ?>
    <!--fim anuncio--> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <div class="container" >
            <h2>Feiras de Agronegócio</h2>
            <p></p>
            <a class="btn btn-outline-anna" href="feiras.php">Todos</a>
            <a class="btn btn-anna" style="color:#fff"href="feirasdeagronegocio.php">Feiras de  Agronegócio</a>
            <a class="btn btn-outline-anna" href="feirasdenegocio.php">Feiras de Negócio</a>
            <a class="btn btn-outline-anna" href="feirasestado.php?id=28">Por Estado</a>
            <a class="btn btn-outline-anna" href="cemfeiras.php">Cem Maiores Feiras</a>
            <p></p>
    </div>
    <!--POSTAGENS-->
        <div class="container">
          <div class="row">
                <!--CARD-->
                <?php	
                $qtde = $result->rowCount();
                if ($qtde == 0)
                {
                echo "Não há postagens desse tipo";
                
                }
                    while ($linha = $result->fetch(PDO::FETCH_ASSOC))
                    {	´
                ?>  
                <div class="col-md-3">
                <div class="card mb-3 box-shadow">
                <span class="imgtitulo">&nbsp;&nbsp;Postado em <?php echo date('d/m/Y H:i:s', strtotime($linha ["DataPostagem"]))?></span>
                <img style="height: 350px" class="card-img-top" src="<?php echo $linha["Capa"]?>" alt="Card image cap">
                <div class="card-body">
                <a href="#"><?php echo $linha["Titulo"]?></a></br>
                </span>
                <p class="card-text">De  <?php echo date('d/m/Y', strtotime($linha ["DataInicio"]))?> à <?php echo date('d/m/Y', strtotime($linha ["DataFim"]))?> </br>
                <a href="#"><?php echo $linha["Cidade"]?></a> - <a href="#"><?php echo $linha["Estado"]?></a> - <a href="#"><?php echo $linha["Pais"]?></a></br>
                #<?php echo $linha["Tipo"]?></p>
                <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="postagem.php?id=<?php echo $linha["CodPostagem"]?>" type="button" class="btn btn-sm btn-anna" style="color:#fff">Ver</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div> 
                        <div style="float: left;">
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                        <a class="a2a_button_whatsapp"></a>
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_email"></a>
                        </div>
                        <script>
                        var a2a_config = a2a_config || {};
                        a2a_config.locale = "pt-BR";
                        </script>
                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                        </div></br>
                </div>
                </div>
                </div>    
                </div> 
                <?php
                }
                ?>  
        </div>
    </div>
    
    <!--End POSTAGENS-->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php 
        //seleciona o total de registros  
        $sql_Total = "select * from postagem";
        try {
        $query_Total = $conn->prepare($sql_Total);
        $query_Total->execute();
        
        $query_result = $query_Total->fetchAll(PDO::FETCH_ASSOC);
        //conta quantos registros tem no banco de dados
        $query_count =  $query_Total->rowCount(PDO::FETCH_ASSOC);
        //calcula o total de paginas a serem exibidas
        $qtdPag = ceil($query_count/$limite);
        } 
        catch (PDOexception $error_Total){
        echo 'Erro ao retornar os Dados. '.$error_Total->getMessage();
        }
        //Cria os links para navegação das paginas
        echo "<center><nav><ul id='paginacao' class='pagination justify-content-center'>";
        echo ' <li class="page-item"><a style="color:red" class="page-link" href="feiras.php?id=1">Anterior</a></li>';
        if($qtdPag > 1 && $id <= $qtdPag){
        for($i = 1; $i <= $qtdPag; $i++){
                if($i == $id){
                        echo "<li class='page-item'><a style='color:red' class='page-link' href='feiras.php?id='>".$i."</a></li>";
                } else {
                    echo "<li class='page-item'><a style='color:red' class='page-link' href='feiras.php?id=$i'>".$i."</a></li>";
                }
        }
        }
        echo "<li class='page-item'><a style='color:red' class='page-link' href='feiras.php?id=$qtdPag'>Próxima</a></li>";
        echo "</ul></nav></center>";
        ?>
    <!--anuncio-->
        <?php 
        $sql4 = "select * from anuncio where CodAnuncio=:anuncio2";
        $result4 = $conn -> prepare($sql4);
        $result4->bindValue(":anuncio2", $anuncio2);
        $result4->execute();
        while ($linha4 = $result4->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
        <center>
            <a href="<?php echo $linha4["Link"]?>" target="_blank"><img  class="anuncio" src="<?php echo $linha4["Imagem"]?>" alt="<?php echo $linha4["Titulo"]?>" style="height:auto; padding: 3%; align:center"></a>
        </center>
        <?php } ?>
    <!--fim anuncio--> 
 <?php include"rodape.php";?>
    
</body>

</html>
