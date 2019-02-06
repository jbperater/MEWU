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
	<body data-stellar-background-ratio="0.1" style=" background-image: url(../assets/images/ssss.jpg);">
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
			<div class="fh5co-cover" >
            <div class="container">
					<div class="row" style="margin-top: 10%">
					<?php foreach($records as $row){ ?>
						<!--<form class="contact-form" action="search_account" method="post">
                     			
								<div class="form-group">
									<input style="border:black 1px solid;" type="text" name="search" value="<?php echo $row->member_id; ?>" hidden/>
								</div>
								<div class="form-group" >
									<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Back" 
			                        style="float: right; background-color: #124B82; color: #FFF; margin-right: 50px;">	
			                    </div>							
                        </form>
						<?php } ?>-->
						<br><br><br>
                     <h4 style="color:black"><i class="glyphicon glyphicon-user" style="color:black; margin-left:15px;"></i>
             Update Member</h4>
                     <div id="errMsg" style="color:#F00;">
                      <h4 style="color:#C30; font-size:13px; margin-left:10px;">
           		 <?php if(!empty($_SESSION['errMsg'])) { echo '<i class="glyphicon glyphicon-remove"></i>' . " " . $_SESSION['errMsg']; } ?></h4>
       			 </div>
        		 <?php unset($_SESSION['errMsg']); ?>
						
                        <?php if(isset($records)) : foreach($records as $row) : ?>
		               		 	<form class="contact-form" action="update_member_from_admin" method="post">
									<div class="col-md-4 animate-box">
		                     			<label style="font-size:15px; color:black; ">Current ID Number:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="new_member_id" value="<?php echo $row->member_id ?>" placeholder="ID Number*" autocomplete="off" required>
										</div>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" name="member_id" value="<?php echo $row->member_id; ?>" hidden/>
										</div>
										<label style="font-size:15px; color:black;">Last Name:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="lastname" value="<?php echo $row->lastname ?>" placeholder="Last Name*" autocomplete="off" required>
										</div>
										<label style="font-size:15px; color:black; ">First Name:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="firstname" value="<?php echo $row->firstname ?>" placeholder="First Name*" autocomplete="off" required>
										</div>
										<label style="font-size:15px; color:black; ">Middle Name:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="middlename" value="<?php echo $row->middlename ?>" placeholder="Middle Name*" autocomplete="off" required>
										</div>
										<label style="font-size:15px; color:black; ">SSS Number:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="sss_num" value="<?php echo $row->sss_num ?>" placeholder="SSS Number*" autocomplete="off">
										</div>
										<label style="font-size:15px; color:black; ">Pagibig Number:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="hdmf" value="<?php echo $row->hdmf ?>" placeholder="pagibig Number*" autocomplete="off">
										</div>
										<label style="font-size:15px; color:black; ">Philhealth Number:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="philhealth_num" value="<?php echo $row->philhealth_num ?>" placeholder="SSS Number*" autocomplete="off">
										</div>
										<div class="form-group">
											<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Update Member" 
					                        style="float: left; 	background-color: #124B82; color: #FFF;">
					                    </div>
		                   </form>     
                        <?php endforeach ; ?>
            			<?php endif; ?>
								
					</div>
						</div>
				</div>
          
		</div>
		</div>
		<!-- end:fh5co-hero -->
		
	
		

	<!-- END fh5co-page -->
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

