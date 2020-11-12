<?php
    include('header-footer.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <title>Painel Administrativo | Admin</title>
        
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/fonts.css">
        <link rel="stylesheet" href="../lib/fontawesome/css/all.css">
        <link rel="stylesheet" href="../lib/fontawesome/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../lib/summernote/summernote-bs4.css"><!--API para criar editor de texto-->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/painel-admin.css">
        <?php
            favicon();
        ?>
        
        <script src="../js/jquery.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/painel-admin.js"></script>
    </head>
    <body>
        <!--Cabecalho-->
        <?php
            cabecalhoAdmin();
        ?>

        <!--corpo da pagina-->
        <div id="corpo">

            <!--Menu Lateral Esquerdo-->
            <?php
                menuVertical();
                if(isset($_GET['editar']) && ($_GET['editar'] == true)) {
                    lerPostID($_GET['idPost']);
               } else {
            ?>

            <!--Conteudo-->
            <div class="container-fluid" id="conteudo">
                
                <div class="row conteudo-dir pt-4">
                    <h5 class="ml-3">Programa de Apadrinhamento</h5>
                    <p class="ml-5 dir"><a href="painel-admin.html">Inicio</a> >><span class="text-sucess">Programa de Apadrinhamento</span></p>
                </div>

                <div class="row my-2 justify-content-center">
                    <div class="col-sm-11">
                        <a class="btn btn-light bg-white cor-borda2 float-right" href="lista-de-campanhas.php"><i class="fa fa-reply"></i></a>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-11 borda-titulo">
                        <label><i class="fa fa-pencil-square-o mr-1"></i>Adicionar Programa de Apadrinhamento</label>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class=" border col-sm-11 bg-white " id="cadastro">
                        <form  action="../model/postDAO.php?acao=inserir&&tipo=Campanha" id="" role="form"  method="post" accept-charset="utf-8">

                            <!-- SmartWizard html -->
                            <div id="smartwizard">
                            <div class="col-sm-12  justify-content-center mb-10" id="geral">
                
                                <div class="form-row my-2 justify-content-center">
                                    
                                        <div class="circle" id="foto-perfil">
                                            <i class="fa fa-user fa-5x upload-button"></i>
                                        </div>
                                        <div class="p-image">
                                            <i class="fa fa-camera upload-button"></i>
                                            <input class="file-upload d-none" type="file" accept="image/*"/>
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="form-row">
                    
                                <div class="form-group col-sm-6">
                            
                                    <label for="inputNome">Nome</label>
                                    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="Nome" max-lenght="30" value="Jose" required >
                                    
                                </div>
                                
                                <div class="form-group col-sm-6">
                                
                                    <label for="inputSobrenome">Instituicao Beneficiaria</label>
                                    <input type="text" class="form-control" id="inputSobrenome" name="sobrenome" value="Pedro" placeholder="Sobrenome" max-lenght="30" required >
                                
                                </div>
                                
                            </div>
                

                                <div id="form-step-0" role="form" data-toggle="validator">
                                    <div class="form-row">
                                        <div class="form-group col-sm-10 mt-2 ">
                                            <label for="descricao" >Descricao:</label>
                                            <textarea class="form-control" id="descricao"  name="artigo" required></textarea>
                                        </div>
                                        
                                    </div>

                                    <div class="form-row justify-content-center">
                                        
                                        <button class="btn  btn-primary mr-2 mb-3" type="Submit">Submeter</button>
                                        <button class="btn  btn-danger mr-3 mb-3" type="reset">Cancelar</button>
                                        
                                    </div>
                                </div>

                                    
                            </div>
                    
                        </form>
                    </div>


                </div>

                <!--Rodape-->
                <?php
                    rodapeAdmin();
                ?>
            </div>
<?php
                    if(isset($_GET['inserido']) && ($_GET['inserido'] == true)) {
                        echo "<script> alert('Artigo publicado com sucesso!'); </script>";
                    }
               }
            ?>

        </div>
        
        <script src="../lib/summernote/summernote-bs4.js"></script> <!--API para criar editor de texto-->
        <script src="../lib/summernote/lang/summernote-pt-PT.js"></script>
        <script src="../lib/profile-image/script.js"></script>
        <!--Chamando o Eidtor summernote-->
        <script>
            $(document).ready(function(){
                $('#descricao').summernote({ 
                    lang:'pt-PT',
                    height: 300,
                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false,             // set focus to editable area after initializing summernote
                });
            });
        </script>
    </body>
</html>
