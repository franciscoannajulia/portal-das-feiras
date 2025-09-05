<?php   
include "../databaseconnect.php"; 
    $CodAnuncio = $_POST["codigo"];

    $Titulo = $_POST["titulo"];
    $Link = $_POST["link"];
    $Plano =$_POST["plano"];     
    $Medida =$_POST["medida"];
    $Pagina = $_POST["pagina"];
    $DataInicio =$_POST["datainicio"];     
    $DataFim =$_POST["datafim"];
    $Alterar =$_POST["alterar"];   
    
    if($Alterar=="N"){
                $sql="update anuncio set Titulo =:Titulo, Plano =:Plano, Medida =:Medida, Link =:Link, Pagina =:Pagina, DataInicio =:DataInicio, DataFim =:DataFim WHERE CodAnuncio  =:CodAnuncio";
                
                $result= $conn->prepare($sql);
                $result->bindValue(":Titulo", $Titulo); 
                $result->bindValue(":Plano", $Plano); 
                $result->bindValue(":Medida", $Medida); 
                $result->bindValue(":Link", $Link); 
                $result->bindValue(":Pagina", $Pagina); 
                $result->bindValue(":DataInicio", $DataInicio); 
                $result->bindValue(":DataFim", $DataFim); 
                $result->bindValue(":CodAnuncio", $CodAnuncio); 
                $result->execute();
                header("location: ver_Anuncios.php");

     }    
    if($Alterar=="S"){
    //diretorio para salvar
    $diretorio1 = '../img/anuncio/';
    $salvarimagem = $diretorio1.basename($_FILES["imagem"]["name"]);
    
    //para preencher a tabela
    $url1 = 'img/anuncio/';
    $linkimagem = $url1.basename($_FILES["imagem"]["name"]);
    
    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $salvarimagem))
    {
    
    $sql="update anuncio set Titulo =:Titulo, Plano =:Plano, Medida =:Medida, Link =:Link, Pagina =:Pagina, DataInicio =:DataInicio, DataFim =:DataFim, Imagem = :linkimagem WHERE CodAnuncio  =:CodAnuncio";
    
    $result= $conn->prepare($sql);
    $result->bindValue(":Titulo", $Titulo); 
    $result->bindValue(":Plano", $Plano); 
    $result->bindValue(":Medida", $Medida); 
    $result->bindValue(":Link", $Link); 
    $result->bindValue(":Pagina", $Pagina); 
    $result->bindValue(":DataInicio", $DataInicio); 
    $result->bindValue(":DataFim", $DataFim); 
    $result->bindValue(":linkimagem", $linkimagem); 
    $result->bindValue(":CodAnuncio", $CodAnuncio); 
    $result->execute();
    header("location: ver_Anuncios.php");
    
    
    }
    else
    {
    
    header("location: erro.php?erro=Não  foi possivel cadastrar. Preencheu corretamente? ".$erro->getMessage());
    
    }
    }
    else 
    {
      
      header(("location: erro.php?erro=Não foi possivel alterar, por favor preencha corretamente. Não apague seu código.").$erro->getMessage());
      exit;
    }
?> 