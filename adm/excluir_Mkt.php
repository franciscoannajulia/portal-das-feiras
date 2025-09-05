<?php
include "../databaseconnect.php"; 

		
		$Codigo = $_POST["codigo"];
		
		 
		 session_start();
		 if (isset($_SESSION["CodAdm"]))
		 {
			 $CodAdm = $_SESSION["CodAdm"];
			 $Nome = $_SESSION["Nome"];
			 $sql = "delete from marketing where CodMkt = :Codigo";
			$result = $conn->prepare($sql);
			$result->bindValue(":Codigo", $Codigo);
			$result->execute();
			header("location: adm_Mkt.php");
			 
		 }

?>