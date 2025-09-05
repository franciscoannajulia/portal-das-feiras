<?php   
include "../databaseconnect.php"; 

     $nome = $_POST["nome"];
     $login = $_POST["login"];
     $senha1 = $_POST["senha1"];
     $senha2 =$_POST["senha2"];     
     $email =$_POST["email"];
     $tipo =$_POST["tipo"];
    if($senha1 != $senha2)
              {
              
                echo "<script>
                alert('Senhas Não Coincidem');
                history.go(-1);
                </script>
                ";
                header("location: ../erro.php?erro=Ocorreu o seguinte erro: ".$erro->getMessage());
                exit;
                  
              }
              else
     if($tipo=="S"){
              
                $senha = md5($_POST["senha1"]);
		$sql="insert into marketing values ( null, :nome, :login, :email, :senha)";
		  
		  $result= $conn->prepare($sql);
		  $result->bindValue(":nome", $nome); 
		  $result->bindValue(":login", $login); 
		  $result->bindValue(":senha", $senha); 
		  $result->bindValue(":email", $email); 
	      $result->execute();

		  		  header("location: equipemkt.php");

        
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

		  		  header("location: home.php");

}
?>