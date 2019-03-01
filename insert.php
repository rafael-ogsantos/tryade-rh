<?php
include "conexao.php";
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $escolaridade= $_POST['escolaridade'];
  $instituicao = $_POST['instituicao'];
  $habilidades = $_POST['habilidades'];
  
  
  mysqli_query($link,"insert into info_cliente(nome,email,escolaridade, instituicao,habilidades)values('$nome','$email','$escolaridade','$instituicao','$habilidades')");
  header('location:campos.php');
?>