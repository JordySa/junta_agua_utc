
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
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <link href="<?php echo base_url(); ?>assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/plugins-init/datatables.init.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins-init/datatables.init.js"></script>
        <!-- Jquery Validation -->
        <script src="<?php echo base_url(); ?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="<?php echo base_url(); ?>assets/js/plugins-init/jquery.validate-init.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="<?php echo base_url(); ?>assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

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
            <a href="<?php echo base_url(); ?>/" class="brand-logo">
                <img class="logo-abbr" src="<?php echo base_url(); ?>assets/images/logo.png" alt="">
                <img class="logo-compact" src="<?php echo base_url(); ?>assets/images/logo-text.png" alt="">
                <img class="brand-title" src="<?php echo base_url(); ?>assets/images/logo-text.png" alt="">
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

                    <li class="nav-label">Usuarios</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Usuarios</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo site_url('usuarios/index'); ?>">Lista Usuarios</a></li>
                            <li><a href="<?php echo site_url('perfiles/index'); ?>">Perfil</a></li>
                            <li><a href="<?php echo site_url('socios/index'); ?>">Socios</a></li>
                            <li><a href="<?php echo site_url(); ?>/rutas/index">Ruta</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Medidor</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Medidores</span></a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo site_url('medidores/index'); ?>">Lista Medidores</a></li>

                            <li><a href="<?php echo site_url('rutas/index'); ?>">Ruta</a></li>
                            <li><a href="<?php echo site_url('tarifas/index'); ?>">Tarifa</a></li>
                            <li><a href="<?php echo site_url('excedentes/index'); ?>">Excedente</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Eventos</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Eventos</span></a>
                        <ul aria-expanded="false">
                        <li><a href="<?php echo site_url('evento/index'); ?>">Lista Evento</a></li>
                        <li><a href="<?php echo site_url(); ?>/eventos/index">Tipo_Evento</a></li>
                            <li><a href="<?php echo site_url('comunicado/index'); ?>">Comunicado</a></li>
                            <li><a href="<?php echo site_url('tarifas/index'); ?>">Tarifa</a></li>
                            <li><a href="<?php echo site_url('excedentes/index'); ?>">Excedente</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Recaudacion</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Recaudacion</span></a>
                        <ul aria-expanded="false">
                        <li><a href="<?php echo site_url(); ?>/recaudaciones/index">Recaudacion</a></li>
                        <li><a href="<?php echo site_url('detalle/index'); ?>">Detalle</a></li>
                        <li><a href="<?php echo site_url('consumo/index'); ?>">Consumo</a></li>
                        <li><a href="<?php echo site_url(); ?>/tarifas/index">Tarifa</a></li>
                            <li><a href="<?php echo site_url('excedentes/index'); ?>">Excedente</a></li>
                        </ul>
                    </li>

                    <li class="nav-label">Extras</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                                class="icon icon-app-store"></i><span class="nav-text">Extras</span></a>
                        <ul aria-expanded="false">
                          <li><a href="<?php echo site_url('configuracion/index'); ?>">Configuracion</a></li>



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
