<?php

class plantilla
{

	static $instancia = null;

	static function aplicar()
	{

		self::$instancia = new plantilla();
	}

	function __construct()
	{
?>

		<!DOCTYPE html>

		<head>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
			<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
			<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/font-awesome/css/font-awesome.min.css') ?>>
			<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/themify-icons/css/themify-icons.css') ?>>
			<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/flag-icon-css/css/flag-icon.min.css') ?>>
			<link rel='stylesheet' type="text/css" href=<?php echo base_url('admin_desing/vendors/selectFX/css/cs-skin-elastic.css') ?>>

			<link rel='stylesheet' type="text/css" href=<?php echo base_url('pagina_inicio/plantilla_principal.css') ?>>

		</head>

		<body>

			<div class="wrapper d-flex align-items-stretch">
				<nav id="sidebar">
					<div class="custom-menu">
						<button type="button" id="sidebarCollapse" class="btn btn-primary">
							<i class="fa fa-bars"></i>
							<span class="sr-only">Toggle Menu</span>
						</button>
					</div>
					<div class="p-4">
						<h1><a href="index.html" class="logo">Portfolic <span>Portfolio Agency</span></a></h1>
						<ul class="list-unstyled components mb-5">
							<li class="active">
								<a href="#"><span class="fa fa-home mr-3"></span>Mapa</a>
							</li>
							<li>
								<a href="#"><span class="fa fa-user mr-3"></span>Noticias</a>
							</li>
							<li>
								<a href="#"><span class="fa fa-user mr-3"></span>Subscribete</a>
							</li>
							<li>
								<a href="#"><span class="fa fa-user mr-3"></span>Estadistica</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/Login'); ?>"><span class="fa fa-sticky-note mr-3"></span>Ingresar como Admin</a>
							</li>

						</ul>

						<div class="mb-5  text-center">
							<h3 class="h6 mb-3">Suscribete a Telegram</h3>
							<a type="button" href="https://t.me/Covid19Web" class="btn btn-sm social dropbox" style="margin-bottom: 4px">
                                    <i class="fa fa-telegram"></i>
                                    <span>Telegram</span>
							</a>
						</div>

						<div class="footer">
							<p>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</p>
						</div>

					</div>
				</nav>
				<div id="content" class="p-4 p-md-5 pt-5">


				<?php

			}

			function __destruct()
			{

				?>

				</div>
			</div>
			<script>
				(function($) {

					"use strict";

					var fullHeight = function() {

						$('.js-fullheight').css('height', $(window).height());
						$(window).resize(function() {
							$('.js-fullheight').css('height', $(window).height());
						});

					};
					fullHeight();

					$('#sidebarCollapse').on('click', function() {
						$('#sidebar').toggleClass('active');
					});

				})(jQuery);
			</script>
		</body>

		</html>

<?php

			}
		}
