
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

        foreach($data as $prop => $val){

          $data->$prop = $_POST[$prop];
        }
        if($data->id> 0){

          $CI->db->where('id',$data->id);
          $CI->db->update('users_tbl',$data);

        }else{
          $CI->db->query("insert into `users_tbl` (nombre,usuario,email,password,rol) VALUES ('$data->nombre','$data->usuario','$data->email','$data->password','2')" );
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

<div class="container my-5">
               <h2 class="text-center">Usuarios</h2>

                  <form class="form" method="POST" > 

                  <input class="from-control" value='<?php echo $data->id;?>' type="hidden" name="id"   >

                    <div class="form-group">
                      <label for="exampleInputEmail1">Nombre</label>
                      <input type="text" value='<?php echo $data->nombre;?>' name="nombre" id="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">
                    </div>
                    <div class="form-group ">
                        <label for="exampleInputPassword1">Correo Electronico</label>
                        <input type="text" value='<?php echo $data->email;?>' name="email" id="email" class="form-control" id="exampleInputPassword1" placeholder="Correo Electronico">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Usuario</label>
                      <input type="text" value='<?php echo $data->usuario;?>' name="usuario"  id="usuario" class="form-control" id="exampleInputPassword1" placeholder="Usuario">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Contrasena</label>
                        <input value='<?php echo $data->password;?>' type="password" name="password" id="password"    class="form-control" id="exampleInputPassword1" placeholder="Contrasena">
                      </div>
                  
                    <button type="submit" class="btn btn-primary mx-auto d-block">Guardar</button>

                  </form>
              </div>  



  <div>
 
<?php  
       
       $CI =& GET_instance();

       $rs=$CI->db->query("Select * from users_tbl" )->result_array();

       
       foreach($rs as $fila){

				$nombre=  $fila['nombre'];
				$usuario=  $fila['usuario'];
        $email=  $fila['email'];

        $url = base_url("index.php/Admin/admin_usuarios/{$fila['id']}");

       echo " 
    
   <div class='col-sm-4'>
       <p>
       $nombre
       $usuario
       $email
      
       </div>
       ";     

          }
  
         ?>
      </div>



    </div>
    </div>
    </div>
    
    

      

 