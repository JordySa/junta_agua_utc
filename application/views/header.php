
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>AquaGuardian </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="<?php echo base_url(); ?>/assets/vendor/jquery/jquery.min.js"></script>
    <link href="<?php echo base_url(); ?>/assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>/assets/js/plugins-init/datatables.init.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/plugins-init/datatables.init.js"></script>
        <!-- Jquery Validation -->
        <script src="<?php echo base_url(); ?>/assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="<?php echo base_url(); ?>/assets/js/plugins-init/jquery.validate-init.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="<?php echo base_url(); ?>/assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha512-DIW4FkYTOxjCqRt7oS9BFO+nVOwDL4bzukDyDtMO7crjUZhwpyrWBFroq+IqRe6VnJkTpRAS6nhDvf0w+wHmxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="<?php echo base_url(); ?>/assets/images/logo.png" alt="">
                <img class="logo-compact" src="<?php echo base_url(); ?>/assets/images/logo-text.png" alt="">
                <img class="brand-title" src="<?php echo base_url(); ?>/assets/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="<?php echo base_url(); ?>/assets/app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>/assets/email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>/assets/page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url(); ?>/assets/index.html">Dashboard 1</a></li>
                            <li><a href="<?php echo base_url(); ?>/assets/index2.html">Dashboard 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Usuarios</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Usuarios</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url(); ?>/assets/app-profile.html">Lista Usuarios</a></li>

                            <li><a href="<?php echo base_url(); ?>/assets/app-calender.html">Perfil</a></li>
                            <li><a href="<?php echo base_url(); ?>/assets/app-calender.html">Socios</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Medidor</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Medidores</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url(); ?>/assets/app-profile.html">Lista Medidores</a></li>

                            <li><a href="<?php echo base_url(); ?>/assets/app-calender.html">Ruta</a></li>
                            <li><a href="<?php echo base_url(); ?>/assets/app-calender.html">Tarifa</a></li>
                            <li><a href="<?php echo site_url(); ?>/excedentes/index">Excedente</a></li>
                        </ul>
                    </li>


                    <li class="nav-label">Tablas Alex</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Tabla Alex</span></a>
                        <ul aria-expanded="false">

                          <li><a href="<?php echo site_url('asistencia/index'); ?>">Asistencia</a></li>
                          <li><a href="<?php echo site_url('comunicado/index'); ?>">Comunicado</a></li>
                          <li><a href="<?php echo site_url('consumo/index'); ?>">Consumo</a></li>
                          <li><a href="<?php echo site_url('configuracion/index'); ?>">Configuracion</a></li>
                          <li><a href="<?php echo site_url('detalle/index'); ?>">Detalle</a></li>
                          <li><a href="<?php echo site_url('evento/index'); ?>">Evento</a></li>

                        </ul>
                    </li>
                    <li class="nav-label">Tablas Jairo</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Tablas Jairo</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo site_url(); ?>/recaudaciones/index">Recaudacion</a></li>
                            <li><a href="<?php echo site_url(); ?>/rutas/index">Ruta</a></li>
                            <li><a href="<?php echo site_url(); ?>/socios/index">Socio</a></li>
                            <li><a href="<?php echo site_url(); ?>/tarifas/index">Tarifa</a></li>
                            <li><a href="<?php echo site_url(); ?>/eventos/index">Tipo_Evento</a></li>
                            <li><a href="<?php echo site_url(); ?>/usuarios/index">Usuario</a></li>


                        </ul>
                    </li>






                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
