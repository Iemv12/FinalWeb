<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/bootstrap/dist/css/bootstrap.min.css') ?> >
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/font-awesome/css/font-awesome.min.css') ?> >
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/themify-icons/css/themify-icons.css') ?> >
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/flag-icon-css/css/flag-icon.min.css') ?> >
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/selectFX/css/cs-skin-elastic.css') ?> >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/assets/css/style.css') ?> >

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


</head>
<body>

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
              
                <a class="navbar-brand" href=" <?php echo base_url('index.php/Admin'); ?>"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>

            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a  href="<?php echo base_url('index.php/Admin'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                  
                    <li class="active">
                        <a href=<?php echo base_url('index.php/Admin/admin_usuarios'); ?>> <i class="menu-icon fa fa-user"></i>Usuarios </a>
                    </li>

                    <h3 class="menu-title text-center">TEMA</h3>

                 
                    <li class="">
                        <a href="<?php echo base_url('index.php/Admin/Casos/Casos');?>"> <i class="menu-icon fa fa-plus"></i>Agregar casos</a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url('index.php/Admin/noticias');?>"> <i class="menu-icon fa fa-plus"></i>Agregar noticias</a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>link</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="link">link</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="link">link</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="link">link</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="link">link</a></li>
                            <li><i class="fa fa-puzzle-piece"></i><a href="link">link</a></li>
                        </ul>
                    </li>
                
                    <li class="">
                        <a href="<?php echo site_url('Login/logout');?>"> <i class="menu-icon fa fa-plus"></i>Cerrar session</a>
                    </li>
          
            </div>
        </nav>
    </aside>


    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">
            
                <div class="col-sm-12">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                  
                    <?php 
                     $CI =& GET_instance();

                       $usuario =  $this->session->userdata('usuario');

                       $rs=$CI->db->query("Select * from users_tbl where usuario = '$usuario' " )->result_array();

 
                       foreach($rs as $fila){

                        $nombre=  $fila['nombre'];
                        $usuario=  $fila['usuario'];
                         $email=  $fila['email'];
                       }

                    echo "  <h1 class='display-4 text-center'>

                    ADMIN, 
                    
                       <p> $nombre</p>
                       <p> $email</p>
                    
                    </h1> ";

                    ?>
                      
                
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
  
                 <h1 class="text-center">
                CONTENIDO <br>
                -----------<br>
                -----------<br>
                -----------<br>
                -----------<br>
                -----------<br>
                -----------<br>
                -----------<br>
                -----------<br>
                </h1>
        </div> 
    </div>

   

	<script type='text/javascript' src=<?php echo base_url('admin_desing/vendors/jquery/dist/jquery.min.js') ?>></script>
	<script type='text/javascript' src=<?php echo base_url('admin_desing/vendors/popper.js/dist/umd/popper.min.js') ?>></script>
	<script type='text/javascript' src=<?php echo base_url('admin_desing/vendors/bootstrap/dist/js/bootstrap.min.js') ?>></script>
	<script type='text/javascript' src=<?php echo base_url('admin_desing/assets/js/main.js') ?>></script>

    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);

    </script>

</body>
</html>

