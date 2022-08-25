<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="MYB">

    <title>ADM - Manage Your Business</title>

    <!-- Custom fonts for this template-->
    <!--<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('/css/sb-admin-2.css') ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url('/img/MYB_AZUL.png')?>">
    <script src="https://kit.fontawesome.com/25a14f67bd.js" crossorigin="anonymous"></script>
</head>

<body id="page-top">


    <!--PAINEL WEB + NAVBAR-->

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #21232b;">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline mt-2 mb-0">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
                
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('./DashboardController/Dashboard') ?>">
                        <i class="fas fa-tachometer-alt" style="color: #00e5ff; font-size: 20px; font-size: 20px;"></i>
                        <span>Dashboard</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('./PedidoController/Pedidos') ?>">
                    <i class="fas fa-list-alt fa-lg" style="color: #00e5ff; font-size: 20px;"></i>
                        <span>Pedidos</span>
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('./ProdutoController/Produtos') ?>">
                    <i class="fas fa-box-open fa-lg" style="color: #00e5ff; font-size: 20px;"></i>
                        <span>Produtos</span>
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url('./MarketingController/Marketing') ?>">
                    <i class="fas fa-bullhorn fa-lg" style="color: #00e5ff; font-size: 20px;"></i>
                        <span>Marketing</span>
                    </a>
                </li>

                <!-- Nav Item - Configuracoes Collapse Menu -->
                <li class="nav-item active">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-cogs" style="color: #00e5ff; font-size: 20px;"></i>
                        <span>Configurações</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Aparência:</h6>
                            <a class="collapse-item" href="#">App</a>
                            <a class="collapse-item" href="#">Site</a>
                            <a class="collapse-item" href="#">Cores</a>
                        </div>
                    </div>
                </li>
                

                <!-- Divider -->
                <hr class="sidebar-divider mt-2 mb-1">

                <!-- Nav Item - Pages Collapse Menu 
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-folder"></i>
                        <span>Pages</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Login Screens:</h6>
                            <a class="collapse-item" href="login.html">Login</a>
                            <a class="collapse-item" href="register.html">Register</a>
                            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                            <div class="collapse-divider"></div>
                            <h6 class="collapse-header">Other Pages:</h6>
                            <a class="collapse-item" href="404.html">404 Page</a>
                            <a class="collapse-item" href="blank.html">Blank Page</a>
                        </div>
                    </div>
                </li>
                -->

                <!-- Nav Item - Suporte -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('./SuporteController/Suporte') ?>">
                        <i class="fas fa-headset" style="color: #00e5ff; font-size: 20px;"></i>
                        <span>Suporte</span></a>
                </li>

                <!-- Nav Item - Sobre -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('./AjudaController/Ajuda') ?>">
                        <i class="fas fa-play-circle" style="color: #00e5ff; font-size: 20px;"></i>
                        <span>Ajuda</span></a>
                </li>

                 <!-- Nav Item - -->
                 <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('./SobreController/Sobre') ?>">
                        <i class="fas fa-info-circle" style="color: #00e5ff; font-size: 20px;"></i>
                        <span>Sobre</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                


            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">





                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-dark topbar mb-4 fixed-top shadow" style="background-color: #21232b;">
                        
                        <!-- BOTÃO MENU
                        <div class="text-center">
                            <button class="btn btn-link ml-2 rounded-circle"><img src="img/btn_menu.png" height="30" class="border-0" id="sidebarToggle"/></button>
                        </div>
                        -->
                        <a class="" href="<?php echo base_url('./DashboardController/Dashboard') ?>">
                            <img src="<?php echo base_url('/img/Myb_Logo_Azul_OFICIAL.png')?>" class="" height="65" alt="...">
                        </a>

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mx-2">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Avisos
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">10 de dezembro, 2021</div>
                                            Seu boleto da mensalidade já está disponível.
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">7 de dezembro, 2021</div>
                                            Revise as formas de pagamento disponível na sua loja.
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">2 de dezembro, 2021</div>
                                            Realize a confirmação por e-mail para aumentar a sua segurança.
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar todos os avisos</a>
                                </div>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">4</span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Mensagens
                                    </h6>
                                    <?php foreach($mensagens as $mensagem):?>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="<?php echo base_url('/img/msg.png')?>"
                                                alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate"><?php echo ($mensagem->msg) ?></div>
                                            <div class="small text-gray-700"><?php echo ($mensagem->nome) ?> / <?php echo ($mensagem->email) ?></div>
                                        </div>
                                    </a>
                                    <?php endforeach;?>
                                    <!--<a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                                alt="...">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">I have the photos that you ordered last month, how
                                                would you like them sent to you?</div>
                                            <div class="small text-gray-500">Jae Chun · 1d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                                alt="...">
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Last month's report looks great, I am very happy with
                                                the progress so far, keep up the good work!</div>
                                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                                alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                                told me that people say this to all dogs, even if they aren't good...</div>
                                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                        </div>
                                    </a> -->
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Ver mais mensagens</a>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Loja: MYBShop </span>
                                    <img class="img-profile rounded-circle"
                                        src="<?php echo base_url('/img/store.jpg')?>">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="<?php echo base_url('./PerfilController/Perfil') ?>">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Perfil
                                    </a>
                                    <a class="dropdown-item" href="<?php echo base_url('./DashboardController/Dashboard') ?>">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Resumo da Empresa
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Sair
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->
                    
                    <br>
                    <br>
                    <br>
                    <br>
    <!--PAINEL WEB + NAVBAR-->