<?php
// O remetente deve ser um e-mail do seu dom�nio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
  $to = "contato@tryaderh.com.br";

  $email = $_POST['email'];
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $msg = $_POST['msg'];

  $corpo = "<br>Nome:".$nome."\r\n";
  $corpo.= "<br>Telefone:".$telefone."\r\n";
  $corpo.= "<br>Mensagem:".$msg."\r\n";
  
  

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: contato@tryaderh.com.br \r\n"; // remetente
$headers .= "Return-Path: contato@tryaderh.com.br\r\n"; // return-path
$envio = mail($to, $email, $corpo, $headers);
 
if($envio)
 echo "Mensagem enviada com sucesso";
else
 echo "A mensagem n�o pode ser enviada";
?>