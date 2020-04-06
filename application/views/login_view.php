
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel='stylesheet' type="text/css" href=<?php echo base_url('login_diseno/') ?> >
	<link rel='stylesheet' type="text/css" href=<?php echo base_url('login_diseno/vendor/bootstrap/css/bootstrap.min.css') ?> >
	<link rel='stylesheet' type="text/css" href=<?php echo base_url('login_diseno/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?> >
	<link rel='stylesheet' type="text/css" href=<?php echo base_url('login_diseno/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?> >
	<link rel='stylesheet' type="text/css" href=<?php echo base_url('login_diseno/vendor/animate/animate.css') ?> >
	<link rel='stylesheet' type="text/css" href=<?php echo base_url('login_diseno/vendor/css-hamburgers/hamburgers.min.css') ?> >
	<link rel='stylesheet' type="text/css" href=<?php echo base_url('login_diseno/vendor/animsition/css/animsition.min.css') ?> >
	<link rel='stylesheet' type="text/css" href=<?php echo base_url('login_diseno/vendor/select2/select2.min.css') ?> >
	<link rel='stylesheet' type="text/css" href=<?php echo base_url('login_diseno/vendor/daterangepicker/daterangepicker.css') ?> >
	<link rel='stylesheet' type="text/css" href=<?php echo base_url('login_diseno/css/util.css') ?> >
	<link rel='stylesheet' type="text/css" href=<?php echo base_url('login_diseno/css/main.css') ?> >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="shortcut icon" href=<?php echo base_url('assets/ico/virus.png') ?> >

</head>
<body>


	<div class="limiter">        
		<div class="container-login100" style="background-image: url( <?php echo base_url('login_diseno/images/bg-01.jpg') ?>);">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" action="<?php echo site_url('Login/auth'); ?>" method="POST" >

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="usuario" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>


	<script type='text/javascript' src=<?php echo base_url('login_diseno/js/main.js') ?>></script>
	<script type='text/javascript' src=<?php echo base_url('login_diseno/vendor/animsition/js/animsition.min.js') ?>> </script>
	<script type='text/javascript' src=<?php echo base_url('login_diseno/vendor/bootstrap/js/popper.js') ?>> </script>
	<script type='text/javascript' src=<?php echo base_url('login_diseno/vendor/bootstrap/js/bootstrap.min.js') ?>> </script>
	<script type='text/javascript' src=<?php echo base_url('login_diseno/vendor/select2/select2.min.js') ?>> </script>
	<script type='text/javascript' src=<?php echo base_url('login_diseno/vendor/daterangepicker/moment.min.js') ?>> </script>
	<script type='text/javascript' src=<?php echo base_url('login_diseno/vendor/daterangepicker/daterangepicker.js') ?>> </script>
	<script type='text/javascript' src=<?php echo base_url('login_diseno/vendor/countdowntime/countdowntime.js') ?>> </script>
	<script type='text/javascript' src=<?php echo base_url('login_diseno/js/main.js') ?>> </script>


</body>
</html>
