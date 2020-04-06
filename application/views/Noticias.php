<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<?php
plantilla_admin::aplicar();
?>

<?php

$CI = &GET_instance();

$noticias = new obj_noticias;

$noticias->fecha = date('Y-m-d');

$noticias->id = $id;

if ($_POST) {


  $nombreImg = $_FILES['imagen']['name'];
  $archivo = $_FILES['imagen']['tmp_name'];
  $ruta = "noticias";
  $ruta = $ruta . "/" . $nombreImg;

  move_uploaded_file($archivo, $ruta);


  foreach ($noticias as $prop => $val) {

    $noticias->$prop = $_POST[$prop];
  }

  if ($noticias->id > 0) {

    $CI->db->where('id', $noticias->id);
    $CI->db->update('noticias', $noticias);
  } else {
    $CI->db->query("insert into `noticias` (titulo,fecha,resumen,contenido,imagen) VALUES ('$noticias->titulo','$noticias->fecha','$noticias->resumen','$noticias->contenido','$ruta')");

    //telegram
    $apiToken = "1010888319:AAEnvd4TG4jFZP_9w7s_HauFYruh8mxNJLI";
    $msg = 'Noticia nueva con relacion al coronavirus.
              
Visita nuestra pagina web para obtener mas informacion acerca de este.
          
Esperemos que sean noticas buenas. 
              ';

    foreach ($_POST as $clave => $valor) {
      $msg = str_replace("{{$clave}}", $valor, $msg);
    }

    $data = [
      'chat_id' => '@Covid19Web',
      'text' => $msg
    ];

    $response = getSslPage("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
    //telegram
  }
} else if ($id > 0) {

  $CI->db->where('id', $id);
  $rs = $CI->db->get('noticias')->result();
  if (count($rs) > 0) {
    $noticias = $rs[0];
  }
}

?>

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

</header><!-- /header -->
<!-- Header-->



<div id="content" class="p-4 p-md-5 pt-5">
        
      <h2 class="text-center">Noticias</h2>

      <form class="form  mx-auto d-block" style="width: 80%;" method="POST" enctype="multipart/form-data"> 

      <input class="from-control" value='<?php echo $noticias->id;?>' type="hidden"  name="id"   >


        <div class="form-group">
          <label for="exampleInputEmail1"><strong>Titulo<strong></label>
          <input type="text" value='<?php echo $noticias->titulo;?>' name="titulo" id="titulo" class="form-control"  required aria-describedby="emailHelp" placeholder="Titulo">
        </div>
        
        <div class="form-group">
          <label for="exampleInputPassword1"><strong>Fecha<strong></label>
          <input type="date" value='<?php echo $noticias->fecha;?>'  name="fecha"  id="fecha" class="form-control"  placeholder="Fecha" required>
        </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1"><strong>Resumen</strong></label>
            <textarea value='<?php echo $noticias->resumen;?>' class="form-control" name="resumen" id="resumen" rows="3" required></textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1"><strong>Contenido<strong></label>
            <textarea value='<?php echo $noticias->contenido;?>' class="form-control" name="contenido" required id="contenido" rows="3"></textarea>
          </div>

          <input type="file" name="imagen" required >
   
        <button type="submit" class="btn btn-primary my-1 mx-auto d-block">Agregar</button>

      </form>
    </div>

    
                <section class="container">
                <table class="table table-hover table-striped mb-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">Fecha</th>
      <th scope="col">Resumen</th>
      <th scope="col">Contenido</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    
               <?php 
                  
                        $CI =& GET_instance();

                        $rs=$CI->db->query("Select * from noticias" )->result_array();


                        foreach($rs as $fila){

                                $titulo =  $fila['titulo'];
                                $fecha=  $fila['fecha'];
                                $resumen=  $fila['resumen'];
                                $contenido =  $fila['contenido'];
                                $imagen =  $fila['imagen'];

                                
             $url = base_url("index.php/Admin/Noticias/{$fila['id']}");
              echo "
              <div class='col-sm-4'>
              <p>
              <tr>
                <td>$titulo</td>
                <td>$fecha</td>
                <td>$resumen</td>
                <td>$contenido</td>
                <td><a class='btn btn-warning' href='{$url }'>Editar</a></td>
              </tr>
              </div>
            
              ";    
                        }
            ?>

</tbody>
</table>

                </section>

    </div> 
    </div>
