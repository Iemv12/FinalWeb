<?php

plantilla::aplicar();
$CI = &get_instance();

?>
<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/bootstrap/dist/css/bootstrap.min.css') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/font-awesome/css/font-awesome.min.css') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/themify-icons/css/themify-icons.css') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/flag-icon-css/css/flag-icon.min.css') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/selectFX/css/cs-skin-elastic.css') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/assets/css/style.css') ?> >

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
        <div class="gmap_unix card-body" >
            <div id='mapa' class="map" style='width: 950px; height: 500px;'></div>
        </div>
    </div>
</div>


<script>
    var locs = [
        <?php $query = $this->db->query('select concat("[",longitud,", ",latitud,"]",",") as coordenada  from casos');

        foreach ($query->result() as $row) {
            echo $row->coordenada;
        }  ?>
    ];
    //console.log(locs);
    mapboxgl.accessToken = 'pk.eyJ1IjoiaWVtdjEyIiwiYSI6ImNrODA2enE1cjBjOXQzZHNiNDBuMHdxdnEifQ.y5ZwrnS5xln3wuWr6w3wkg';

    console.log(locs.length);


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
        console.log(locs[x]);
        geojson.features.forEach(function(marker) {

            var el = document.createElement('div');
            el.className = 'marker';

            new mapboxgl.Marker(el)
                .setLngLat(marker.geometry.coordinates)
                .setPopup(new mapboxgl.Popup({
                        offset: 25
                    })

                    .setHTML('<h3>' + "hola" + "</h3><p class='text-center' style='font-size: 15px;'>" + "hola" + '</p>'))
                .addTo(map);
        });
    }
</script>