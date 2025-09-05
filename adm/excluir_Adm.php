<?php
include "../databaseconnect.php"; 

		
		$Codigo = $_POST["codigo"];
		
		 
		 session_start();
		 if (isset($_SESSION["CodAdm"]))
		 {
			 $CodAdm = $_SESSION["CodAdm"];
			 $Nome = $_SESSION["Nome"];
			 if($Codigo==$CodAdm){
			 $sql = "delete from administrador where CodAdm = :CodAdm";
			$result = $conn->prepare($sql);
			$result->bindValue(":CodAdm", $CodAdm);
			$result->execute();
			header("location: logout.php");}
			 
		 }

?>