<?php
include "../../databaseconnect.php"; 
		
		$Codigo = $_POST["codigo"];
		$Cemfeiras = "N";
		 $sql = "update postagem set CemFeira = :Cemfeiras where CodPostagem = :Codigo";
		 $result = $conn->prepare($sql);
		 $result->bindValue(":Codigo", $Codigo);
		 $result->bindValue(":Cemfeiras", $Cemfeiras);
		 $result->execute();
		 
		 
		 header("location: ver_Cemfeiras.php");
?>