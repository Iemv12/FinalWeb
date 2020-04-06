<?php

class plantilla_usuario
{

	static $instancia = null;

	static function aplicar()
	{

		self::$instancia = new plantilla_usuario();
	}

	function __construct()
	{
?>


	<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/bootstrap/dist/css/bootstrap.min.css') ?> >
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/font-awesome/css/font-awesome.min.css') ?> >
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/themify-icons/css/themify-icons.css') ?> >
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/flag-icon-css/css/flag-icon.min.css') ?> >
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/selectFX/css/cs-skin-elastic.css') ?> >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/assets/css/style.css') ?> >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/card.css') ?> >
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
	<link rel="shortcut icon" href=<?php echo base_url('assets/ico/virus.png') ?> >

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<link rel='stylesheet' type="text/css" href=<?php echo base_url('registros_design/select2-bootstrap.css') ?> >
			

    </head>

<body>

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
             
                <a class="navbar-brand" href=" <?php echo base_url('index.php/Usuario'); ?>">COVID-RD20</a>

            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url('index.php/Usuario'); ?>"> <i class="menu-icon fa fa-home"></i>Inicio </a>
                    </li>
                  
                 
                    <li class="">
                        <a href="<?php echo base_url('index.php/Usuario/Casos_user/Casos_user');?>"> <i class="menu-icon fa fa-plus"></i>Agregar casos</a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url('index.php/Usuario/noticias_user');?>"> <i class="menu-icon fa fa-plus"></i>Agregar noticias</a>
                    </li>
               
                
                    <li class="">
                        <a href="<?php echo site_url('Login/logout');?>"> <i class="menu-icon fas ti-close"></i>Cerrar session</a>
                    </li>
          
            </div>
        </nav>
    </aside>
 <!-- Navbar  -->
 
<?php

}

function __destruct()
			{
                
				?>

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

<?php

			}
		}
