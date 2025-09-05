<?php
include "../databaseconnect.php"; 
		
		$Codigo = $_POST["codigo"];
		
		 
		 session_start();
		 if (isset($_SESSION["CodMkt"]))
		 {
			 
			$sql = "delete from marketing where CodMkt = :Codigo";
			$result = $conn->prepare($sql);
			$result->bindValue(":Codigo", $Codigo);
			$result->execute();
			
			
			header("location: logout.php");
			 
		 }
		 $data = date('d-m-Y H:i');
		 $assunto = "Um usuario acabou de apagar conta";       
				// Corpo E-mail
		$arquivo1 = "
		<style type='text/css'>
		body {
		margin:0px;
		font-family:Verdane;
		font-size:16px;
		color: #82B840;
		}
		a{
		color: #82B840;
		text-decoration: none;
		}
		a:hover {
		color: #82B840;
		text-decoration: none;
		}
		#centro{
			align:center;
			text-aling: center;
			padding: 10px;
		}
		</style>
		  <html>
		  <div class='centro'>
		 <p> <h1 style='color: #82B840;'>NOVA EXCLUSÃO DE CONTA NO SITE PORTAL DAS FEIRAS E EVENTOS</h1></p>
		 <p> <i>Conta excluida em <b>$data</b></i></br></p>
		 <p> <b>Nome:</b>$nome</br></p>
		 <p> <b>E-mail:</b>$email</br></p>
		
		<img src='https://ajfrancisco.000webhostapp.com/images/logo/logo.png' width='200' >
		</div>
		  </html>
		";
		$arquivo2 = "
		<style type='text/css'>
		body {
		margin:0px;
		font-family:Verdane;
		font-size:16px;
		color: #82B840;
		}
		a{
		color: #82B840;
		text-decoration: none;
		}
		a:hover {
		color: #82B840;
		text-decoration: none;
		}
		#centro{
			align:center;
			text-aling: center;
			padding: 10px;
		}
		</style>
		  <html>
		  <div class='centro'>
		 <p> <h1 style='color: #82B840;'> EXCLUSÃO DE CONTA NO SITE PORTAL DAS FEIRAS E EVENTOS</h1></p>
		   <p> <i>Conta excluida em <b>$data</b></i></br></p>
		 <p> <b>Nome:</b>$nome</br></p>
		 <p> <b>E-mail:</b>$email</br></p>
		 <p> <b>Sentimos por sua saida &#128554; , mas entendemos que tudo tem um inicio e um começo, desejamos muito sucesso! </p>
		<img src='https://ajfrancisco.000webhostapp.com/images/logo/logo.png' width='200' >
		</div>
		  </html>
		";
		//enviar
		
		  // emails para quem será enviado o formulário
		  $emailenviar = "siteibce@gmail.com";
		  $destino = $emailenviar;
		$as ="Conta Excluida com Sucesso!";
		  // É necessário indicar que o formato do e-mail é html
		  $headers  = 'MIME-Version: 1.0' . "\r\n";
			  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			  $headers .= 'From: '.$nome.'<$email>';
		  //$headers .= "Bcc: $EmailPadrao\r\n";
		
		  $enviaroutro = mail($email, $as, $arquivo2, $headers);
		  $enviaremail = mail($destino, $assunto, $arquivo1, $headers);
?>