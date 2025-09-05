<?php
     $email = $_POST["email"];
     
     include "../../databaseconnect.php"; 
        date_default_timezone_set('America/Sao_Paulo');
          $data =date('d-m-Y H:i:s');

$sql1 = "select * from usuario";
 $result1 = $conn->prepare($sql1);
 $result1 ->execute();
 $linha1 = $result1->fetch(PDO::FETCH_ASSOC);
 $emailbd =  $linha1["Email"];
 
 if($emailbd == $email){
 $sql = "select * from usuario where Email=:email";
 $result = $conn->prepare($sql);
 $result ->bindValue(":email", $email);
 $result ->execute();
 $linha = $result->fetch(PDO::FETCH_ASSOC);
 $nome =  $linha["Nome"];
     
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
   <p>Olá $nome, as $data, foi requisitada uma nova senha no site Portal das Feiras. Foi você?</p>
 <p> Sim -> Por favor, clique nesse <a href='https://portaldasfeiras.com.br/adm/user/nova_senha.php' target='_blank'>link</a></p>
 <p> <b>Não -> Por favor, clique aqui e <a href='https://portaldasfeiras.com.br/adm/user/denuncia.php' target='_blank' >denuncie esse acesso!</a></b></p>

<img src='https://portaldasfeiras.com.br/img/email.png' width='auto' >
</div>
  </html>
";

//enviar

  // emails para quem será enviado o formulário
$as ="Esqueceu  a senha ".$nome." ?";
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: '.$nome.'<'.$email.'>';
  //$headers .= "Bcc: $EmailPadrao\r\n";

  $enviaroutro = mail($email, $as, $arquivo, $headers);

	header("location: esqueci_senha.php?sim=1");
 }
else{
    	header("location: esqueci_senha.php?nao=1");
} 

?>