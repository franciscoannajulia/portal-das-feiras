<?php
include "../databaseconnect.php"; 
		
		$Codigo = $_POST["codigo"];
			$sql = "delete from usuario where CodUsuario = :Codigo";
			$result = $conn->prepare($sql);
			$result->bindValue(":Codigo", $Codigo);
			$result->execute();

		 $data = date('d-m-Y H:i');
				// Corpo E-mail
		$arquivo1 = "
		<style type='text/css'>
		body {
		margin:0px;
		font-family:Verdane;
		font-size:16px;
		color: #ac1a05;
		}
		a{
		color: #ac1a05;
		text-decoration: none;
		}
		a:hover {
		color: #ac1a05;
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
		 <p> <h1 style='color: #ac1a05;'>VOCÊ FOI EXCLUIDO DO SITE PORTAL DAS FEIRAS</h1></p>
		 <p> <i>Conta excluida em <b>$data</b></i></br></p>
		 <p> <b>Nome:</b>$nome</br></p>
		 <p> <b>E-mail:</b>$email</br></p>
		
		<img src='portaldasfeiras.com.br/img/parceiro/ibce.png' width='200' >
		</div>
		  </html>
		";
		
		//enviar
		
		  // emails para quem será enviado o formulário
		  $emailenviar = "siteibce@gmail.com";
		  $destino = $emailenviar;
		$as ="Conta Excluida!";
		  // É necessário indicar que o formato do e-mail é html
		  $headers  = 'MIME-Version: 1.0' . "\r\n";
			  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			  $headers .= 'From: '.$nome.'<$email>';
		  //$headers .= "Bcc: $EmailPadrao\r\n";
		
		  $enviaroutro = mail($email, $as, $arquivo1, $headers);
?>