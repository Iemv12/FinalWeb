<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-RD20</title>

    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/bootstrap/dist/css/bootstrap.min.css') ?> >
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/font-awesome/css/font-awesome.min.css') ?> >
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/themify-icons/css/themify-icons.css') ?> >
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/flag-icon-css/css/flag-icon.min.css') ?> >
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/selectFX/css/cs-skin-elastic.css') ?> >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/assets/css/style.css') ?> >
    <link rel="shortcut icon" href=<?php echo base_url('assets/ico/virus.png') ?> >
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script src="https://kit.fontawesome.com/yourcode.js"></script>

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

<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
              
                <a class="navbar-brand" href=" <?php echo base_url('index.php/Admin'); ?>">COVID-RD20</a>

                                                                                  
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a  href="<?php echo base_url('index.php/Admin'); ?>"> <i class="menu-icon fa fa-home"></i>Inicio </a>
                    </li>
                  
                    <li class="active">
                        <a href=<?php echo base_url('index.php/Admin/admin_usuarios'); ?>> <i class="menu-icon fa fa-user"></i>Usuarios </a>
                    </li>

                    <li class="">
                        <a href="<?php echo base_url('index.php/Admin/Casos/Casos');?>"> <i class="menu-icon fa fa-plus"></i>Agregar casos</a>
                    </li>
                    <li class="">
                        <a href="<?php echo base_url('index.php/Admin/noticias');?>"> <i class="menu-icon fa fa-plus"></i>Agregar noticias</a>
                    </li>
                
                    <li class="">
                        <a href="<?php echo site_url('Login/logout');?>"> <i class="menu-icon fas ti-close"></i>Cerrar session</a>
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
						$foto=  $fila['foto'];
					
					}
					$img = base_url($foto);

					echo "  <h1 class='display-4 text-center'>
					<div class='row'>
					<div class='col-sm-12'>
					<img src='$img' class='rounded-circle' alt='foto' style='height:185px; width:150px;'> 
					<h4 class='display-5 text-center'>Administrador $nombre</h4>
					
					</div>

				";

					?>
                      
                
                </div>
            </div>

        </header>
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Mapa</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Casos Registrados</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
  
        <div id='mapa' class="map" style='width: 100%; height: 550px ;'></div>

        </div> 
        
    </div>
    <br>

   

	<script type='text/javascript' src=<?php echo base_url('admin_desing/vendors/jquery/dist/jquery.min.js') ?>></script>
	<script type='text/javascript' src=<?php echo base_url('admin_desing/vendors/popper.js/dist/umd/popper.min.js') ?>></script>
	<script type='text/javascript' src=<?php echo base_url('admin_desing/vendors/bootstrap/dist/js/bootstrap.min.js') ?>></script>
	<script type='text/javascript' src=<?php echo base_url('admin_desing/assets/js/main.js') ?>></script>

    <script>
    async function todoCompleto() {


        var locs = [
            <?php $query = $this->db->query('select concat("[",longitud,", ",latitud,"]",",") as coordenada  from casos');

            foreach ($query->result() as $row) {
                echo $row->coordenada;
            }  ?>
        ];

        var nombre = [
            <?php $query = $this->db->query('SELECT CONCAT("[","""",nombre," ",apellido,"""","],") AS nombre FROM casos');

            foreach ($query->result() as $row) {
                echo $row->nombre;
            }  ?>
        ];


        var fecha_contagio = [
            <?php $query = $this->db->query('SELECT CONCAT("[","""",fecha_contagio,"""","],") AS fecha_contagio FROM casos');

            foreach ($query->result() as $row) {
                echo $row->fecha_contagio;
            }  ?>
        ];

        var localidad = [
            <?php $query = $this->db->query('SELECT CONCAT("[","""",pais,", ",ciudad,"""","],") AS localidad FROM casos');

            foreach ($query->result() as $row) {
                echo $row->localidad;
            }  ?>
        ];

        var cedula = [
            <?php $query = $this->db->query('SELECT CONCAT("[","""",cedula,"""","],") AS cedula FROM casos');

            foreach ($query->result() as $row) {
                echo $row->cedula;
            }  ?>
        ];

        mapboxgl.accessToken = 'pk.eyJ1IjoiaWVtdjEyIiwiYSI6ImNrODA2enE1cjBjOXQzZHNiNDBuMHdxdnEifQ.y5ZwrnS5xln3wuWr6w3wkg';



        var map = new mapboxgl.Map({
            container: 'mapa',
            center: [-70.786324, 18.963442],
            style: 'mapbox://styles/mapbox/streets-v11',
            zoom: 6
        });
        map.addControl(new mapboxgl.NavigationControl());

        for (x = 0; x < locs.length; x++) {

            var geojson = {
                type: 'FeatureCollection',
                features: [{
                    type: 'Feature',

                    geometry: {
                        type: 'Point',
                        coordinates: locs[x]
                    }
                }]
            };
            cedulaa = cedula[x];
            URL = "http://173.249.49.169:88/api/test/consulta/" + cedulaa;
            const resp = await fetch(URL);
            const data = await resp.json();

            if (data.Ok) {

                geojson.features.forEach(function(marker) {

                    var el = document.createElement('div');
                    el.className = 'marker';



                    new mapboxgl.Marker(el)
                        .setLngLat(marker.geometry.coordinates)
                        .setPopup(new mapboxgl.Popup({
                                offset: 25
                            })

                            .setHTML('<div class="text-center"> <h5>' + nombre[x] + ' </h5> <br>' +
                                '<img width="95" height="85" src="' + data.Foto + '">' +
                                '<div class="card-body"><span class="member-degignation">Localidad: ' + localidad[x] + '</span><br>' +
                                '<span class="member-degignation">Fecha de contagio: ' + fecha_contagio[x] + '</span>' +
                                '</div></div>'))
                        .addTo(map);
                });


            } else {


                geojson.features.forEach(function(marker) {

                    var el = document.createElement('div');
                    el.className = 'marker';



                    new mapboxgl.Marker(el)
                        .setLngLat(marker.geometry.coordinates)
                        .setPopup(new mapboxgl.Popup({
                                offset: 25
                            })

                            .setHTML('<div class="text-center"> <h5>' + nombre[x] + ' </h5> <br>' +
                                '<img width="95" height="85" src="https://www.mendozapost.com/files/image/7/7142/54b6f4c45797b_1420_!.jpg?s=270345070aa93e05e936c1b6f31c0904&d=1566495815">' +
                                '<div class="card-body"><span class="member-degignation">Localidad: ' + localidad[x] + '</span><br>' +
                                '<span class="member-degignation">Fecha de contagio: ' + fecha_contagio[x] + '</span>' +
                                '</div></div>'))
                        .addTo(map);
                });
            }
        }

    }

    todoCompleto();
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

