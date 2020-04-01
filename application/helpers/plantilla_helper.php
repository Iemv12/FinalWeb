<?php

class plantilla{

  static $instancia = null;

    static function aplicar(){
  
        self::$instancia = new plantilla();
  
       }

    function __construct(){
            ?>
            
            <!DOCTYPE html>
            <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                     
     
    <?php include 'archivocss.php';?>
          </head>
           
            <body>
    
            <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4 pt-5">
                <h1><a href="index.html" class="logo">Clinica Salvacion</a></h1>
                <ul class="list-unstyled components mb-5">

                    <li>@Html.ActionLink("Home", "index", "Home")</li>

                    <li class="active">


                        <a href="#Mantenimientos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Mantenimientos</a>
                        <ul class="collapse list-unstyled" id="Mantenimientos">
                            <li>@Html.ActionLink("Paciente", "index", "Pacientes")</li>
                            <li>@Html.ActionLink("Medicos", "index", "Medicos")</li>
                            <li>@Html.ActionLink("Habitaciones", "index", "Habitaciones")</li>
                        </ul>
                    </li>
                    <li>

                        <a href="#Procesos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Procesos</a>
                        <ul class="collapse list-unstyled" id="Procesos">
                            <li>@Html.ActionLink("Cistas Medicas", "index", "Citas_Medicas")</li>
                            <li>@Html.ActionLink("Ingreso", "index", "ingresos")</li>
                            <li>@Html.ActionLink("Alta Medicas", "index", "Altamedicas")</li>
                        </ul>

                    </li>
                    <li>
                        <a href="#Consultas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Consultas</a>
                        <ul class="collapse list-unstyled" id="Consultas">

                            <li>@Html.ActionLink("Paciente", "pacinte", "MóduloConsultas")</li>
                            <li>@Html.ActionLink("Medico", "medico", "MóduloConsultas")</li>
                            <li>@Html.ActionLink("Habitacion", "habitacion", "MóduloConsultas")</li>
                            <li>@Html.ActionLink("Citas Medicas", "Citas_Médicas", "MóduloConsultas")</li>
                            <li>@Html.ActionLink("Ingreso", "ingresos", "MóduloConsultas")</li>
                            <li>@Html.ActionLink("Alta Medicas", "Alta", "MóduloConsultas")</li>

                        </ul>
                    </li>

                </ul>

            </div>
        </nav>
        <div id="content" class="p-4 p-md-5 pt-5">

<h2 class="mb-4">Sidebar #02</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <?php

    }
    function __destruct(){
          ?>

          </div>
          </div >

          <script>
        (function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
  });

})(jQuery);

    </script>
        
    </body>
    </html>

    <?php
   
  }
} 