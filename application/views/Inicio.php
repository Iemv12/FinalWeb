<?php

plantilla::aplicar();
$CI = &get_instance();

?>
<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/bootstrap/dist/css/bootstrap.min.css') ?>>
<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/font-awesome/css/font-awesome.min.css') ?>>
<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/themify-icons/css/themify-icons.css') ?>>
<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/flag-icon-css/css/flag-icon.min.css') ?>>
<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/selectFX/css/cs-skin-elastic.css') ?>>
<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/assets/css/style.css') ?>>


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

<div class="container right-panel">
    <div class="card">
        <div class="card-header">
            <h4>Mapa de Casos Registrado</h4>
        </div>
        <div class="gmap_unix card-body">
            <div id='mapa' class="map" style='width: 950px; height: 500px;'></div>
        </div>
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

        console.log(cedula.length+" "+nombre.length+" "+localidad.length+" "+fecha_contagio.length)

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
            console.log(x);
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
                                '<img width="95" height="85" src="'+data.Foto+'">' +
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
</script>