<?php
    include('cabecalho-rodape.php');
    include_once('model/postDAO.php')
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Campanhas | SAPDR</title>
    
  <!--  <link rel="stylesheet" href="css/bootstrap-3.3.7.min.css"> <!--contem um tipo especifico de paginacao, foi descontinuado -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/campanhas.css">
    <?php
        favicon();
    ?>
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="lib/twbspagination/jquery.twbsPagination.js"></script>
    <script src="js/campanhas.js"></script>
    
</head>

<body>
    <!--Cabecalho -->
    <header class="container-fluid navbar-expand-sm mb-5">
        <?php
            cabecalho();
        ?>

        <div class="container">

            <div class="row mt-3">
                <div class="col-12">
                    <p id="dir"><a href="index.html"><i class="fas fa-home mr-1"></i>Inicio</a> > <span
                            class="texto-verde">Padrinhos</span></p>
                    <hr class="cor-verde">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h1>Padrinhos</h1>
                </div>
            </div>

        </div>
    </header>

    <!--Conteudo-->
    <div class="container">
        
        <!--Swap out the content with your own-->
        <div class="container">
            <div class="jumbotron page" id="page1">
                <div class="container">
                    <h2>Oi Padrinho, oi Madrinha</h2><br>
                <p >Que Alegria ter Voce connosco nesse legado de Trasnformacao de Vidas</p><br>
                <p >A que e a sua area para saber mais sobre o apadrinhamento, tirar duvidas
                e realizar algumas acoes simples e rapidas como: actualizar seus dados ou forma de Pagamento</p><br>
                <p>
                Por aqui, você pode também escrever uma cartinha para seu afilhado(a) e fortalecer esse vínculo com uma pessoa que, talvez nunca tenha te visto de perto, mas que sabe que você é um ser muito especial na vida dela.

Você também pode solicitar um agendamento de visita ou telefonema ao seu afilhado(a), ou fazer algum requerimento especial sobre sua criança apadrinhada               
                </p>
                
                </div>
            </div>
        
            
            </div>

        </div>    

    <!--Rodape-->
    <?php
        rodape();
    ?>
    
</body>

</html>