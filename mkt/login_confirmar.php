<?php
include "../databaseconnect.php"; 
 
 $email = $_POST["email"];
 $senha = md5($_POST["senha"]);

 $sql1 = "select * from marketing where Email= :email and Senha= :senha";

 $result1 = $conn->prepare($sql1);
 $result1 ->bindValue(":email", $email);
 $result1 ->bindValue(":senha", $senha);
 $result1 ->execute();
 
 $qtde1 = $result1->rowCount();
 if ($qtde1 == 1)
 {
	 session_start();
	 $linha1 = $result1->fetch(PDO::FETCH_ASSOC);
	 $_SESSION["CodMkt"] = $linha1 ["CodMkt"];
	 $_SESSION["Nome"] = $linha1 ["Nome"];
	 header("location: home.php");

 }
else
{
	header("location: index.php?id=1");
}
?>