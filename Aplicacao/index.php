<?php
    include('cabecalho-rodape.php');
    include('model/postDAO.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Inicio | SACEM</title>
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <?php
        favicon();
    ?>
    
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
</head>
<body>

    <!--Cabecalho -->
    <header class="container-fluid navbar-expand-sm">
        <?php
            cabecalho();
        ?>  
    </header>

    <!--Slides-->
    <div id="carouselSite" class="carousel slide" data-ride="carousel">
    
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-target-to="0" class="active"></li>
            <li data-target="#carouselSite" data-target-to="1" class="active"></li>
            <li data-target="#carouselSite" data-target-to="2" class="active"></li>
            <li data-target="#carouselSite" data-target-to="3" class="active"></li>
        </ol>
    
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs/carosel-1.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <!--<h1>Lorem ipsum dolor</h1>
                    <p class="leed">Mauris dictum, nulla sed placerat sodales, diam augue sollicitudin dui</p>-->
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/carosel-2.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-dark">
                    <!--<h1>Aliquam in malesuada neque</h1>
                    <p class="leed">Mauris dictum, nulla sed placerat sodales, diam augue sollicitudin dui.</p>-->
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/carosel-3.jpg
            " class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-wihte">
                    <!--<h1>Pellentesque ultricies facilisis ultrices</h1>
                    <p class="leed">Mauris dictum, nulla sed placerat sodales, diam augue sollicitudin dui.</p>-->
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/carosel-4.jpg" class="img-fluid d-block">
                <div class="carousel-caption d-none d-md-block text-sucess">
                  <!--  <h1>Pellentesque ultricies facilisis ultrices</h1>
                    <p class="leed">Mauris dictum, nulla sed placerat sodales, diam augue sollicitudin dui.</p>-->
                </div>
            </div>
        </div>
    
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Avancar</span>
        </a>
    </div>

    <div class="jumbotron jumbotron-fluid bg-white" style="font-size:20px;">
        <div class="container">
           <div class="row my-1">
                <div class="col-12 " id="descricao-spdr">
                    <h1 class="display-4">Sistema de Apadrinhamento de Criancas Especiais</h1>
                    <p class="text-justify">
                        O sistema tem como objetivo principal permitir a iteração entre portadores de doenças raras ou seus representantes e entidades que possam prover apoio diverso. Este projecto mostra-se importante para os doentes/responsáveis a medida em que vai permitir que estes tenham mais informações úteis do assunto em causa e possam interagir com gente na mesma situação. É uma forma de promover a inclusão social visto que muitas vezes os padecentes de doenças raras acabam sendo excluídos ou esquecidos.<br>  
                        Com esta plataforma os pacientes poderão interagir um com os outros por meio de fóruns embutidos na plataforma; poderão também publicar pedidos de apoio, visualizar campanhas informativas, artigos e relatórios relacionados a doenças raras.
                    </p>
                    <hr>
                </div>
            </div> 
        </div>
    </div>

    
    <!--Conteudo-->
    <div class="container text-justify" id="conteudo">
       
       
        <div class="row my-1">
            <div class="col-12" id="artigo">
                <h2>Missão</h2>
                
                <p>
                    Mobilizar pessoas e instituições para que atuem na valorização, 
                    na proteção e na promoção dos direitos das crianças especiais na sociedade.

                    Estabelecer relações e promover a inovação apoiando o desenvolvimento 
                    educacional das crianças com necessidades educativas especiais em Moçambique. 

                </p>
                
            </div>
        </div>

        <div class="row my-2">
            <div class="col-12" id="apoio">
                <h2>Visão</h2>
                <p>
                    Ser referência na gestão de excelência de programas e projetos socioambientais para 
                    a superação de problemas relacionados à educação especial. 
                    Ser reconhecido como promoter do desenvolvimento local sustentável utilizando 
                    tecnologias digitais.
                </p>
                
            </div>
        </div>

        <div class="row my-2">
            <div class="col-12" id="testemunho">
                <h2>Valores</h2>
                <p>
                    A SOLIDARIEDADE comi um valor importante para i exercício da cidadania da tomada 
                    de consciência das necessidades dos outros e do desejo de contribuir para as suas 
                    condições de vida
                </p>
                <p>
                    A IGUALDADE como características do trabalho da associação, pautado pelo respeito pelas 
                    regras éticas e boas práticas
                </p>
                <p>
                    A COOPERAÇÃO como principal ferramenta para o desenvolvimento do ser humano no mundo
                </p>
                <p>
                    A JUSTIÇA e o respeito pelas diferenças culturais e sociais
                </p>
            </div>
        </div>
          
    </div>

    <!--Rodape-->
    <?php
        rodape();
    ?>
</body>
</html>