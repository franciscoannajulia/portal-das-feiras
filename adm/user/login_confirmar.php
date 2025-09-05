<?php
include "../../databaseconnect.php"; 
 
 $email = $_POST["email"];
 $senha = md5($_POST["senha"]);
 
 $sql = "select * from usuario where Email=:email and Senha=:senha";
 $result = $conn->prepare($sql);
 $result ->bindValue(":email", $email);
 $result ->bindValue(":senha", $senha);
 $result ->execute();
 
 $qtde = $result->rowCount();
 
 if ($qtde == 1)
 {
	 session_start();
	 $linha = $result->fetch(PDO::FETCH_ASSOC);
	 $_SESSION["CodUsuario"] = $linha ["CodUsuario"];
	 $_SESSION["Nome"] = $linha ["Nome"];
	 header("location: home.php");

 }
 else
{
	header("location: ../index.php?id=1");
}
 
?>