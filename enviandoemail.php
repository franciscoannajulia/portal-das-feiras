<?php
    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $assunto = $_POST["assunto"];
    $tel = $_POST["tel"];
    $msg = $_POST["msg"];
    date_default_timezone_set('America/Sao_Paulo');
     $data =date('d-m-Y H:i:s');
    include "databaseconnect.php"; 
     
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
    <p> <h1 style='color: #ac1a05;'>VOCÊ ACABOU DE ENVIAR UM E-MAIL</h1></p>
    <p> <i>Este e-mail foi enviado em <b>$data</b></i></br></p>
    <p>Enviado por $nome($email), as $data:</p>
    <p>Assunto: $assunto</p>
    <p>Mensagem: $msg</p>
    <p>Contato: $nome - $tel - $email</p>
    <img src='https://portaldasfeiras.com.br/img/email.png' width='auto' >
    </div>
    </html>
    ";
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
    <p> <h1 style='color: #ac1a05;'>ALGUEM ACABOU DE ENVIAR UM E-MAIL</h1></p>
    <p> <i>Este e-mail foi enviado em <b>$data</b></i></br></p>
    <p>Enviado por $nome($email), as $data:</p>
    <p>Assunto: $assunto</p>
    <p>Mensagem: $msg</p>
    <p>Contato: $nome - $tel - $email</p>
    <img src='https://portaldasfeiras.com.br/img/email.png' width='auto' >
    </div>
    </html>
    ";
    //ENVIAR
    $emailsite = "siteibce@gmail.com";
    $nomesite = "Calendário das Feiras IBCE";
    // emails para quem será enviado o formulário
    $as ="Alguem enviou uma mensagem: ".$assunto;
    // É necessário indicar que o formato do e-mail é html
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: '.$nomesite.'<'.$emailsite.'>';
    //$headers .= "Bcc: $EmailPadrao\r\n";
    
    $enviarum = mail($emailsite, $as, $arquivo, $headers);
        // É necessário indicar que o formato do e-mail é html
    $headers1  = 'MIME-Version: 1.0' . "\r\n";
    $headers1 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers1 .= 'From: '.$nome.'<'.$email.'>';
    $enviardois = mail($email, $as, $arquivo1, $headers1);

	header("location: contato.php?sim=1");

?>