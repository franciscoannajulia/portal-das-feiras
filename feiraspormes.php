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
          date_default_timezone_set('America/Sao_Paulo');
          $anoatual =date('Y');
         //jan
        $sql = "select * from postagem WHERE MONTH(datainicio) = '01' and YEAR(datainicio)=:anoatual";
        $result = $conn -> prepare($sql);
        $result->bindValue(":anoatual", $anoatual);
        $result->execute();
         //fev
        $sql1 = "select * from postagem WHERE MONTH(datainicio) = '02' and YEAR(datainicio)=:anoatual";
        $result1 = $conn -> prepare($sql1);
        $result1->bindValue(":anoatual", $anoatual);
        $result1->execute();
         //mar
        $sql2 = "select * from postagem WHERE MONTH(datainicio) = '03' and YEAR(datainicio)=:anoatual";
        $result2 = $conn -> prepare($sql2);
        $result2->bindValue(":anoatual", $anoatual);
        $result2->execute();
         //abr
        $sql3 = "select * from postagem WHERE MONTH(datainicio) = '04' and YEAR(datainicio)=:anoatual";
        $result3 = $conn -> prepare($sql3);
        $result->bindValue(":anoatual", $anoatual);
        $result3->execute();
         //mai
        $sql6 = "select * from postagem WHERE MONTH(datainicio) = '05' and YEAR(datainicio)=:anoatual";
        $result6 = $conn -> prepare($sql6);
        $result6->bindValue(":anoatual", $anoatual);
        $result6->execute();
         //jun
        $sql7 = "select * from postagem WHERE MONTH(datainicio) = '06' and YEAR(datainicio)=:anoatual";
        $result7 = $conn -> prepare($sql7);
        $result7->bindValue(":anoatual", $anoatual);
        $result7->execute();
         //jul
        $sql8 = "select * from postagem WHERE MONTH(datainicio) = '07' and YEAR(datainicio)=:anoatual";
        $result8 = $conn -> prepare($sql8);
        $result8->bindValue(":anoatual", $anoatual);
        $result8->execute();
         //ago
        $sql9 = "select * from postagem WHERE MONTH(datainicio) = '08' and YEAR(datainicio)=:anoatual";
        $result9 = $conn -> prepare($sql9);
        $result9->bindValue(":anoatual", $anoatual);
        $result9->execute();
         //set
        $sql10 = "select * from postagem WHERE MONTH(datainicio) = '09' and YEAR(datainicio)=:anoatual";
        $result10 = $conn -> prepare($sql10);
        $result10->bindValue(":anoatual", $anoatual);
        $result10->execute();
         //out
        $sql11 = "select * from postagem WHERE MONTH(datainicio) = '10' and YEAR(datainicio)=:anoatual";
        $result11 = $conn -> prepare($sql11);
        $result11->bindValue(":anoatual", $anoatual);
        $result11->execute();
         //nov
        $sql12 = "select * from postagem WHERE MONTH(datainicio) = '11' and YEAR(datainicio)=:anoatual";
        $result12 = $conn -> prepare($sql12);
        $result12->bindValue(":anoatual", $anoatual);
        $result12->execute();
         //dez
        $sql13 = "select * from postagem WHERE MONTH(datainicio) = '12' and YEAR(datainicio)=:anoatual";
        $result13 = $conn -> prepare($sql13);
        $result13->bindValue(":anoatual", $anoatual);
        $result13->execute();

?>
    
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
    <div class="container" >
            <h2>Feiras <?php echo $anoatual?></h2>
                <h4 style="color: #9c3021">Janeiro</h4>                
                <!--POSTAGENS-->
                <?php
                while ($linha = $result->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
            <a style="color: #9c3021;" href="postagem.php?id=<?php echo $linha["CodPostagem"]?>?"><?php echo $linha["Titulo"]?> - <?php echo $linha["Estado"]?> - <?php echo date ('d/m/Y', strtotime($linha["DataInicio"])) ;?> à <?php echo date ('d/m/Y', strtotime($linha["DataFim"])) ;?></a> </br>
        <?php } ?>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--End POSTAGENS-->
              <h4 style="color: #9c3021">Fevereiro</h4>                
                <!--POSTAGENS-->
                <?php
                while ($linha1 = $result1->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
            <a style="color: #9c3021;" href="postagem.php?id=<?php echo $linha1["CodPostagem"]?>?"><?php echo $linha1["Titulo"]?> - <?php echo $linha1["Estado"]?> - <?php echo date ('d/m/Y', strtotime($linha1["DataInicio"])) ;?> à <?php echo date ('d/m/Y', strtotime($linha1["DataFim"])) ;?></a> </br>
        <?php } ?>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--End POSTAGENS-->
                <h4 style="color: #9c3021">Março</h4>                
                <!--POSTAGENS-->
                <?php
                while ($linha2 = $result2->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
            <a style="color: #9c3021;" href="postagem.php?id=<?php echo $linha2["CodPostagem"]?>?"><?php echo $linha2["Titulo"]?> - <?php echo $linha2["Estado"]?> - <?php echo date ('d/m/Y', strtotime($linha2["DataInicio"])) ;?> à <?php echo date ('d/m/Y', strtotime($linha2["DataFim"])) ;?></a> </br>
        <?php } ?>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--End POSTAGENS-->
                <h4 style="color: #9c3021">Abril</h4>                 
                <!--POSTAGENS-->
                <?php
                while ($linha3 = $result3->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
            <a style="color: #9c3021;" href="postagem.php?id=<?php echo $linha3["CodPostagem"]?>?"><?php echo $linha3["Titulo"]?> - <?php echo $linha3["Estado"]?> - <?php echo date ('d/m/Y', strtotime($linha3["DataInicio"])) ;?> à <?php echo date ('d/m/Y', strtotime($linha3["DataFim"])) ;?></a> </br>
        <?php } ?>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--End POSTAGENS-->
                <h4 style="color: #9c3021">Maio</h4>                 
                <!--POSTAGENS-->
                <?php
                while ($linha6 = $result6->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
            <a style="color: #9c3021;" href="postagem.php?id=<?php echo $linha6["CodPostagem"]?>?"><?php echo $linha6["Titulo"]?> - <?php echo $linha6["Estado"]?> - <?php echo date ('d/m/Y', strtotime($linha6["DataInicio"])) ;?> à <?php echo date ('d/m/Y', strtotime($linha6["DataFim"])) ;?></a> </br>
        <?php } ?>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--End POSTAGENS-->
                <h4 style="color: #9c3021">Junho</h4>                 
                <!--POSTAGENS-->
                <?php
                while ($linha7 = $result7->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
            <a style="color: #9c3021;" href="postagem.php?id=<?php echo $linha7["CodPostagem"]?>?"><?php echo $linha7["Titulo"]?> - <?php echo $linha7["Estado"]?> - <?php echo date ('d/m/Y', strtotime($linha7["DataInicio"])) ;?> à <?php echo date ('d/m/Y', strtotime($linha7["DataFim"])) ;?></a> </br>
        <?php } ?>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--End POSTAGENS-->
                <h4 style="color: #9c3021">Julho</h4> 
                <!--POSTAGENS-->
                <?php
                while ($linha8 = $result8->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
            <a style="color: #9c3021;" href="postagem.php?id=<?php echo $linha8["CodPostagem"]?>?"><?php echo $linha8["Titulo"]?> - <?php echo $linha8["Estado"]?> - <?php echo date ('d/m/Y', strtotime($linha8["DataInicio"])) ;?> à <?php echo date ('d/m/Y', strtotime($linha8["DataFim"])) ;?></a> </br>
        <?php } ?>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--End POSTAGENS-->
                <h4 style="color: #9c3021">Agosto</h4>                
                <!--POSTAGENS-->
                <?php
                while ($linha9 = $result9->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
            <a style="color: #9c3021;" href="postagem.php?id=<?php echo $linha9["CodPostagem"]?>?"><?php echo $linha9["Titulo"]?> - <?php echo $linha9["Estado"]?> - <?php echo date ('d/m/Y', strtotime($linha9["DataInicio"])) ;?> à <?php echo date ('d/m/Y', strtotime($linha9["DataFim"])) ;?></a> </br>
        <?php } ?>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--End POSTAGENS-->
                <h4 style="color: #9c3021">Setembro</h4>                 
                <!--POSTAGENS-->
                <?php
                while ($linha10 = $result10->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
            <a style="color: #9c3021;" href="postagem.php?id=<?php echo $linha10["CodPostagem"]?>?"><?php echo $linha10["Titulo"]?> - <?php echo $linha10["Estado"]?> - <?php echo date ('d/m/Y', strtotime($linha10["DataInicio"])) ;?> à <?php echo date ('d/m/Y', strtotime($linha10["DataFim"])) ;?></a> </br>
        <?php } ?>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--End POSTAGENS-->
                <h4 style="color: #9c3021">Outubro</h4>                 
                <!--POSTAGENS-->
                <?php
                while ($linha11 = $result11->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
            <a style="color: #9c3021;" href="postagem.php?id=<?php echo $linha11["CodPostagem"]?>?"><?php echo $linha11["Titulo"]?> - <?php echo $linha11["Estado"]?> - <?php echo date ('d/m/Y', strtotime($linha11["DataInicio"])) ;?> à <?php echo date ('d/m/Y', strtotime($linha11["DataFim"])) ;?></a> </br>
        <?php } ?>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--End POSTAGENS-->
                <h4 style="color: #9c3021">Novembro</h4>                 
                <!--POSTAGENS-->
                <?php
                while ($linha12 = $result12->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
            <a style="color: #9c3021;" href="postagem.php?id=<?php echo $linha12["CodPostagem"]?>?"><?php echo $linha12["Titulo"]?> - <?php echo $linha12["Estado"]?> - <?php echo date ('d/m/Y', strtotime($linha12["DataInicio"])) ;?> à <?php echo date ('d/m/Y', strtotime($linha12["DataFim"])) ;?></a> </br>
        <?php } ?>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--End POSTAGENS-->
                <h4 style="color: #9c3021">Dezembro</h4> 
                <!--POSTAGENS-->
                <?php
                while ($linha13 = $result13->fetch(PDO::FETCH_ASSOC))
        {	
        ?>  
            <a style="color: #9c3021;" href="postagem.php?id=<?php echo $linha13["CodPostagem"]?>?"><?php echo $linha13["Titulo"]?> - <?php echo $linha13["Estado"]?> - <?php echo date ('d/m/Y', strtotime($linha13["DataInicio"])) ;?> à <?php echo date ('d/m/Y', strtotime($linha13["DataFim"])) ;?></a> </br>
        <?php } ?>
               
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--End POSTAGENS-->
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
 <?php include"rodape.php";?>
    
</body>

</html>
