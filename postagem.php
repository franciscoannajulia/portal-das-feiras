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
  </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<?php 
    include"menu.php";
    include"databaseconnect.php";
        if (isset($_REQUEST["id"]))
        {	
            $CodPostagem = $_REQUEST["id"];
            $sql = "select * from postagem where CodPostagem = :CodPostagem";
            $result = $conn -> prepare($sql);
            $result->bindValue(":CodPostagem", $CodPostagem);
            $result->execute();
            $linha = $result->fetch(PDO::FETCH_ASSOC);
        };
?>
            <!--anuncio-->
        <?php 
        include"databaseconnect.php";
        $sql4 = "select * from anuncio where CodAnuncio=15";
        $result4 = $conn -> prepare($sql4);
        $result4->execute();
        while ($linha4 = $result4->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
        <center>
            <a href="<?php echo $linha4["Link"]?>" target="_blank"><img  class="anuncio" src="<?php echo $linha4["Imagem"]?>" alt="<?php echo $linha4["Titulo"]?>" ></a>
        </center>
        <?php } ?>
    <!--fim anuncio--> 
    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="container" >
            <span style="color:grey">Postado em <?php echo date ('d/m/Y H:i:s', strtotime($linha["DataPostagem"]));?> - <a style="color:#9c3021" href="javascript: history.go(-1)">Voltar</a> </span> 
                    <div style="float: right;">
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
            <p></p>
                 <!--anuncio-->
        <?php 
        include"databaseconnect.php";
        $sql7 = "select * from anuncio where CodAnuncio=13";
        $result7 = $conn -> prepare($sql7);
        $result7->execute();
        while ($linha7 = $result7->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
        <center>
            <a href="<?php echo $linha7["Link"]?>" target="_blank">     <img lass="responsive" src="<?php echo $linha7["Imagem"]?>" alt="<?php echo $linha7["Titulo"]?>" style="height:auto;float: left;  padding-right: 140px;" ></a>
        </center>
        <?php } ?>
    <!--fim anuncio--> 
            <h4><?php echo $linha["Titulo"]?> - De <?php echo date ('d/m/Y', strtotime($linha["DataInicio"])) ;?> às <?php echo date ('H:i', strtotime($linha["HoraInicio"]))?>
            até <?php echo date ('d/m/Y', strtotime($linha["DataFim"]));?> às <?php echo date ('H:i', strtotime($linha["HoraFim"]))?>.</h4>

           <img src="<?php echo $linha["Capa"]?>" width="500px" style="float: right;  padding-left: 140px;" > <p><?php echo $linha["Descricao"]?>.</p>
           

           
            <h4>Informações:</h4>
            <b>Tipo:</b> <?php echo $linha["Tipo"]?></br>
            <b>Periodicidade:</b> <?php echo $linha["Periocidade"]?></br>
            <b>Endereço:</b> <?php echo $linha["Endereco"]?></br>
            <b>Bairro:</b> <?php echo $linha["Bairro"]?></br>
            <b>Cidade:</b> <?php echo $linha["Cidade"]?></br>
            <b>Estado:</b> <?php echo $linha["Estado"]?></br>
            <b>País:</b> <?php echo $linha["Pais"]?></br>
            <b>CEP:</b> <?php echo $linha["CEP"]?></br>
            <b>Local:</b> <?php echo $linha["Local"]?></br>
            <b>Categoria:</b> <?php echo $linha["Categoria"]?></br>
            <b>Segmento:</b> <?php echo $linha["Segmento"]?></br>
            <b>Promotor:</b> <?php echo $linha["Promotor"]?></br>
            <b>Endereço do Promotor:</b> <?php echo $linha["EnderecoPromotor"]?></br>
            <b>Telefone:</b> <?php echo $linha["Telefone"]?></br>
            <b>E-mail:</b> <?php echo $linha["Email"]?></br>
            <b>Site:</b> <?php echo $linha["Site"]?></br>
            
    </div>       
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <!--anuncio-->
        <?php 
        include"databaseconnect.php";
        $sql5 = "select * from anuncio where CodAnuncio=16";
        $result5 = $conn -> prepare($sql5);
        $result5->execute();
        while ($linha5 = $result5->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
        <center>
            <a href="<?php echo $linha5["Link"]?>" target="_blank"><img  class="anuncio" src="<?php echo $linha5["Imagem"]?>" alt="<?php echo $linha5["Titulo"]?>" ></a>
        </center>
        <?php } ?>
    <!--fim anuncio--> 
     <!--ComentárioS-->
     <div class="container">
            <div id="disqus_thread"></div>
            <script>

            var disqus_config = function () {
            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://portal-das-feiras.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Porfavor ative o Javascript para ver <a href="https://disqus.com/?ref_noscript">os comentarios de Disqus.</a>
            </noscript>
            <script id="dsq-count-scr" src="//portal-das-feiras.disqus.com/count.js" async></script>     
     </div>

    <!--fim COMENTARIOS-->
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 <?php include"rodape.php";?>
    
</body>

</html>
