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
    <h1 class="well">Registrar Noticias</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>First Name</label>
								<input type="text" placeholder="Enter First Name Here.." class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Last Name</label>
								<input type="text" placeholder="Enter Last Name Here.." class="form-control">
							</div>
						</div>					
						<div class="form-group">
							<label>Address</label>
							<textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
						</div>	
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>City</label>
								<input type="text" placeholder="Enter City Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>State</label>
								<input type="text" placeholder="Enter State Name Here.." class="form-control">
							</div>	
							<div class="col-sm-4 form-group">
								<label>Zip</label>
								<input type="text" placeholder="Enter Zip Code Here.." class="form-control">
							</div>		
						</div>
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Title</label>
								<input type="text" placeholder="Enter Designation Here.." class="form-control">
							</div>		
							<div class="col-sm-6 form-group">
								<label>Company</label>
								<input type="text" placeholder="Enter Company Name Here.." class="form-control">
							</div>	
						</div>						
					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" placeholder="Enter Phone Number Here.." class="form-control">
					</div>		
					<div class="form-group">
						<label>Email Address</label>
						<input type="text" placeholder="Enter Email Address Here.." class="form-control">
					</div>	
					<div class="form-group">
						<label>Website</label>
						<input type="text" placeholder="Enter Website Name Here.." class="form-control">
					</div>
					<button type="button" class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
	</div>
</body>
</html>