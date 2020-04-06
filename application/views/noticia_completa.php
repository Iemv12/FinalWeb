<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Noticias</title>
  
  <link rel='stylesheet' type="text/css" href=<?php echo base_url('noticiaDesign/newspapers.css') ?> >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body style="background-color:#D6D6D6;">

<?php

$CI = &GET_instance();

$rs = $CI->db->query("Select * from noticias where id=".$_GET['id'])->result_array();


foreach ($rs as $fila) {

  $titulo =  $fila['titulo'];
  $fecha =  $fila['fecha'];
  $resumen =  $fila['resumen'];
  $contenido =  $fila['contenido'];
  $imagen =  $fila['imagen'];
  $date = date_create($fecha);
  $fechaSi=date_format($date, 'D d/m/Y');
  $img = base_url($imagen);
  $link = base_url();

  echo "<div style='width: 650px; margin: 0 auto;' class='card'>
  <div class='bacon-blog-post bacon-shadow'>
    <img src='$img' class='wp-post-image'  style='height: 400px;'>
    <div class='bacon-blog-post-inner'>
      <h2>$titulo</h2>
      <h3>Resumen</h3>
      <p>$resumen</p>
      <h3>Contenido</h3>
      <p>$contenido</p>
        <p class='text-right'>Fecha de publicacion: $fechaSi</p>
        <a class='btn btn-success' href='$link'>Atras</a>
    </div>
  </div>
</div>
" ;
}

?>
  
</body>
</html>