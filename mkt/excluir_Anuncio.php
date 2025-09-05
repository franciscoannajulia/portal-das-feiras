<?php
include "../databaseconnect.php"; 
		
		$Codigo = $_POST["codigo"];
		
		 $sql = "delete from anuncio where CodAnuncio = :Codigo";
		 $result = $conn->prepare($sql);
		 $result->bindValue(":Codigo", $Codigo);
		 $result->execute();
		 
		 
		 header("location: ver_Anuncios.php");
?>