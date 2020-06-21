<!doctype html>
<html class="no-js" lang="en">

<head>
    <?php require 'views/head.php'; ?>
</head>

<body>
    <?php require 'views/menuadmin.php'; ?>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="<?php echo constant('URL'); ?>main"><img class="main-logo" src="<?php echo constant('URL'); ?>img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- MENU LISTA  -->
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <!-- <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                                </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- ICONO MENSAJES BARRA NAVEGACION -->
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <!-- ICONO MENSAJES BARRA NAVEGACION -->
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-envelope-o adminpro-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <!-- <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div> -->
                                                        <ul class="message-menu">
                                                            <!-- <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/contact/1.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li> -->
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- ICONO NOTIFICACIONES BARRA NAVEGACION -->
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <!-- <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div> -->
                                                        <ul class="notification-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <!-- <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p> -->
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <!-- <a href="#">View All Notification</a> -->
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- ICONO USUARIO BARRA NAVEGACION -->
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="fa  adminpro-user-rounded header-riht-inf" aria-hidden="true">
                                                            <img id="fotousuario" src="<?php echo constant('URL') . $_SESSION['foto'] ?>" alt="Foto">
                                                        </i>
                                                        <span class="admin-name"><?php echo $_SESSION['nombre']; ?></span>
                                                        <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="<?php echo constant('URL'); ?>usuario/crear"><span class="fa fa-home author-log-ic"></span>Registar</a>
                                                        </li>
                                                        <li><a href="#"><span class="fa fa-user author-log-ic"></span>Perfil</a>
                                                        </li>
                                                        <li><a href="<?php echo constant('URL'); ?>index/logout"><span class="fa fa-lock author-log-ic"></span>Salir</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-tasks"></i></a>

                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab" href="#Notes">News</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Projects">Activity</a>
                                                            </li>
                                                            <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content custom-bdr-nt">
                                                            <div id="Notes" class="tab-pane fade in active">
                                                                <div class="notes-area-wrap">
                                                                    <!-- <div class="note-heading-indicate">
                                                                        <h2><i class="fa fa-comments-o"></i> Latest News</h2>
                                                                        <p>You have 10 New News.</p>
                                                                    </div>
                                                                    <div class="notes-list-area notes-menu-scrollbar">
                                                                        <ul class="notes-menu-list">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <div class="notes-list-flow">
                                                                                        <div class="notes-img">
                                                                                            <img src="img/contact/4.jpg" alt="" />
                                                                                        </div>
                                                                                        <div class="notes-content">
                                                                                            <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                            <span>Yesterday 2:45 pm</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div> -->
                                                                </div>
                                                            </div>
                                                            <!-- SECTOR DE SETINGS DE DASBOARD -->
                                                            <div id="Settings" class="tab-pane fade">
                                                                <div class="setting-panel-area">
                                                                    <div class="note-heading-indicate">
                                                                        <!-- <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                                        <p> You have 20 Settings. 5 not completed.</p> -->
                                                                    </div>
                                                                    <ul class="setting-panel-list">
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- RESPONSIVE -->
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Administrador<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <!-- crud usuarios -->
                                                <li><a title="Registro Usuario" href="<?php echo constant('URL'); ?>usuario/crear"><i class="fa fa-user" aria-hidden="true"></i> <span class="mini-sub-pro">Registrar Usuario</span></a></li>
                                                <li><a title="Ver Usuarios" href="<?php echo constant('URL'); ?>usuario"><i class="fa fa-users nav-icon" aria-hidden="true"></i> <span class="mini-sub-pro">Lista Usuarios</span></a></li>
                                                <!-- crud centro -->
                                                <li><a title="Registro Centro" href="<?php echo constant('URL'); ?>centro/crear"><i class="fa fa-edit" aria-hidden="true"></i> <span class="mini-sub-pro">Registrar Centros</span></a></li>
                                                <li><a title="Lista Centros" href="<?php echo constant('URL'); ?>centro"><i class="fa fa-eye nav-icon" aria-hidden="true"></i> <span class="mini-sub-pro">Lista Centros</span></a></li>
                                                <!-- crud vehiculo -->
                                                <li><a title="Registro Vehiculo" href="<?php echo constant('URL'); ?>vehiculo/crear"><i class="fa fa-truck" aria-hidden="true"></i> <span class="mini-sub-pro">Registrar Vehiculo</span></a></li>
                                                <li><a title="Lista Vehiculos" href="<?php echo constant('URL'); ?>vehiculo"><i class="fa fa-car nav-icon" aria-hidden="true"></i> <span class="mini-sub-pro">Lista Vehiculos</span></a></li>
                                                <!-- crud producto -->
                                                <li><a title="Registro Producto" href="<?php echo constant('URL'); ?>producto/crear"><i class="fa fa-edit" aria-hidden="true"></i> <span class="mini-sub-pro">Registrar Producto</span></a></li>
                                                <li><a title="Lista productos" href="<?php echo constant('URL'); ?>producto"><i class="fa fa-shopping-cart nav-icon" aria-hidden="true"></i> <span class="mini-sub-pro">Lista Productos</span></a></li>
                                                <!-- crud solicitud -->
                                                <li><a title="Registro Solicitud " href="<?php echo constant('URL'); ?>solicitud/crear"><i class="fa fa-edit" aria-hidden="true"></i> <span class="mini-sub-pro">Registrar Solicitud</span></a></li>
                                                <li><a title="Lista de solicitudes" href="<?php echo constant('URL'); ?>solicitud"><i class="fa fa-eye nav-icon" aria-hidden="true"></i> <span class="mini-sub-pro">Lista Solicitudes</span></a></li>
                                                <!-- crud rutas -->
                                                <li><a title="Registro Ruta" href="<?php echo constant('URL'); ?>ruta/crear"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="mini-sub-pro">Registrar Rutas</span></a></li>
                                                <li><a title="Lista de rutas" href="<?php echo constant('URL'); ?>ruta"><i class="fa fa-map nav-icon" aria-hidden="true"></i> <span class="mini-sub-pro">Lista Rutas</span></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <!-- Mobile Menu end -->
            <!-- AREA DE BUSQUEDA -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <!-- <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a> -->
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <!-- <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li> -->
                                            <li><span class="bread-blod">SILTO</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br>