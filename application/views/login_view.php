<!DOCTYPE html>
<html lang="en">
<head>
	<title>Inicio de Sesi&oacuten</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel='stylesheet' type="text/css" href=<?php echo base_url('loginDesing/') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('loginDesing/vendor/bootstrap/css/bootstrap.min.css') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('loginDesing/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('loginDesing/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('loginDesing/vendor/animate/animate.css') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('loginDesing/vendor/css-hamburgers/hamburgers.min.css') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('loginDesing/vendor/animsition/css/animsition.min.css') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('loginDesing/vendor/select2/select2.min.css') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('loginDesing/vendor/daterangepicker/daterangepicker.css') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('loginDesing/css/util.css') ?> >
<link rel='stylesheet' type="text/css" href=<?php echo base_url('loginDesing/css/main.css') ?> >

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="icon" type="image/png" href=<?php echo base_url('loginDesing/images/icons/favicon.ico') ?> >

</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(<?php echo base_url('loginDesing/images/bg-01.jpg')?>);">
					<span class="login100-form-title-1">
						Iniciar Sesi&oacuten
					</span>
				</div>

				<form class="login100-form validate-form" action="<?php echo site_url('Login/auth'); ?>" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Usuario es Requerido">
						<span class="label-input100">Usuarios</span>
						<input class="input100" type="text" name="usuario" placeholder="Coloque Usuario">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Contraseña es Requerido">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="password" placeholder="Coloque Contraseña">
						<span class="focus-input100"></span>
					</div>
					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Olvido la contraseña?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Iniciar Sesi&oacuten
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

<script type='text/javascript' src=<?php echo base_url('loginDesing/js/main.js') ?>></script>
<script type='text/javascript' src=<?php echo base_url('loginDesing/vendor/animsition/js/animsition.min.js') ?>> </script>
<script type='text/javascript' src=<?php echo base_url('loginDesing/vendor/bootstrap/js/popper.js') ?>> </script>
<script type='text/javascript' src=<?php echo base_url('loginDesing/vendor/bootstrap/js/bootstrap.min.js') ?>> </script>
<script type='text/javascript' src=<?php echo base_url('loginDesing/vendor/select2/select2.min.js') ?>> </script>
<script type='text/javascript' src=<?php echo base_url('loginDesing/vendor/daterangepicker/moment.min.js') ?>> </script>
<script type='text/javascript' src=<?php echo base_url('loginDesing/vendor/daterangepicker/daterangepicker.js') ?>> </script>
<script type='text/javascript' src=<?php echo base_url('loginDesing/vendor/countdowntime/countdowntime.js') ?>> </script>
<script type='text/javascript' src=<?php echo base_url('loginDesing/js/main.js') ?>> </script>


</body>
</html>