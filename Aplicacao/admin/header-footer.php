<?php
	session_start();
	if(!isset($_SESSION['nomeAdmin'])){
		header('Location:login.php');
	}

    //metodo que cria cabecalho do admin
    function cabecalhoAdmin() {
?>
    <header class="navbar navbar-expand-lg borda-baixo">
            <div class="col-sm-12">
        
                <button class="navbar-toggler cor-verde" id="menu-btn" type="button" data-toggle="collapse" >
                    <span class="fa fa-bars"></span>
                </button>
        
                <div class="collapse navbar-collapse float-left">
                    <h1 class="texto-verde" >SACEM</h1>
                    <h5 class="texto-verde ml-2 mt-3" >Sistema de Apadrinhamento de Criancas Especiais em Mocambique</h5>
                </div>
        
                <div class="float-right borda-esquerda">
                    <ul class="navbar-nav mr-4 ml-3 mt-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown">
                                <?php
                                   // echo $_SESSION['nomeAdmin'];
                                ?> 
                                <i class="fas fa-angle-down ml-2"></i>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="perfil.php">Perfil</a>
                                <a class="dropdown-item" href="../index.php">Pagina Inicial</a>
                                <a class="dropdown-item" href="autenticacaoAdmin.php?sair=true">Sair</a>
                            </div>
                        </li>
                    </ul>
                </div>
        
            </div>
        </header>
<?php
    }

    //metodo que cria  menu lateral esquerdo
    function menuVertical() {
?>
        <nav  class="overflow-auto" id="menu">
                <div  id="menu-cabecalho">
                    <h3 class="ml-5">Menu</h3>
                </div>

                <ul class="list-unstyled menu-componetes menu-switch">
                    <p>Navegação</p>
                    <hr class="linha">
                    <li>
                        <a href="index.php"><i class="fa fa-chart-bar mr-2"></i>Painel Administrativo</a>
                    </li>
                    <hr class="linha">
                    <li>
                        <a class="dropdown-toggle" data-toggle="collapse" aria-expanded="false" href="#menu-usuarios"><i class="fas fa-users mr-2"></i>Usuários</a>
                        <ul class="collapse list-unstyled menu-dropdown" id="menu-usuarios">
                            <li><a href="lista-de-profissionais.php"><i class="fas fa-angle-double-right mr-2"></i>Administradores</a></li>
                            <li><a href="lista-de-doentes.php"><i class="fas fa-angle-double-right mr-2"></i>Padrinhos</a></li>
                        </ul>
                    </li>
                    
                    <hr class="linha">
                    <li><a href="lista-de-instituicoes.php"><i class="fas fa-h-square mr-2"></i>Instituições de Ensino Especial</a></li>
                    <hr class="linha">
                    <li>
                        <a class="dropdown-toggle" data-toggle="collapse" aria-expanded="false" href="#menu-mensagens"><i class="fa fa-envelope mr-2"></i> Mensagens</a>
                        <ul class="collapse list-unstyled menu-dropdown" id="menu-mensagens">
                            <li><a href="lista-de-pedidos.php"><i class="fas fa-angle-double-right mr-2"></i>Pedidos de Apoio</a></li>
                            <li><a href="mensagens.php"><i class="fas fa-angle-double-right mr-2"></i>Mensagens de Suporte</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </nav>
<?php
    }

    //metodo que cria rodape
    function rodapeAdmin() {
 ?>       
        <footer class="row  mt-5">
            <div class="col-12 text-center">
                <p><span class="texto-verde">SACEM</span>  &copy; 2020 - Todos Direitos Reservados<br> </p>
            </div>
        </footer>
<?php   
    }
    
    function favicon() {
?>
         <link rel="shortcut icon" href="../imgs/favicon-2.png" type="image/x-png">
<?php        
    }

    function cabecalhoLogin() {
?>
    <header class="navbar navbar-expand-lg borda-baixo">
        <div class="col-sm-12">
            <div class="collapse navbar-collapse float-left">
                <a href="../index.php"><img class="img-fluid" src="../imgs/icon.png" alt="Icone SAPDR"></a>
            </div>     
        </div>
    </header>
<?php

    }
?>
