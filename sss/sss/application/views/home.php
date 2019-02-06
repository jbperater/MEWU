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
	<style type="text/css">
	input[type=text] {
	color:#666;
    width: 130px;
    border: 2px solid #ccc;
    border-radius: 10px;
    font-size: 16px;
    background-color: white;
    background-position: 10px 12px; 
    background-repeat: no-repeat;
    padding: 10px 15px 10px 40px;
/*    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;*/

	}

	input[type=text]:focus {
	    width: 100%;
	    text-transform: uppercase;
	}

	.btn:hover {
	background: rgba(0,0,0,0);
	color: #3a7999;
	box-shadow: inset 0 0 0 3px #3a7999;
}



</style>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
								<div class="col-md-8">
									<div class="nav-header">
										<h1 id=""><img style="width:150px; height:150px;" src="<?php echo base_url();?>assets/Logo.png"> </a><a href="<?php echo base_url();?>auth/home" style=" margin-top:-50px;color: #0B0B3B">Government Mandatory</h1>
<!-- START #fh5co-menu-wrap -->
									</div>
								</div>

								<div class="col-md-2" style="margin-top: 90px;">
									<form class="activeh" ><a href="add_member" style="font-size: 20px; font: bold; float: right;" ><i class="glyphicon glyphicon-plus-sign" style="font-size: 20px; font: bold;"></i> Add Member</a></form> 
								</div>
								<div class="col-md-2" style="margin-top: 50px;">
									<nav id="fh5co-menu-wrap" role="navigation"><br>
						                        <form action="search_account" method="post" >
						                        	<input style="border: #FFF8DC solid 2px ;float: left; border-radius: 10px; background: #B0C4DE" type="text" name="search" placeholder="SEARCH...">

						                        </form>

										<div class="col-md-1" style="margin-top: 10px; margin-right: -290px;">
											<a id="btn-logout" class="glyphicon glyphicon-log-out" href="<?php echo base_url();?>login/start"></a>
											<!-- <div class ="logout">Log-out</div>
											 -->
										</div>
									</nav>									
								</div>


								
				</div>
			</header>		
		</div>
        <!-- end:fh5co-header -->
      
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
				<div class="fh5co-cover" style="background-image: url(<?php echo base_url();?>assets/images/back1.jpg);">
				  
					<div class="desc animate-box">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
	                            	<div id="errMsg" style="color:#C30; font-size:16px; font-weight:bold ">
	            	 				<?php if(!empty($_SESSION['errMsg'])) { echo "<i class='glyphicon glyphicon-remove-circle'></i>" . " " .
									$_SESSION['errMsg']; } ?>
	       							</div>
	        		 				<?php unset($_SESSION['errMsg']); ?>
									<h2 style="color:black;"><b>General Services Cooperative</b></h2>
									<p><span>Borja Road, Damilag, Manolo Fortich, Bukidnon</span></p>
									<span><a class="btn" href="<?php echo base_url();?>auth/search" style= "background-color:#124B82"> EXPLORE</a></span>

								</div>


							</div>
						</div>
					</div>
			</div>
		</div>	
			
		
		<!-- end:fh5co-hero -->
         <!-- For Modal Function -->
       
	 		
		
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

