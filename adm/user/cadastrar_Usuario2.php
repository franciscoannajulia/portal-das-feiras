<?php   
include "../../databaseconnect.php"; 

     $nome = $_POST["nome"];
     $login = $_POST["login"];
     $senha1 = $_POST["senha1"];
     $senha2 =$_POST["senha2"];     
     $email =$_POST["email"];

              if($senha1 != $senha2)
              {

                header("location: cadastrar_Usuario.php?id=1");
                exit;
                  
              }
              else {
                $senha = md5($_POST["senha1"]);
		$sql="insert into usuario values ( null, :nome, :email, :login, :senha)";
		  
		  $result= $conn->prepare($sql);
		  $result->bindValue(":nome", $nome); 
		  $result->bindValue(":login", $login); 
		  $result->bindValue(":senha", $senha); 
		  $result->bindValue(":email", $email); 
	      $result->execute();

		  		  header("location: perfil_Usuario.php");

        }
?>