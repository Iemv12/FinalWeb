
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://kit.fontawesome.com/140cbedd11.js" crossorigin="anonymous"></script>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/card.css') ?> >



  </head>
<body>
    
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
            <div class="form-row">
            <div class="col">
            <input value='<?php echo $data->password;?>' type="password" name="password" id="password"    class="form-control" id="exampleInputPassword1" placeholder="Contrasena">
            </div>

            <div class="col">
            <button class="btn btn-primary" type="button" onclick="mostrarContrasena()"><i class="far fa-eye"></i></button>
          </div>
          </div>

          </div>
      <br>
        <button type="submit" class="btn btn-primary mx-auto d-block">Guardar</button>

      </form>
    </div>
    

 <section>

       <?php  
       
       $CI =& GET_instance();

       $rs=$CI->db->query("Select * from users_tbl" )->result_array();

       
       foreach($rs as $fila){

				$nombre=  $fila['nombre'];
				$usuario=  $fila['usuario'];
        $email=  $fila['email'];

        $url = base_url("index.php/Admin/admin_usuarios/{$fila['id']}");

       echo " 
       <div class='container'>
       <div class='row userMain'>
           <div class='col-md-3 col-sm-4'>
           <form class='form' method='POST' > 

       <div class='userBlock'>
       <div class='backgrounImg'>
           <img src='https://preview.ibb.co/miQjb7/photography4.jpg'>
       </div>
       <div class='userImg'>
           <img src='https://image.ibb.co/es4AG7/author4.jpg'>
       </div>
       <div class='userDescription'>
           <h5 name='nombre'><b>$nombre</b></h5>
           <p> <b>$usuario</b></p>
          
           <p><b>$email</b></p>
        
          <a href='{$url}'>Editar</a> 

       </div>
       <form>
   </div>
       
       ";     

          }
  
         ?>

        
           
       </div>
    </div>
</div>


  </section>
  
  <script>
  function mostrarContrasena(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
</script>
 






</body>
</html>