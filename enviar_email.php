<?php
     include "conexaocontato.php";
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $telefone= $_POST['telefone'];
     $mensagem = $_POST['mensagem'];
     
     
     
     mysqli_query($link,"insert into info_contato(nome,email,telefone, mensagem)values('$nome','$email','$telefone','$mensagem')");
     echo '<!DOCTYPE html>
      <html>
      
      <head>
          <title>RH</title>
          <meta charset="UTF-8" />
          <link rel="stylesheet" href="_css/sobre.css" />
          <link rel="stylesheet" href="_css/contato.css" />
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="keywords" content="web site, rh, recursos humanos, vagas de empregos, empregos de rh, tryade ">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
              crossorigin="anonymous">
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
              crossorigin="anonymous"></script>
      </head>
      
      <body>
      
      
      
      
          <input type="checkbox" id="bt_menu">
          <label for="bt_menu">&#9776;</label>
      
          <nav class="menu">
              <img src="Imagem/logo.jpg " style="float:left;margin-left:30px" width="100px">
              <ul>
                  <li><a href="index.html">Home</a></li>
                  <li style=><a href="quem-somos-e-oque-fazemos">Quem somos</a></li>
                  <li><a href="">Clientes e parceiros</a></li>
                  <li><a href="">Treinamentos</a></li>
                  <li><a href="contato">Contato</a></li>
                  <li><a href="servicos">serviços</a></li>
                  <li><a href="depoimentos">Depoimentos</a></li>
              </ul>
          </nav>
      
      
      
          <div id="inter">
              <div class="col-md-14">
                  <div style="margin-top:-20px">
                      <div class=" panel-azul">
                          <div class="panel-tamanho">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      
      
      
          <div id="fundo-preto">
              <div class=" container">
                  <div class="padding text-center">
                         <h1  style="color:white;margin-top:100px;">Enviado com Sucesso!!!</h1>
                         <strong>Em breve responderemos</strong>
                  </div>
              </div>
          </div>
      
          <footer class="bs-docs-footer">
              <div class="container">
                  <nav id="submenu">
                      <ul class="bs-docs-footer-links">
                          <li><a href="#">Email</a></li>|
                          <li><a href="#">Twitter</a></li>|
                          <li><a href="#">Youtube</a></li>|
                          <li><a href="#">Facebook</a></li>
                      </ul>
                  </nav>
                  </ul>
      
                  <span>tryaderh&copy;2018 </a>.</span>
                  <span>Desenvolvido por Rafael galvão </span>
              </div>
          </footer>
      
        
      </body>
      
      </html>';
      
    
?>