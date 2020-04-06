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