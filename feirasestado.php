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
	if (isset($_REQUEST["id"]))
	{	
    $id = $_REQUEST["id"];
    if($id=="1")//RS
    {
      $estado = "RS";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="2")//SC
    {
      $estado = "SC";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="3")//PR
    {
      $estado = "PR";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="4")//SP
    {
      $estado = "SP";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="5")//MS
    {
      $estado = "MS";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="6")//RJ
    {
      $estado = "RJ";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="7")//ES
    {
      $estado = "ES";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="8")//MG
    {
      $estado = "MG";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="9")//GO
    {
      $estado = "GO";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="10")//DF
    {
      $estado = "DF";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="11")//BA
    {
      $estado = "BA";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="12")//MT
    {
      $estado = "MT";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="13")//RO
    {
      $estado = "RO";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="14")//AC
    {
      $estado = "AC";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="15")//AM
    {
      $estado = "AM";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="16")//RR
    {
      $estado = "RR";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="17")//PA
    {
      $estado = "PA";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="18")//AP
    {
      $estado = "AP";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="19")//MA
    {
      $estado = "MA";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="20")//TO
    {
      $estado = "TO";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="21")//SE
    {
      $estado = "SE";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="22")//AL
    {
      $estado = "AL";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="23")//PE
    {
      $estado = "PE";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="24")//PB
    {
      $estado = "PB";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="25")//RN
    {
      $estado = "RN";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="26")//CE
    {
      $estado = "CE";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="27")//PI
    {
      $estado = "AC";
      $sql = "select * from postagem where Estado = :estado";
      $result = $conn-> prepare($sql);
      $result->bindValue(":estado", $estado);
      $result->execute();
    }
    else
    if($id=="28")//TODOS
    {
      $estado ="Todos os Estados";
      $sql = "select * from postagem";
      $result = $conn-> prepare($sql);
      $result->execute();
    }
       
	};

?>
        <!--anuncio-->
        <?php 
        $sql3 = "select * from anuncio where CodAnuncio=11";
        $result3 = $conn -> prepare($sql3);
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
            <h2>Feiras do Site</h2>
            <p></p>
            <a class="btn btn-anna" style="color:#fff" href="feirasestado.php?id=28">Todos</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=14">AC</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=15">AM</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=18">AP</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=22">AL</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=11">BA</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=26">CE</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=10">DF</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=7">ES</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=9">GO</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=19">MA</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=8">MG</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=5">MS</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=12">MT</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=17">PA</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=24">PB</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=27">PI</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=23">PE</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=3">PR</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=6">RJ</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=25">RN</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=13">RO</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=1">RS</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=16">RR</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=2">SC</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=21">SE</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=4">SP</a>
    <a class="btn btn-outline-anna" href="feirasestado.php?id=20">TO</a>
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
    <!--anuncio-->
        <?php 
        $sql4 = "select * from anuncio where CodAnuncio=12";
        $result4 = $conn -> prepare($sql4);
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
