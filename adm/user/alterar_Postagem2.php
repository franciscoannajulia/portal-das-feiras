<?php   
include "../../databaseconnect.php"; 
          $Codigo =$_POST["codigo"];   

          $Titulo = $_POST["titulo"];
          $Periocidade = $_POST["periocidade"];
          $Estado = $_POST["estado"];
          $Pais =$_POST["pais"];     
          $Cidade =$_POST["cidade"];
          $Bairro = $_POST["bairro"];
          $Endereco = $_POST["endereco"];
          $CEP = $_POST["cep"];
          $Local =$_POST["local"];     
          $Site =$_POST["site"];
          $Categoria = $_POST["categoria"];
          $Segmento = $_POST["segmento"];
          $Tipo = $_POST["tipo"];
          $DataInicio =$_POST["datainicio"];     
          $DataFim =$_POST["datafim"];
          $HoraInicio =$_POST["horainicio"];     
          $HoraFim =$_POST["horafim"];
          $Promotor = $_POST["promotor"];
          $EnderecoPromotor = $_POST["enderecopromotor"];
          $Telefone = $_POST["telefone"];
          $Email =$_POST["email"];     
          $Descricao =$_POST["descricao"];
          $CemFeira =$_POST["cemfeira"];   
          
          $Alterar =$_POST["alterar"];   
          
            if($Alterar=="S"){
                //diretorio para salvar
                $diretorio1 = '../../img/capas/';
                $salvarcapa = $diretorio1.basename($_FILES["capa"]["name"]);
                
                
                //para preencher a tabela
                $url1 = 'img/capas/';
                $linkcapa = $url1.basename($_FILES["capa"]["name"]);
            
                if (move_uploaded_file($_FILES["capa"]["tmp_name"], $salvarcapa))
                {
                $sql="update postagem set Titulo =:Titulo, Periocidade =:Periocidade, Estado  =:Estado, Pais =:Pais, Cidade =:Cidade, Bairro =:Bairro, 
  Endereco =:Endereco, CEP =:CEP, Local =:Local, Site =:Site, Categoria =:Categoria, Segmento =:Segmento, Tipo =:Tipo, DataInicio =:DataInicio, 
  DataFim =:DataFim,HoraInicio =:HoraInicio, 
  HoraFim =:HoraFim, Promotor =:Promotor, EnderecoPromotor =:EnderecoPromotor, Telefone =:Telefone, Email =:Email, Descricao  =:Descricao, 
  Capa =:linkcapa, CemFeira =:CemFeira 
  WHERE CodPostagem  =:Codigo";
                
                $result= $conn->prepare($sql);
                $result->bindValue(":Titulo", $Titulo); 
                $result->bindValue(":Periocidade", $Periocidade); 
                $result->bindValue(":Estado", $Estado); 
                $result->bindValue(":Pais", $Pais); 
                $result->bindValue(":Cidade", $Cidade); 
                $result->bindValue(":Bairro", $Bairro); 
                $result->bindValue(":Endereco", $Endereco); 
                $result->bindValue(":CEP", $CEP); 
                $result->bindValue(":Local", $Local); 
                $result->bindValue(":Site", $Site); 
                $result->bindValue(":Categoria", $Categoria); 
                $result->bindValue(":Segmento", $Segmento); 
                $result->bindValue(":Tipo", $Tipo); 
                $result->bindValue(":DataInicio", $DataInicio); 
                $result->bindValue(":DataFim", $DataFim); 
                $result->bindValue(":HoraInicio", $HoraInicio); 
                $result->bindValue(":HoraFim", $HoraFim); 
                $result->bindValue(":Promotor", $Promotor); 
                $result->bindValue(":EnderecoPromotor", $EnderecoPromotor); 
                $result->bindValue(":Telefone", $Telefone); 
                $result->bindValue(":Email", $Email); 
                $result->bindValue(":Descricao", $Descricao); 
                $result->bindValue(":linkcapa", $linkcapa); 
                $result->bindValue(":Codigo", $Codigo); 
                $result->bindValue(":CemFeira", $CemFeira); 
                $result->execute();
                
                header("location: ver_Postagens.php");
                
                
                }
                else
                {
                
                header("location: erro.php?erro=Não  foi possivel cadastrar. Preencheu corretamente? ".$erro->getMessage());
                    
                }
            }
      if($Alterar=="N"){
                $sql="update postagem set Titulo =:Titulo, Periocidade =:Periocidade, Estado  =:Estado, Pais =:Pais, Cidade =:Cidade, Bairro =:Bairro, 
  Endereco =:Endereco, CEP =:CEP, Local =:Local, Site =:Site, Categoria =:Categoria, Segmento =:Segmento, Tipo =:Tipo, DataInicio =:DataInicio, DataFim =:DataFim,HoraInicio =:HoraInicio, HoraFim =:HoraFim, Promotor =:Promotor, EnderecoPromotor =:EnderecoPromotor, Telefone =:Telefone, Email =:Email, Descricao  =:Descricao, CemFeira =:CemFeira 
                WHERE CodPostagem  =:Codigo";
                $result= $conn->prepare($sql);
              $result->bindValue(":Titulo", $Titulo); 
                $result->bindValue(":Periocidade", $Periocidade); 
                $result->bindValue(":Estado", $Estado); 
                $result->bindValue(":Pais", $Pais); 
                $result->bindValue(":Cidade", $Cidade); 
                $result->bindValue(":Bairro", $Bairro); 
                $result->bindValue(":Endereco", $Endereco); 
                $result->bindValue(":CEP", $CEP); 
                $result->bindValue(":Local", $Local); 
                $result->bindValue(":Site", $Site); 
                $result->bindValue(":Categoria", $Categoria); 
                $result->bindValue(":Segmento", $Segmento); 
                $result->bindValue(":Tipo", $Tipo); 
                $result->bindValue(":DataInicio", $DataInicio); 
                $result->bindValue(":DataFim", $DataFim); 
                $result->bindValue(":HoraInicio", $HoraInicio); 
                $result->bindValue(":HoraFim", $HoraFim); 
                $result->bindValue(":Promotor", $Promotor); 
                $result->bindValue(":EnderecoPromotor", $EnderecoPromotor); 
                $result->bindValue(":Telefone", $Telefone); 
                $result->bindValue(":Email", $Email); 
                $result->bindValue(":Descricao", $Descricao); 
                $result->bindValue(":Codigo", $Codigo); 
                $result->bindValue(":CemFeira", $CemFeira); 
                $result->execute();
                
                header("location: ver_Postagens.php");
     }
      

  			  
?>