<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel='stylesheet' type="text/css" href=<?php echo base_url('registros_design/registros.css') ?> >
 

<div class="container">
    <h1 class="well">Registrar Casos</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Nombre</label>
								<input type="text" placeholder="Nombre" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Apellido</label>
								<input type="text" placeholder="Apellido" class="form-control">
							</div>
                        </div>			
                        <div class="form-group">
						<label>Cedula</label>
						<input type="text" placeholder="Cedula" class="form-control">
                    </div>	
                    <div class="row">
							<div class="col-sm-6 form-group">
								<label>Pais</label>
								<input type="text" placeholder="Pais" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Ciudad</label>
								<input type="text" placeholder="Ciudad" class="form-control">
							</div>
                        </div>	
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label>Latitud</label>
								<input type="text" placeholder="Latitud" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Longitud</label>
								<input type="text" placeholder="Longitud" class="form-control">
							</div>
                        </div>
                        <div class="row">
							<div class="col-sm-6 form-group">
								<label>Fecha Nacimiento</label>
								<input type="date" placeholder="Fecha Nacimiento" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Fecha contagio</label>
								<input type="date" placeholder="Fecha contagio" class="form-control">
							</div>
                        </div>
					<button type="submit" class="btn btn-lg btn-info">Registrar</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
</body>
</html>