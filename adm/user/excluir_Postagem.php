<?php
include "../../databaseconnect.php"; 
		
		$Codigo = $_POST["codigo"];
		
		 $sql = "delete from postagem where CodPostagem = :Codigo";
		 $result = $conn->prepare($sql);
		 $result->bindValue(":Codigo", $Codigo);
		 $result->execute();
		 
		 
		 header("location: ver_Postagens.php");
?>