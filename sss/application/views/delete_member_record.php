<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GSC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/Logo.png">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/superfish.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/own.css">


	<!-- Modernizr JS -->
	<script src="<?php echo base_url();?>assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
											<h1 id=""><span><img src="<?php echo base_url();?>assets/Logo.png" style="width:120px; height:120px;"/><a href="<?php echo base_url();?>auth/home" style=" margin-top:-50px; color: black" >Government Mandatory
</span></a></h1>

						<!-- START #fh5co-menu-wrap -->
			
					</div>
				</div>
			</header>		
		</div>
        <!-- end:fh5co-header -->
		<div class="fh5co-hero">
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(../assets/images/ssss.jpg);">
            <div class="container"><br><br>
					<div class="row">
    	  <div class="modal-dialog">
				<div class="loginmodal-container" style="background-color:#5b6b7a;">
					<h3 style="color:white"><center><i class="glyphicon glyphicon-warning-sign" style="color:#C30"></i> Delete Member? </center></h3>
 
            	 <small style="color:white;">Are you sure you want to delete this member?</small><br>
				  <form method="POST" action="<?php echo base_url();?>auth/delete_member_from_admin">
                  	<input type="text" name="id" value="<?php echo $_GET['id'] ?>" hidden="">
					<input type="submit" name="yes" class="login loginmodal-submit" value="YES">
                    <input type="submit" name="no" class="login loginmodal-submit" value="NO" style="background-color:#C30">
				  </form>
				</div>
			</div>
		  </div>
	 <!-- For Modal Function End -->
                             
								</div></div>
						</div>
                        	
				</div>
          
		</div>
		</div>
		<!-- end:fh5co-hero -->
		
	
		
	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url();?>assets/js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url();?>assets/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="<?php echo base_url();?>assets/js/hoverIntent.js"></script>
	<script src="<?php echo base_url();?>assets/js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="<?php echo base_url();?>assets/js/main.js"></script>

	</body>
</html>
