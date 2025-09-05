<?php   
         include "../databaseconnect.php";	
     $senha1 = $_POST["senha1"];
     $senha2 =$_POST["senha2"];     
     $email =$_POST["email"];
	   date_default_timezone_set('America/Sao_Paulo');
          $data =date('d-m-Y H:i:s');

    if($senha1 == $senha2)
    {
        $senha = md5($senha1);
    $sql="update marketing set Senha=:senha where Email =:email";
    $result= $conn->prepare($sql); 
    $result->bindValue(":senha",$senha);
    $result->bindValue(":email",$email);
    $result->execute();
    
    $sql1 = "select * from marketing where Email =:email";
 $result1 = $conn->prepare($sql1);
    $result->bindValue(":email",$email);
 $result1 ->execute();
 $linha1 = $result1->fetch(PDO::FETCH_ASSOC);
 $nome =  $linha1['Nome'];
     
// Corpo E-mail
$arquivo = "
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
 <p> <h1 style='color: #ac1a05;'>MENSAGEM DO SITE PORTAL DAS FEIRAS</h1></p>
   <p> <i>Este e-mail foi enviado em <b>$data</b></i></br></p>
   <p>Olá $nome, as $data, foi cadastrada uma nova senha no site Portal das Feiras.
<img src='https://portaldasfeiras.com.br/img/email.png' width='auto' >
</div>
  </html>
";

//enviar

  // emails para quem será enviado o formulário
$as = $nome."-Nova Senha";
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: '.$nome.'<'.$email.'>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaroutro = mail($email, $as, $arquivo, $headers);
    
      header("location: ../index.php?sim=1");

    }
    else 
    {
      
      header("location: nova_senha.php?nao=1");
      exit;
    }
?> 