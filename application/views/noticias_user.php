
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php
plantilla_usuario::aplicar();
?>

<?php

$CI =& GET_instance();

$noticias = new obj_noticias;

$noticias->fecha = date('Y-m-d');

$noticias->id = $id;

if($_POST){

            $nombreImg = $_FILES['imagen']['name'];
            $archivo = $_FILES['imagen']['tmp_name'];
            $ruta="img";
            $ruta=$ruta."/".$nombreImg;

            move_uploaded_file($archivo, $ruta);


    foreach($noticias as $prop => $val){

        $noticias->$prop = $_POST[$prop];
      }
      
        if($noticias->id> 0){

          $CI->db->where('id',$noticias->id);
          $CI->db->update('noticias',$noticias);

        }else{
            $CI->db->query("insert into `noticias` (titulo,fecha,resumen,contenido,imagen) VALUES ('$noticias->titulo','$noticias->fecha','$noticias->resumen','$noticias->contenido','$ruta')" );
        }
    }
    else if($id > 0){

      $CI->db->where('id',$id);
      $rs = $CI->db->get('noticias')->result();
      if(count($rs)>0){
          $noticias= $rs[0];
      }
    }

?>


<div class="content mt-3 ">
        
      <h2 class="text-center">Noticias</h2>

      <form class="form" method="POST" enctype="multipart/form-data"> 

      <input class="from-control" value='<?php echo $noticias->id;?>' type="hidden"  name="id"   >


        <div class="form-group">
          <label for="exampleInputEmail1">Titulo</label>
          <input type="text" value='<?php echo $noticias->titulo;?>' name="titulo" id="titulo" class="form-control"  required aria-describedby="emailHelp" placeholder="Titulo">
        </div>
        
        <div class="form-group">
          <label for="exampleInputPassword1">Fecha</label>
          <input type="date" value='<?php echo $noticias->fecha;?>'  name="fecha"  id="fecha" class="form-control"  placeholder="Fecha" required>
        </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Resumen</label>
            <textarea value='<?php echo $noticias->resumen;?>' class="form-control" name="resumen" id="resumen" rows="3" required></textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Contenido</label>
            <textarea value='<?php echo $noticias->contenido;?>' class="form-control" name="contenido" required id="contenido" rows="3"></textarea>
          </div>

          <input type="file" name="imagen" required >
   
        <button type="submit" class="btn btn-primary mx-auto d-block">Agregar</button>

      </form>
    </div>

                <section class="container">

               <?php 

                  
                        $CI =& GET_instance();

                        $rs=$CI->db->query("Select * from noticias" )->result_array();


                        foreach($rs as $fila){

                                $titulo =  $fila['titulo'];
                                $fecha=  $fila['fecha'];
                                $resumen=  $fila['resumen'];
                                $contenido =  $fila['contenido'];
                                $imagen =  $fila['imagen'];

                                $url = base_url("index.php/Usuario/noticias_user/{$fila['id']}");
              echo "
              <div class='col-sm-4'>
              <p>
              $titulo
              $fecha
              $resumen
              $contenido
              </div>
            
              ";    
       

           
                        }
            ?>
                </section>

    </div> 
    </div>