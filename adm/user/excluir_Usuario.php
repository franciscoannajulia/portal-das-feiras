<?php
include "../../databaseconnect.php"; 
		
		$Codigo = $_POST["codigo"];
		
		 
		 session_start();
		 if (isset($_SESSION["CodUsuario"]))
		 {
			 
			$sql = "delete from usuario where CodUsuario = :Codigo";
			$result = $conn->prepare($sql);
			$result->bindValue(":Codigo", $Codigo);
			$result->execute();
			
			
			header("location: logout.php");
			 
		 }
?>