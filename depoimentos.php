<?php
                                include_once("conexao.php");
                                $consulta = "SELECT * FROM depoimentos WHERE id = 1 ";
                                $resultado =  mysqli_query( $link, $consulta);

                                $consultadois = "SELECT * FROM depoimentos WHERE id = 2";
                                $resultadodois = mysqli_query($link, $consultadois);

                                $consultatres = "SELECT * FROM depoimentos WHERE id = 3";
                                $resultadotres = mysqli_query($link, $consultatres);

                                $consultaquatro = "SELECT * FROM depoimentos WHERE id = 4";
                                $resultadoquatro = mysqli_query($link, $consultaquatro);

                                $consultacinco = "SELECT * FROM depoimentos WHERE id = 5";
                                $resultadocinco = mysqli_query($link, $consultacinco);

                                $consultaseis = "SELECT * FROM depoimentos WHERE id = 6";
                                $resultadoseis = mysqli_query($link, $consultaseis);

                                $consultasete = "SELECT * FROM depoimentos WHERE id = 7";
                                $resultadosete = mysqli_query($link, $consultasete);
                        ?>
<!DOCTYPE html>
<html>

<head>
    <title>Tryade - empresa de recursos humanos</title>
    <meta charset="UTF-8" />
    <meta name="category" content="Empresa de Recrutamento e Gestão de Pessoas">
    <meta property="og:title" content="TRYADERH - Vagas de emprego">
    <meta name="keywords" content="web site, rh, recursos humanos, vagas de empregos, empregos de rh, tryade ">
    <meta name="description" content="Consultoria de recursos humanos e coaching. Com foco em Recrutamento e Seleção, T&D, e coaching corporativos e Life coaching">
    <link rel="stylesheet" href="_css/sobre.css" />
    <link rel="stylesheet" href="_css/depoimentos.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU'
        crossorigin='anonymous'>
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
            <li><a href="index">Home</a></li>
            <li style=><a href="quem-somos-e-oque-fazemos">Quem somos</a></li>
            <li><a href="">Clientes e parceiros</a></li>
            <li><a href="">Treinamentos</a></li>
            <li><a href="contato">Contato</a></li>
            <li><a href="servicos">Serviços</a></li>
            <li><a href="depoimentos">Depoimentos</a></li>
        </ul>
    </nav>



    <div id="inter">
        <div class="col-md-14">
            <div style="margin-top:-20px">
                <div class=" panel-depoimentos">
                    <div class="panel-tamanho">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="fundo-depoimentos">
        <div class=" container">
            <hgroup>
                <div class="text-center cima">
                    <h1 style="color: white; font-weight: 700">Depoimentos</h1>

                </div>
            </hgroup>
            <!-- tipo de hr abaixo de depoimentos editado-->
            <div class="hr-panel">

            </div>
            <div style="margin-top:50px">

                <div class="col-md-4">
                    <div class="mini-panel">
                        <img src="Imagem/rosto.jpg" id="rosto" width="70" height="70">
                        <i class="fas fa-quote-right" style="float:right;color:#ccc; font-size: 30px;margin-left:10px"></i>
                        <div class="comentario">
                        <?php
                                   while($dados =  mysqli_fetch_assoc($resultado)){ ?>
                                
                           
                            <p>
                               <?php echo $dados["depoimento"];?>
                            </p>
                            
                            
                                   <?php }?> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mini-panel">
                        <img src="Imagem/rosto.jpg" id="rosto" width="70" height="70">
                        <i class="fas fa-quote-right" style="float:right;color:#ccc; font-size: 30px;margin-left:10px"></i>
                        <div class="comentario">
                       
                        <?php
                                   while($dadosdois =  mysqli_fetch_assoc($resultadodois)){ ?>
                                
                           
                            <p>
                               <?php echo $dadosdois["depoimento"];?>
                            </p>
                            
                            
                                   <?php }?> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mini-panel">
                        <img src="Imagem/rosto.jpg" id="rosto" width="70" height="70">
                        <i class="fas fa-quote-right" style="float:right;color:#ccc; font-size: 30px; margin-left: 10px"></i>
                        <?php
                                   while($dadostres =  mysqli_fetch_assoc($resultadotres)){ ?>
                                
                           
                            <p>
                               <?php echo $dadostres["depoimento"];?>
                            </p>
                            
                            
                                   <?php }?> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mini-panel">
                        <img src="Imagem/rosto.jpg" id="rosto" width="70" height="70">
                        <i class="fas fa-quote-right" style="float:right;color:#ccc; font-size: 30px; margin-left: 10px"></i>
                        <?php
                                   while($dadosquatro =  mysqli_fetch_assoc($resultadoquatro)){ ?>
                                
                           
                            <p>
                               <?php echo $dadosquatro["depoimento"];?>
                            </p>
                            
                            
                                   <?php }?> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mini-panel">
                        <img src="Imagem/rosto.jpg" id="rosto" width="70" height="70">
                        <i class="fas fa-quote-right" style="float:right;color:#ccc; font-size: 30px; margin-left: 10px"></i>
                        <?php
                                   while($dadoscinco =  mysqli_fetch_assoc($resultadocinco)){ ?>
                                
                           
                            <p>
                               <?php echo $dadoscinco["depoimento"];?>
                            </p>
                            
                            
                                   <?php }?> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mini-panel">
                        <img src="Imagem/rosto.jpg" id="rosto" width="70" height="70">
                        <i class="fas fa-quote-right" style="float:right;color:#ccc; font-size: 30px; margin-left: 10px"></i>
                        <?php
                                   while($dadosseis =  mysqli_fetch_assoc($resultadoseis)){ ?>
                                
                           
                            <p>
                               <?php echo $dadosseis["depoimento"];?>
                            </p>
                            
                            
                                   <?php }?> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bs-docs-footer">

        <span>tryaderh©2018 . contato@tryaderh.com.br</span>
    </footer>
    <!--<footer class="rodape">
    <div class=" text-center">
        <img src="Imagem/logo.jpg" style="padding:10px ;" width="100px" height="60px">
        <span style="color:#ffffff">Copyright © 2018 </span>
                <nav id="submenu">
                    <ul>
                        <li><a href="#">Email</a></li>|
                        <li><a href="#">Twitter</a></li>|
                        <li><a href="#">Youtube</a></li>|
                        <li><a href="#">Facebook</a></li>
                    </ul>
                </nav>
            </div>
</footer>-->
</body>

</html>