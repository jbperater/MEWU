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
		input[type=text]:focus {
	    text-transform: uppercase;
	}


	</style>
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
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(../assets/images/ssss.jpg); back">
            <div class="container"><br>
					<div class="row" style="margin-top: 15%" >
                     <h4 style="color:black"><i class="glyphicon glyphicon-user" style="color:black; margin-left:15px;"></i>
             Member's Personal Information</h4>
                     <div id="errMsg" style="color:#F00;">
                      <h4 style="color:#C30; font-size:14px; margin-left:10px;">
           		 <?php if(!empty($_SESSION['errMsg'])) { echo '<i class="glyphicon glyphicon-remove"></i>' . " " . $_SESSION['errMsg']; } ?></h4>
       			 </div>
        		 <?php unset($_SESSION['errMsg']); ?>
						
               		  <form class="contact-form" action="save_member_from_admin" method="post">
               		  		<div class="col-md-4 animate-box">
               		  			
               		  			<label style="font-size:15px; color:black; ">ID Number*</label>
               		  			<div class="form-group">
									<input style="border:black 1px solid;" type="number" class="form-control" name="member_id" placeholder="ID Number*" autocomplete="off" required>
								</div>
								<label style="font-size:15px; color:black; ">Last Name</label>
								<div class="form-group">
									<input style="border:black 1px solid;"type="text" class="form-control" name="lastname" placeholder="Last Name" autocomplete="off" required>
								</div>
								<label style="font-size:15px;color:black; ">First Name</label>
								<div class="form-group">
									<input style="border:black 1px solid;" type="text" class="form-control" name="firstname" placeholder="First Name" autocomplete="off" required>
								</div>
								<label style="font-size:15px; color:black; ">Middle Name</label>
								<div class="form-group">
									<input style="border:black 1px solid;" type="text" class="form-control" name="middlename" placeholder="Middle Name" autocomplete="off">
								</div>
								<label style="font-size:15px; color:black; ">Home Address</label>
								<div class="form-group">
									<input style="border:black 1px solid;" type="text" class="form-control" name="homeaddress" placeholder="Home Address" autocomplete="off">
								</div>
								<label style="font-size:15px; color:black; ">Gender</label>
								<div class="form-group">
									<select class="form-control" name="Gender">
										<option>GENDER</option>
										<option value="MALE">MALE</option>
										<option value="FEMALE">FEMALE</option>
									</select>
								</div>
							</div>

							<div class="col-md-4 animate-box" style="margin-left: 150px;">
								<label style="font-size:15px; color:black; ">Civil Status</label>
								<div class="form-group">
									<select class="form-control" name="Status">
										<option>STATUS</option>
										<option value="SINGLE">SINGLE</option>
										<option value="MARRIED">MARRIED</option>
										<option value="WIDOW">WIDOW</option>
									</select>
								</div>
								<label style="font-size:15px; color:black; ">Birthdate</label>
								<div class="form-group">
									<input style="border:black 1px solid;" type="text" class="form-control" name="birthdate" placeholder="Birthdate" autocomplete="off">
								</div>
								<label style="font-size:15px; color:black; ">SSS Number*</label>
								<div class="form-group">
									<input style="border:black 1px solid;" type="text" class="form-control" name="sss" placeholder="SSS Number" autocomplete="off" required>
								</div>
								<label style="font-size:15px; color:black; ">Philhealth Number*</label>
								<div class="form-group">
									<input style="border:black 1px solid;" type="text" class="form-control" name="philhealth" placeholder="Philhealth" autocomplete="off" required>
								</div>
								<label style="font-size:15px; color:black; ">HDMF*</label>
								<div class="form-group">
									<input style="border:black 1px solid;" type="text" class="form-control" name="hdmf" placeholder="HDMF" autocomplete="off" required>
								</div>
								<div class="form-group">
									<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Add Member" 
			                        style="float: right; 	background-color: #124B82; color: #FFF;">		
			                        </div>
							</div>
                        </form>
						
						
						</div>
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

