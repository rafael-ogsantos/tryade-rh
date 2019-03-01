<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'vendor/autoload.php';
          $nome=$_POST['nome'];
          $email=$_POST['email'];
          $telefone=$_POST['telefone'];
          $mensagem=$_POST['mensagem'];
        
        $from = new SendGrid\Email(null, "contato@tryaderh.com.br");
        $subject = "Informaçoes  do candidato";
        $to = new SendGrid\Email(null, "contato@tryaderh.com.br");
        $content = new SendGrid\Content("text/plain", "Olá, Rafael <br><br>Novo candidato<br><br>nome: $nome<br>email: $email<br>telefone: $telefone<br>mensagem: $mensagem:");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = 'SG.wVZdgdfM6eQdaKsuvCN5Iddg.Q6n-9PmspvMAIymVjj-4578frrhkERjtrt';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        if($mail)
        echo "Mensagem enviada com sucesso";
        else
        echo "nao foi";
        ?>
    </body>
</html>
