<?php
    function cabecalho(){
        session_start();
	    if(!isset($_SESSION['nome'])){
		    cabecalhoVisitante();  
        }
        else{
            cabecalhoAutenticado();
        }
    }
	
    
    //metodo que faz o cabecalho
    function cabecalhoVisitante() {
?>
        <div class="row">
            <div class="col-12">
                <div class="collapse navbar-collapse float-left">
                    <h1 class="texto-verde" >SACEM</h1>
                    <h5 class="texto-verde ml-2 mt-3" >Sistema de Apadrinhamento de Criancas Especiais em Mocambique</h5>
                </div>
                
                <div class="float-right mr-3">
                    <ul class="navbar-nav list-group-horizontal float-right mt-2">
                        <li class="nav-item mt-2">
                            <a href="contacte-nos.php" class="link texto-verde"><i class="fas fa-envelope mr-1"></i>Contacte-nos</a>
                        </li>
                        <li class="nav-item dropdown ml-3">
                
                            <a class="nav-link dropdown-toggle texto-verde" href="#" data-toggle="dropdown"><i
                                    class="fas fa-user mr-1"></i>Minha conta</a>
                            <div class="dropdown-menu cor-verde">
                                <a class="dropdown-item" href="login.php">Entrar</a>
                                <a class="dropdown-item" href="RegistarDoentes.php">Registar</a>
                            </div>
                
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
        
        <nav class="row navbar navbar-expand-lg navbar-light mt-2 cor-verde">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menubar">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="menubar">
                <ul class="navbar-nav container">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="padrinhos.php">Padrinhos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="programas-apadrinhamento.php">Programas de Apadrinhamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cerci.php">Cerci</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Acoes</a>
                        <div class="dropdown-menu cor-verde">
                            <a class="dropdown-item" href="campanhas.php">Apadrinhar uma Sala</a>
                            <a class="dropdown-item" href="artigos.php">Apadrinhar uma Crianca</a>
                            <a class="dropdown-item" href="pedidos.php">Doacao</a>
                        </div>
                    </li>
                      
                </ul>
            </div>
           
        </nav>
<?php
    }

    //metodo que faz o cabecalho do user depois do login
    function cabecalhoAutenticado() {
?>
    <div class="row">
        <div class="col-12">
            <div class="collapse navbar-collapse float-left ml-3">
                <a href="index.php"><img src="imgs/icon.png">
            </div>
            
            <div class="float-right mr-3">
                <ul class="navbar-nav list-group-horizontal float-right mt-2">
                    <li class="nav-item mt-2">
                        <a href="contacte-nos.php" class="link texto-verde"><i class="fas fa-envelope mr-1"></i>Contacte-nos</a>
                    </li>
                    <li class="nav-item dropdown ml-3">
            
                        <a class="nav-link dropdown-toggle texto-verde" href="#" data-toggle="dropdown"><i
                                class="fas fa-user mr-1"></i>Minha conta</a>
                        <div class="dropdown-menu cor-verde">
                            <a class="dropdown-item" href="perfil-user.php">Perfil</a>
                            <a class="dropdown-item" href="pedir-apoio.php">Pedir Apoio</a>
                            <a class="dropdown-item" href="pub-testemunho.php">Publicar Testemunho</a>
                            <a class="dropdown-item" href="autenticacao.php?sair=true">Sair</a>
                        </div>
            
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
    
    <nav class="row navbar navbar-expand-lg navbar-light mt-2 cor-verde">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menubar">
            <span class="fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="menubar">
            <ul class="navbar-nav container">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="doencas-raras.php">Doenças Raras</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Publicações</a>
                    <div class="dropdown-menu cor-verde">
                        <a class="dropdown-item" href="campanhas.php">Campanhas</a>
                        <a class="dropdown-item" href="artigos.php">Artigos</a>
                        <a class="dropdown-item" href="pedidos.php">Pedidos de apoio</a>
                        <a class="dropdown-item" href="testemunhos.php">Testemunhos</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lista-instituicoes.php">Instituições e Associações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="relatorio.php">Relatórios</a>
                </li>
                    
            </ul>
        </div>
        
    </nav>
<?php
    }
?>

<?php
    //metodo que faz o rodape
    function rodape() {
?>
    <footer class="container-fluid page-footer footer-cor">
        
        <div class="row mt-2 p-3 footer-border bgfooter dark-grey-text">
            <div class="col-12 ">
                <div class="row">
                    
                    <div class="col-md-4 d-none d-md-none d-lg-block">
                        <ul>
                            <li><h5><a href="doencas-raras.php">Padrinhos </a></h5></li>
                            <li><h5><a href="doencas-raras.php">Programas de Apadrinhamento</a></h5></li>
                            <li><h5><a href="doencas-raras.php">Instituicoes de Ensino Especial</a></h5></li>
                        </ul>
                    </div>
                    
                    
                    <div class="col-lg-4  col-sm-6">
                        <form class="form-inline" action="model/doencaDAO.php?acao=pesquisarRodape" method="POST">
                            <div class="form-row mb-4">
                                <div class="col-12">
                                    <label class="mb-2 mr-5" for="pesquisar">Pesquise por uma Instituicao</label>
                                    <input class="form-control mr-1" id="pesquisar" name="pesqRodape" type="search" placeholder="Pesqisar..." required>
                                    <button class="btn btn-dark" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                   
                    <div class="col-lg-4 col-sm-6">
                        <h5>Siga-nos / Contactacte-nos</h5>
                        <ul class="list-unstyled footer-icone" >
                            <li class="list-inline-item"><a href="#"><i class="fab  fa-facebook-square"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="contacte-nos.php"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row justify-content-center footer-copyright py-1 border-top-1 bg-dark" >
            <div class="col-10 text-center"> SACEM &copy; 2020 - Todos Direitos Reservados </div>
        </div>

    </footer>
<?php        
    }

    function favicon() {
?>
         <link rel="shortcut icon" href="imgs/favicon-2.png" type="image/x-png">
<?php        
    }

?>