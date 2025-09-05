<?php   
include "../../databaseconnect.php"; 

     $nome = $_POST["nome"];
     $login = $_POST["login"];
     $senha1 = $_POST["senha1"];
     $senha2 =$_POST["senha2"];     
     $email =$_POST["email"];
	
    $Codigo = $_POST["codigo"];
 
    if($senha1 == $senha2)
    {
         $senha = md5($_POST["senha1"]);
    $sql="update usuario set Nome =:nome, Email =:email, Usuario=:login, Senha=:senha where CodUsuario =:Codigo";
    $result= $conn->prepare($sql); 
    $result->bindValue(":Codigo",$Codigo);
    $result->bindValue(":nome",$nome);
    $result->bindValue(":email",$email);
    $result->bindValue(":login",$login);
    $result->bindValue(":senha",$senha);
    $result->execute();
    header("location: perfil_Usuario.php");

    }
    else 
    {
      
      header(("location: erro.php?erro=Não foi possivel alterar, por favor preencha corretamente. Não apague seu código.").$erro->getMessage());
      exit;
    }
?> 