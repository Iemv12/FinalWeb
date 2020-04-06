<?php

class plantilla
{

	static $instancia = null;

	static function aplicar()
	{

		self::$instancia = new plantilla();
	}

	function __construct()
	{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


          <!-- CSS -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel='stylesheet' type="text/css" href=<?php echo base_url('assets/css/jquery.mCustomScrollbar.min.css') ?> >
        <link rel='stylesheet' type="text/css" href=<?php echo base_url('assets/css/css/animate.css') ?> >
        <link rel='stylesheet' type="text/css" href=<?php echo base_url('assets/css/style.css') ?> >
        <link rel='stylesheet' type="text/css" href=<?php echo base_url('assets/css/media-queries.css') ?> >
        <link rel='stylesheet' type="text/css" href=<?php echo base_url('noticiaDesign/noticias.css') ?> >

        <!-- Favicon and touch icons -->

        <link rel="shortcut icon" href=<?php echo base_url('assets/ico/favicon.png') ?> >
        <link rel="apple-touch-icon-precomposed" sizes="144x144"  href=<?php echo base_url('assets/ico/apple-touch-icon-144-precomposed.png') ?> >
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href=<?php echo base_url('assets/ico/apple-touch-icon-114-precomposed.png') ?> >
        <link rel="apple-touch-icon-precomposed"  sizes="72x72" href=<?php echo base_url('assets/ico/apple-touch-icon-72-precomposed.png') ?> >
        <link rel="apple-touch-icon-precomposed" href=<?php echo base_url('assets/ico/apple-touch-icon-57-precomposed.png') ?> >

        <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <style>
        .marker {
            background-image: url('https://cdn.icon-icons.com/icons2/1283/PNG/512/1497620001-jd22_85165.png');
            background-size: cover;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>

</head>


<body>

<body>

<!-- Wrapper -->
<div class="wrapper">

    <!-- Sidebar -->
    <nav class="sidebar">
        
        <!-- close sidebar menu -->
        <div class="dismiss">
            <i class="fas fa-arrow-left"></i>
        </div>
        
        <div class="logo">
            <h3><a href="<?php base_url(); ?>">Covid</a></h3>
        </div>
        
        <ul class="list-unstyled menu-elements">
            <li class="active">
                <a class="scroll-link" href="#section-1"><i class="fas fa-map"></i>Mapa</a>
            </li>
            <li>
                <a class="scroll-link" href="#section-2"><i class="far fa-newspaper"></i></i>Noticias</a>
            </li>
            <li>
                <a class="scroll-link" href="#section-3"><i class="fas fa-chart-bar"></i>Estadistica</a>
            </li>
            <li>
                <a href="https://t.me/Covid19Web"><i class="fa fa-telegram"></i>Subcribete a Telegram</a>
            </li>
            <li>
                <a  href="<?php echo base_url('index.php/Login'); ?>"><i class="fas fa-sign-in-alt"></i>Incio de Seccion </a>
            </li>

           
        </ul>
        
        <div class="to-top">
            <a class="btn btn-primary btn-customized-3" href="#" role="button">
                <i class="fas fa-arrow-up"></i> Top
            </a>
        </div>
        
        <div class="dark-light-buttons">
            <a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
            <a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
        </div>
    
    </nav>
    <!-- End sidebar -->
    
    <!-- Dark overlay -->
    <div class="overlay"></div>

    <!-- Content -->
    <div class="content">
    
        <!-- open sidebar menu -->
        <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
            <i class="fas fa-align-left"></i> <span>Menu</span>
        </a>
    
        <!-- Top content -->
        <div class="top-content section-container" id="top-content">
            <div class="container">
                <div class="row">
                    <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                        <h1 class="wow fadeIn text-center"><strong>Coronavirus</strong></h1>
                        <div class="description wow fadeInLeft text-center">
                            <p class="bg-ligh wow fadeIn">
                            <strong>  El COVID-19 es la enfermedad infecciosa causada por el coronavirus que se ha descubierto más recientemente. Tanto el nuevo virus como la enfermedad eran desconocidos antes de que estallara el brote en Wuhan (China) en diciembre de 2019.
                            </strong>
                            </p>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <!-- contenido de aqui para abajo -->

        <?php
}

function __destruct()
			{
                
				?>
  
  
  <script src=<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?>></script>
  <script src=<?php echo base_url('assets/js/jquery-migrate-3.0.0.min.js') ?>></script>
  <script src=<?php echo base_url('assets/js/jquery.backstretch.min.js') ?>></script>
  <script src=<?php echo base_url('assets/js/wow.min.js') ?>></script>
  <script src=<?php echo base_url('assets/js/jquery.waypoints.min.js') ?>></script>
  <script src=<?php echo base_url('assets/js/jquery.mCustomScrollbar.concat.min.js') ?>></script>
  <script src=<?php echo base_url('assets/js/scripts.js') ?>></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       
    
   


</body>

</html>

<?php

    }
}
