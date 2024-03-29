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
            ?>

            <!--Conteudo-->
            <div class="container-fluid" id="conteudo">
                
                <div class="row conteudo-dir pt-4">
                    <h5 class="ml-3">Instituicoes de Ensino Especial</h5>
                    <p class="ml-5 dir"><a href="index.php">Inicio</a> >><span class="text-sucess">Instituicoes de Ensino Especial</span></p>
                </div>

                <div class="row mt-2 ">
                    <div class="col-sm-12 ">
                        <div class="float-right">
                            <a class="btn btn-primary ml-2 " href="registar-instituicoes.php">
                                    <i class="fa fa-plus"></i>
                            </a>
                            <a class="btn btn-danger mr-2" href="">
                                    <i class="fa fa-trash"></i>    
                            </a>   
                        </div>
                        
                    </div>
                        
                </div>

                <div class="row justify-content-center">
                    <div class="table-responsive col-sm-12">
                        <table class="table table-bordered table-hover tabela mt-2">
                            <thead >
                                <tr class="cor-creme">
                                    <td class="titulo-tabela" colspan="5"><i class="fa fa-list mr-2"></i>Lista de Instituicoes de Ensino Especial</td>
                                    
                                </tr>
                                <tr>
                                    <th class="texto-verde text-center" style="width:2px;">
                                        <input type="checkbox" onclick="selecionar()">
                                    </th>
                                    <th class="texto-verde">Nome</th>
                                    <th class="texto-verde">Localizacao</th>
                                    <th class="texto-verde">Tipo</th>
                                    <th class="texto-verde" >
                                        <a href="">Accao</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                include_once("../model/instituicaoDAO.php");
                                listaInst();
                            ?> 
                        
                        </tbody>
                        </table>
                    </div>

                </div>

                

                <!--Rodape-->
                <?php
                    rodapeAdmin();
                ?>
            </div>

        </div>
