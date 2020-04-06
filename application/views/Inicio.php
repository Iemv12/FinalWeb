<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<?php
plantilla::aplicar();
?>

<!-- Section 1 -->

<div class="section-1-container section-container" id="section-1">

    <div class="contenedor mx-auto d-block" style='width: 90% ;'>

        <div class="row ">

            <h2 class="mx-auto d-block my-4">Mapa de Casos Registrado</h2>

        </div>

        <hr class="bg-black" />

        <div class="row">

            <div id='mapa' class="map" style='width: 100%; height: 550px ;'></div>

        </div>

    </div>
</div>

<div class="section-2-container section-container section-container-gray-bg" id="section-2">
    <div class="container">
        <div>
            <h5 class="text-center mx-auto d-block display-4">Noticias</h5>
            <div class="row">
                <?php

                $CI = &GET_instance();

                $rs = $CI->db->query("Select * from noticias")->result_array();


                foreach ($rs as $fila) {

                    $titulo =  $fila['titulo'];
                    $fecha =  $fila['fecha'];
                    $resumen =  $fila['resumen'];
                    $contenido =  $fila['contenido'];
                    $imagen =  $fila['imagen'];
                    $date = date_create($fecha);
                    $fechaSi=date_format($date, 'D d/m/Y');

                    $url = base_url("index.php/Usuario/noticias_user/{$fila['id']}");
                    $img = base_url($imagen);

                echo "<div class='col-xs-12 col-md-6 col-lg-3'>
        <div class='card'>
        <img class='card-img-top' src='$img' alt='Card image cap'>
        <div class='card-block'>
            <h4 class='card-title'>$titulo</h4>
            <p class='card-text'>$resumen</p>
        </div>
        <br>
        <div class='card-footer'>
            <small class='text-muted'>Publicación: $fechaSi</small>
        </div>
        </div>
        </div>";}
                ?>


            </div>
        </div>
    </div>
</div>

<!-- Section 3 -->
<div class="section-3-container section-container" id="section-3">
    <div class="container">
        <h5 class="text-center mx-auto d-block display-4">Estadisticas</h5>

        <canvas id="myChart" width="410" height="120"></canvas>
    </div>
</div>




                <canvas id="myChart" width="410" height="120"></canvas>
			        </div>
		        </div>
           
             <div class="section-6-container section-container section-container-image-bg" id="section-6">
			        <div class="container">
			            <div class="row">
			                <div class="col section-6 section-description wow fadeIn">
			                    <h2>Contacte con Nosotros</h2>
			                    <div class="divider-1 wow fadeInUp"><span></span></div>
			                    <p>Enviar mensaje para cualquier inquietud.</p>
			                </div>
			            </div>
			            <div class="row">
		                	<div class="col-md-6 section-6-box wow fadeInUp">
		                		<h3>Enviado Por</h3>
		                    	<div class="section-6-form">
		                    		<form role="form" action="assets/contact.php" method="post">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="contact-email">Email</label>
				                        	<input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="contact-subject">Subject</label>
				                        	<input type="text" name="subject" placeholder="Subject..." class="contact-subject form-control" id="contact-subject">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="contact-message">Message</label>
				                        	<textarea name="message" placeholder="Message..." class="contact-message form-control" id="contact-message"></textarea>
				                        </div>
				                        <button type="submit" class="btn btn-primary btn-customized"><i class="fas fa-paper-plane"></i> Send Message</button>
				                    </form>
		                    	</div>
		                    </div>
		                    <div class="col-md-5 offset-md-1 section-6-box wow fadeInDown">
		                    	<h3 class="text-center">Recomendaciones</h3>
                                <p class="text-center "><ol>
                                <li >Limpiarse las manos con frecuencia</li>
                                <li>Evitar el contacto directo</li>
                                <li>Cubrirse la boca y la nariz con una mascarilla casera de tela al estar rodeados de personas</li>
                                <li>Cubrirse la boca al toser y estornudar</li>
                                <li>Limpie y desinfecte</li>
                                
                                <ol></p>
		                    	
		                    </div>
			            </div>
			        </div>
		        </div>
		
		        <!-- Footer -->
		        <footer class="footer-container">
		
			        <div class="container">
			        	<div class="row">
		
		                    <div class="col text-center">
		                    	&copy; Proyecto realizado por Ivan Matos y Edwal Tejada</a>.
		                    </div>
		
		                </div>
			        </div>
		
		        </footer>
	        
	        </div>
	        <!-- End content -->
        
        </div>
                
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
            center: [-69.786324, 18.963442],
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

    function graficas() {

        var acuario = <?php
                        $CI = &get_instance();
                        $rs = $CI->db->query('select fecha_nacimiento from casos')->result_array();
                        $x = 0;
                        foreach ($rs as $fila) {
                            $valor = signo_zodiaco($fila['fecha_nacimiento']);

                            if ($valor == "Acuario") {
                                $x++;
                            }
                        }
                        echo $x;
                        ?>;
        var piscis = <?php
                        $CI = &get_instance();
                        $rs = $CI->db->query('select fecha_nacimiento from casos')->result_array();
                        $x = 0;
                        foreach ($rs as $fila) {
                            $valor = signo_zodiaco($fila['fecha_nacimiento']);

                            if ($valor == "Piscis") {
                                $x++;
                            }
                        }
                        echo $x;
                        ?>;
        var aries = <?php
                    $CI = &get_instance();
                    $rs = $CI->db->query('select fecha_nacimiento from casos')->result_array();
                    $x = 0;
                    foreach ($rs as $fila) {
                        $valor = signo_zodiaco($fila['fecha_nacimiento']);

                        if ($valor == "Aries") {
                            $x++;
                        }
                    }
                    echo $x;
                    ?>;

        var tauro = <?php
                    $CI = &get_instance();
                    $rs = $CI->db->query('select fecha_nacimiento from casos')->result_array();
                    $x = 0;
                    foreach ($rs as $fila) {
                        $valor = signo_zodiaco($fila['fecha_nacimiento']);

                        if ($valor == "Tauro") {
                            $x++;
                        }
                    }
                    echo $x;
                    ?>;

        var geminis = <?php
                        $CI = &get_instance();
                        $rs = $CI->db->query('select fecha_nacimiento from casos')->result_array();
                        $x = 0;
                        foreach ($rs as $fila) {
                            $valor = signo_zodiaco($fila['fecha_nacimiento']);

                            if ($valor == "Géminis") {
                                $x++;
                            }
                        }
                        echo $x;
                        ?>;

        var cancer = <?php
                        $CI = &get_instance();
                        $rs = $CI->db->query('select fecha_nacimiento from casos')->result_array();
                        $x = 0;
                        foreach ($rs as $fila) {
                            $valor = signo_zodiaco($fila['fecha_nacimiento']);

                            if ($valor == "Cáncer") {
                                $x++;
                            }
                        }
                        echo $x;
                        ?>;
        var leo = <?php
                    $CI = &get_instance();
                    $rs = $CI->db->query('select fecha_nacimiento from casos')->result_array();
                    $x = 0;
                    foreach ($rs as $fila) {
                        $valor = signo_zodiaco($fila['fecha_nacimiento']);

                        if ($valor == "Leo") {
                            $x++;
                        }
                    }
                    echo $x;
                    ?>;
        var virgo = <?php
                    $CI = &get_instance();
                    $rs = $CI->db->query('select fecha_nacimiento from casos')->result_array();
                    $x = 0;
                    foreach ($rs as $fila) {
                        $valor = signo_zodiaco($fila['fecha_nacimiento']);

                        if ($valor == "Virgo") {
                            $x++;
                        }
                    }
                    echo $x;
                    ?>;

        var libra = <?php
                    $CI = &get_instance();
                    $rs = $CI->db->query('select fecha_nacimiento from casos')->result_array();
                    $x = 0;
                    foreach ($rs as $fila) {
                        $valor = signo_zodiaco($fila['fecha_nacimiento']);

                        if ($valor == "Libra") {
                            $x++;
                        }
                    }
                    echo $x;
                    ?>;

        var escorpion = <?php
                        $CI = &get_instance();
                        $rs = $CI->db->query('select fecha_nacimiento from casos')->result_array();
                        $x = 0;
                        foreach ($rs as $fila) {
                            $valor = signo_zodiaco($fila['fecha_nacimiento']);

                            if ($valor == "Escorpio") {
                                $x++;
                            }
                        }
                        echo $x;
                        ?>;

        var sagitario = <?php
                        $CI = &get_instance();
                        $rs = $CI->db->query('select fecha_nacimiento from casos')->result_array();
                        $x = 0;
                        foreach ($rs as $fila) {
                            $valor = signo_zodiaco($fila['fecha_nacimiento']);

                            if ($valor == "Sagitario") {
                                $x++;
                            }
                        }
                        echo $x;
                        ?>;

        var capricornio = <?php
                            $CI = &get_instance();
                            $rs = $CI->db->query('select fecha_nacimiento from casos')->result_array();
                            $x = 0;
                            foreach ($rs as $fila) {
                                $valor = signo_zodiaco($fila['fecha_nacimiento']);

                                if ($valor == "Capricornio") {
                                    $x++;
                                }
                            }
                            echo $x;
                            ?>;

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Acuario', 'Piscis', 'Aries', 'Tauro', 'Géminis', 'Cáncer', 'Leo', 'Virgo', 'Libra', 'Escorpio', 'Sagitario', 'Capricornio'],
                datasets: [{
                    label: 'Signos',
                    data: [acuario, piscis, aries, tauro, geminis, cancer, leo, virgo, libra, escorpion, sagitario, capricornio],
                    backgroundColor: [
                        'rgba(137, 189, 255 )',
                        'rgba(137, 189, 255 )',
                        'rgba(137, 189, 255 )',

                        'rgba(137, 189, 255 )',
                        'rgba(137, 189, 255 )',
                        'rgba(137, 189, 255 )',

                        'rgba(137, 189, 255 )',
                        'rgba(137, 189, 255 )',
                        'rgba(137, 189, 255 )',

                        'rgba(137, 189, 255 )',
                        'rgba(137, 189, 255 )',
                        'rgba(137, 189, 255 )',
                    ],
                    borderColor: [
                        'rgba(4, 0, 255 )',
                        'rgba(4, 0, 255 )',
                        'rgba(4, 0, 255 )',

                        'rgba(4, 0, 255 )',
                        'rgba(4, 0, 255 )',
                        'rgba(4, 0, 255 )',

                        'rgba(4, 0, 255 )',
                        'rgba(4, 0, 255 )',
                        'rgba(4, 0, 255 )',

                        'rgba(4, 0, 255 )',
                        'rgba(4, 0, 255 )',
                        'rgba(4, 0, 255 )',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }

    graficas();
    todoCompleto();
</script>