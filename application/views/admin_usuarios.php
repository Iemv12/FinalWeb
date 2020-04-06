
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://kit.fontawesome.com/140cbedd11.js" crossorigin="anonymous"></script>
<?php
plantilla_admin::aplicar();
?>

<?php

$CI =& GET_instance();

$data = new obj_datos;

$data->id = $id;

if($_POST){

      $nombreImg = $_FILES['foto']['name'];
      $archivo = $_FILES['foto']['tmp_name'];
      $ruta = "fotousuario";
      $ruta = $ruta . "/" . $nombreImg;
      
      move_uploaded_file($archivo, $ruta);
      
        foreach($data as $prop => $val){

          $data->$prop = $_POST[$prop];
        }
        if($data->id> 0){

          $CI->db->where('id',$data->id);
          $CI->db->update('users_tbl',$data);

        }else{
          $CI->db->query("insert into `users_tbl`(nombre,usuario,email,password,rol,foto) VALUES ('$data->nombre','$data->usuario','$data->email','$data->password','2','$ruta')" );
        }
    }
    else if($id > 0){

      $CI->db->where('id',$id);
      $rs = $CI->db->get('users_tbl')->result();
      if(count($rs)>0){
          $data= $rs[0];
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
					<img src='$img'  class='rounded-circle' alt='foto' style='height:185px; width:150px;'> 
					<h4 class='display-5 text-center'>Administrador $nombre</h4>
					
					</div>

				";

					?>
	
	</div>
</div>

</header><!-- /header -->
<!-- Header-->


 <div id="content" class="p-4 p-md-5 pt-5">

               <h2 class="text-center">Usuarios</h2>
               
                  <form class="form ml-5 " style="width:80%;" method="POST"  enctype="multipart/form-data">  

                  <input class="from-control" value='<?php echo $data->id;?>' type="hidden" name="id"   >

                  <div class="row"> 
                  <div class="col-sm-12"> 
                    <div class="form-group">
                      <label for="exampleInputEmail1"><Strong>Nombre</Strong></label>
                      <input type="text" value='<?php echo $data->nombre;?>' name="nombre" id="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre" required>
                    </div>
                    </div>
                    </div>
                    
                    <div class="row "> 
                      <div class="col-sm-12"> 
                      <div class="form-group">
                        <label for="exampleInputPassword1"><Strong>Correo Electronico</Strong></label>
                        <input type="email" value='<?php echo $data->email;?>' name="email" id="email" class="form-control" id="exampleInputPassword1" placeholder="Correo Electronico" required>
                     </div>
                    </div>
                    </div>

                    <div class="row "> 
                      <div class="col-sm-12"> 
                      <div class="form-group">
                      <label for="exampleInputPassword1"><Strong>Usuario</Strong></label>
                      <input type="text" value='<?php echo $data->usuario;?>' name="usuario"  id="usuario" class="form-control" id="exampleInputPassword1" placeholder="Usuario" required>
                      </div>
                    </div>
                    </div>


                    <div class="row "> 
                      <div class="col-sm-12"> 
                      <div class="form-group">
                        <label for="exampleInputPassword1"><Strong>contraseña</Strong></label>
                        <input value='<?php echo $data->password;?>' type="password" name="password" id="password"    class="form-control" id="exampleInputPassword1" placeholder="Contrasena" required>
                      </div>

                      <div class="row "> 
                      <div class="col-sm-12"> 
                      <div class="form-group">
                        <label for="exampleInputPassword1"><Strong>Foto</Strong></label>
                        <input value='<?php echo $data->foto;?>' type="file" name="foto" id="foto " required>
                       
                      </div>
                      </div>
                      </div>

                    <button type="submit" class="btn btn-primary mx-auto d-block">Guardar</button>

                  </form>
           
              </div>  
              </div>  

              <table class='table table-hover my-5 border table-striped'>
       <thead class='thead-dark'>
         <tr>
           <th scope='col'>Nombre</th>
           <th scope='col'>Usuario</th>
           <th scope='col'>Correo</th>
           <th scope='col'>Foto</th>
           <th scope='col'>Editar</th>
         </tr>
       </thead>
       <tbody>
    
<?php  
       
       $CI =& GET_instance();

       $rs=$CI->db->query("Select * from users_tbl" )->result_array();
       
       foreach($rs as $fila){

				$nombre=  $fila['nombre'];
				$usuario=  $fila['usuario'];
        $email=  $fila['email'];
        $foto=  $fila['foto'];

        $url = base_url("index.php/Admin/admin_usuarios/{$fila['id']}");
        $img = base_url($foto);
       echo " 
       <tr>
           <td>$nombre</td>
           <td>$usuario</td>
           <td>$email</td>
           <td> <img src='$img' class='rounded-circle' alt='foto' style='height:105px; width:85;'> </td>
           <td><a class='btn btn-warning' href='{$url}'>Editar</a></td>
      </tr>
       ";     
  
          }
  
         ?>

       </tbody>
     </table>
      </div>



    </div>
    </div>
    </div>
    
    

