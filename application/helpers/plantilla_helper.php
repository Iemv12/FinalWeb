<?php

class plantilla{

  static $instancia = null;

    static function aplicar(){
  
        self::$instancia = new plantilla();
  
       }

    function __construct(){
            ?>
            
            <!DOCTYPE html>
            <head>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                     

            <?php include 'archivocss.php';?>
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
	            <a href="#"><span class="fa fa-home mr-3"></span> Home</a>
	          </li>
	          <li>
	              <a href="#"><span class="fa fa-user mr-3"></span> About</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-briefcase mr-3"></span> Works</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-sticky-note mr-3"></span> Blog</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-suitcase mr-3"></span> Gallery</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-cogs mr-3"></span> Services</a>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
	          </li>
	        </ul>

	        <div class="mb-5">
						<h3 class="h6 mb-3">Subscribe for newsletter</h3>
						<form action="#" class="subscribe-form">
	            <div class="form-group d-flex">
	            	<div class="icon"><span class="icon-paper-plane"></span></div>
	              <input type="text" class="form-control" placeholder="Enter Email Address">
	            </div>
	          </form>
					</div>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>
      <div id="content" class="p-4 p-md-5 pt-5">

Contenido
            <?php
          
    }
    
    function __destruct(){
  
          ?>

          </div>
          </div >
          <script>
(function($) {

"use strict";

var fullHeight = function() {

  $('.js-fullheight').css('height', $(window).height());
  $(window).resize(function(){
    $('.js-fullheight').css('height', $(window).height());
  });

};
fullHeight();

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

})(jQuery);
</script>
    </body>
    </html>

    <?php
   
  }
} 