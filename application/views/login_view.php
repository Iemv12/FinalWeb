
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container">
		<br>
		<br>
		<div class="row justify-content-md-center">
		    <div class="col-md-4 col-md-offset-4">
				<form action="<?php echo site_url('Login/auth'); ?>" method="POST">
					<h2>Please sign in</h2>
				  <div class="form-group">
				    <label for="exampleInputUsername">Username</label>
				    <input type="username" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Username">
				    </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-primary">Sign In</button>
				</form>
		    </div>
	 	</div>
	</div>
</body>
</html>
