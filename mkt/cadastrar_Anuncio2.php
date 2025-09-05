<?php   
include "../databaseconnect.php"; 
    $Titulo = $_POST["titulo"];
    $Link = $_POST["link"];    
    $Pagina = $_POST["pagina"];    
    $DataInicio =$_POST["datainicio"];      
    $DataFim =$_POST["datafim"];
    $Plano =$_POST["plano"];     
    $Medida =$_POST["medida"];
    
            if($Pagina!=1){
                	header("location: ver_Anuncios.php?nao=1");
                	exit;
            } 

             //diretorio para salvar
             $diretorio1 = '../img/capas/';
             $salvarcapa = $diretorio1.basename($_FILES["imagem"]["name"]);
                  //para preencher a tabela
             $url1 = 'img/capas/';
             $linkcapa = $url1.basename($_FILES["imagem"]["name"]);
             
             if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $salvarcapa))
             {
                     $sql="insert into anuncio values ( null, :Titulo, :Link, :linkcapa, :Pagina, :DataInicio, :DataFim, :Plano, :Medida)";
                           
                       $result= $conn->prepare($sql);
                       $result->bindValue(":Titulo", $Titulo); 
                       $result->bindValue(":Link", $Link); 
                       $result->bindValue(":linkcapa", $linkcapa); 
                       $result->bindValue(":Pagina", $Pagina); 
                       $result->bindValue(":DataInicio", $DataInicio); 
                       $result->bindValue(":DataFim", $DataFim); 
                       $result->bindValue(":Plano", $Plano); 
                       $result->bindValue(":Medida", $Medida); 
                       $result->execute();
                 
                	header("location: ver_Anuncios.php");
             }
             

 ?>