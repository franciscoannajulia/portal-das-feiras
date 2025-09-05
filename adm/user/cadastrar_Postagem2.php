<?php   
include "../../databaseconnect.php"; 
      session_start();
      if (isset($_SESSION["CodUsuario"]))
      {
          $CodUsuario = $_SESSION["CodUsuario"];
          $sql1="select * from usuario where CodUsuario = :CodUsuario";
          $result1= $conn->prepare($sql1);
          $result1->bindValue(":CodUsuario", $CodUsuario); 
          $result1->execute();
          $linha1 = $result1->fetch(PDO::FETCH_ASSOC);
        
          
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
          
          $Autor = $linha1["Nome"];
          date_default_timezone_set('America/Sao_Paulo');
          $DataPostagem =date('Y-m-d H:i:s');

             //diretorio para salvar
             $diretorio1 = '../../img/capas/';
             $salvarcapa = $diretorio1.basename($_FILES["capa"]["name"]);
     
                
             //para preencher a tabela
             $url1 = 'img/capas/';
             $linkcapa = $url1.basename($_FILES["capa"]["name"]);
             
             if (move_uploaded_file($_FILES["capa"]["tmp_name"], $salvarcapa))
             {
                     $sql="insert into postagem values ( null, :Titulo, :Periocidade, :Estado, :Pais, :Cidade,:Bairro, :Endereco, :CEP, :Local, :Site, :Categoria, :Segmento, :Tipo, :DataInicio,:DataFim,:HoraInicio,:HoraFim,:Promotor, :EnderecoPromotor, :Telefone, :Email, :Descricao, :linkcapa, :Autor, :DataPostagem, :CemFeira)";
                           
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
                       $result->bindValue(":Autor", $Autor); 
                       $result->bindValue(":DataPostagem", $DataPostagem); 
                       $result->bindValue(":CemFeira", $CemFeira); 
                       $result->execute();
                 
                       header("location: ver_Postagens.php");
                 
                 
            }
           
      }
      else
      {
      
        header("location: erro.php?erro=Não  foi possivel cadastrar. Preencheu corretamente? ".$erro->getMessage());

      
      }

  			  
?>