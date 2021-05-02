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
    <link rel="stylesheet" href="css/padrinhos.css">
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
        
        <div class="container content">
            <div class="text-center mb-5 ">
                <img src="imgs/icon_padrinho.png" alt="padringo-icon">
                <h2 class="title">Oi Padrinho, oi Madrinha</h2> 
                <p >Que Alegria ter Voce connosco nesse legado de Trasnformacao de Vidas</p><br>
                <p >A que e a sua area para saber mais sobre o apadrinhamento, tirar duvidas
                e realizar algumas acoes simples e rapidas como: actualizar seus dados ou forma de Pagamento</p><br>
                <p>
                    Por aqui, você pode também escrever uma cartinha para seu afilhado(a) e fortalecer esse vínculo com uma pessoa que, talvez nunca tenha te visto de perto, mas que sabe que você é um ser muito especial na vida dela.               
                </p>
                <p>
                    Você também pode solicitar um agendamento de visita ou telefonema ao seu afilhado(a), 
                    ou fazer algum requerimento especial sobre sua criança apadrinhada
                </p>
            </div>

            <h3 class="text-center title">
                Tire suas dúvidas sobre o <br/> apadrinhamento
            </h3>

            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="tab-content" id="faq-tab-content">
                        <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="accordion" id="accordion-tab-1">
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-1">
                                        <h5>
                                            <button 
                                                class="" 
                                                type="button" data-toggle="collapse" 
                                                data-target="#accordion-tab-1-content-1" 
                                                aria-expanded="false" aria-controls="accordion-tab-1-content-1"
                                            >
                                                Como é aplicada a minha contribuicao?
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse show" id="accordion-tab-1-content-1" 
                                        aria-labelledby="accordion-tab-1-heading-1" 
                                        data-parent="#accordion-tab-1"
                                    >
                                        <div class="card-body">
                                            <p>
                                                O valor do apadrinhamento não é entregue à criança ou à sua família, ele é 
                                                administrado por nós. Assim, sua contribuição é aplicada em benefícios destinados 
                                                ao desenvolvimento, realização e monitoramento de programas sociais nas áreas de educação, 
                                                saúde, segurança alimentar e nutricional, conscientização socioambiental, acesso à água, 
                                                cultura, geração de trabalho e renda, assim como ao desenvolvimento de atividades operacionais 
                                                e administrativas da organização.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-2">
                                        <h5>
                                            <button 
                                                type="button" data-toggle="collapse" 
                                                data-target="#accordion-tab-1-content-2" aria-expanded="false" 
                                                aria-controls="accordion-tab-1-content-2"
                                            >
                                                Quero visitar ou ligar para o eu afilhado.O que devo fazer?
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p>
                                                Os encontros e ligações entre padrinhos/madrinhas e afilhados também são regidos 
                                                pela Política de Salvaguarda Infantil do Cerci.
                                                É importante você saber que:
                                                <ul>
                                                    <li>Sua visita deve ser agendada com um mês de antecedência;</li>
                                                    <li>
                                                        É estritamente proibido o encontro entre padrinhos/madrinhas e afilhados sem a presença 
                                                        de um funcionário da organização parceira;
                                                    </li>
                                                    <li>
                                                        As visitas serão realizadas somente em locais públicos. É vetada a visita à residência da criança, 
                                                        mesmo com o acompanhamento de um funcionário da organização parceira;
                                                    </li>
                                                    <li>
                                                        É vetado aos padrinhos/madrinhas levarem a criança apadrinhada para suas residências;
                                                    </li>
                                                    <li>
                                                        Todos os custos referentes à visita são pagos pelo padrinho/madrinha.
                                                    </li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-3">
                                        <h5>
                                            <button 
                                                type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" 
                                                aria-expanded="false" aria-controls="accordion-tab-1-content-3"
                                            >
                                                Quais sao as formas de pagamento das contribuicoes?
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p>
                                                Informacao por adicionar.....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="accordion-tab-1-heading-4">
                                        <h5>
                                            <button type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">
                                                O que e Programa de Apadrinhamento de criancas?
                                            </button>
                                        </h5>
                                    </div>
                                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                        <div class="card-body">
                                            <p>
                                                É a força-motriz do Cerci para a transformação de crianças, suas famílias e comunidades. Um padrinho/madrinha é uma pessoa 
                                                que se compromete a doar,por mês para melhorar a qualidade de vida de uma criança em situação de privação, exclusão e 
                                                vulnerabilidade social. Além da contribuição mensal, é possível ajudar com valores superiores e realizar doações esporádicas 
                                                em data especiais como Natal, Páscoa, Dia das Crianças e aniversário do afilhado.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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