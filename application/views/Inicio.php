<?php

plantilla::aplicar();
$CI = &get_instance();

?>
<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />

<div class="container">
    <h3>Mapa de Casos Registrado</h3>
    <div id='map' style='width: 950px; height: 500px;'></div>
</div>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiaWVtdjEyIiwiYSI6ImNrODA2enE1cjBjOXQzZHNiNDBuMHdxdnEifQ.y5ZwrnS5xln3wuWr6w3wkg';
    var map = new mapboxgl.Map({
        container: 'map',
        center: [-69.786324, 18.963442],
        style: 'mapbox://styles/mapbox/streets-v11',
        zoom: 6
    });
    map.addControl(new mapboxgl.NavigationControl());
</script>