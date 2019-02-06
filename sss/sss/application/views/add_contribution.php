<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GSC | SSS</title>
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
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/sss.png">
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
						<nav id="fh5co-menu-wrap" role="navigation"><br>
						</nav>
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id=""><span><img src="<?php echo base_url();?>assets/Logo.png" style="width:120px; height:120px;"/><a href="<?php echo base_url();?>auth/home" style=" margin-top:-50px;color: black" >Government Mandatory
</span></a></h1>

						<!-- START #fh5co-menu-wrap -->
						
					</div>
				</div>
			</header>		
		</div>
        <!-- end:fh5co-header -->
		<div class="fh5co-hero">
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(../assets/images/ssss.jpg);">
            <div class="container"><br>
					<div class="row" style="margin-top: 15%">
                     <h4 style="color:black"><i class="glyphicon glyphicon-user" style="color:black; margin-left:15px;"></i>
             Member's Contribution</h4>
                     <div id="errMsg" style="color:#F00;">
                      <h4 style="color:#C30; font-size:13px; margin-left:10px;">
           		 <?php if(!empty($_SESSION['errMsg'])) { echo '<i class="glyphicon glyphicon-remove"></i>' . " " . $_SESSION['errMsg']; } ?></h4>
       			 </div>
        		 <?php unset($_SESSION['errMsg']); ?>
						<div class="col-md-4 animate-box">
                        <?php if(isset($records)) : foreach($records as $row) : ?>
               		  <form class="contact-form" action="update_contribution_from_admin" method="post">
                     			<div class="form-group">
               		  				<h4></h4>
									<h4 style="color:black"><b>Name: </b><?php echo ($row->lastname." ".$row->firstname." ".$row->middlename); ?></h4>
								</div>
								<div class="form-group">
               		  				<h4></h4>
									<h4 style="color:black"><b>ID Number: </b><?php echo $row->member_id; ?></h4>
								</div>
                     			<div class="form-group">
									<input type="text"  name="member_id" value="<?php echo $row->member_id ?>" hidden />
								</div>
								
								<label style="font-size:15px; color:black;">Select Month:</label>
								<div class="form-group">
									<select class="form-control"  name="month">
		                        		<option value="JANUARY">January</option>
		                       			<option value="FEBRUARY">February</option>
		                                <option value="MARCH">March</option>
		                                <option value="APRIL">April</option>
		                                <option value="MAY">May</option>
		                                <option value="JUNE">June</option>
		                                <option value="JULY">July</option>
		                                <option value="AUGUST">August</option>
		                                <option value="SEPTEMBER">September</option>
		                                <option value="OCTOBER">October</option>
		                                <option value="NOVEMBER">November</option>
		                                <option value="DECEMBER">December</option>
                            		</select>
								</div>
								<label style="font-size:15px;color:black; ">Select Year:</label>
                        		<div class="form-group">
									<?php
                            		$start=2011;
                            		$years=array();
	                            	?>
	                            	<select class="form-control"  name="year">
	                            	<?php 
	                            	while($start<=date('Y')){
	                            	?>
	                        		<option value="<?php echo $start;?>"><?php echo $start;?></option>
	                   				<?php $start++; 
	                   				}
	                   				?>
	                            	</select>
								</div>
								<label style="font-size:15px; color:black; ">Enter Amount:</label>
								<div class="form-group">
									<select class="form-control"  name="amount" placeholder="Amount*" required >
		                        		<option value="120.00">120.00</option>
		                       			<option value="175.00">175.00</option>
		                                <option value="230.00">230.00</option>
		                                <option value="285.00">285.00</option>
		                                <option value="340.00">340.00</option>
		                                <option value="395.00">395.00</option>
		                                <option value="450.00">450.00</option>
		                                <option value="505.00">505.00</option>
		                                <option value="560.00">560.00</option>
		                                <option value="615.00">615.00</option>
		                                <option value="670.00">670.00</option>
		                                <option value="725.00">725.00</option>
		                                <option value="780.00">780.00</option>
		                       			<option value="835.00">835.00</option>
		                                <option value="890.00">890.00</option>
		                                <option value="495.00">945.00</option>
		                                <option value="1000.00">1000.00</option>
		                                <option value="1055.00">1055.00</option>
		                                <option value="1110.00">1110.00</option>
		                                <option value="1165.00">1165.00</option>
		                                <option value="1220.00">1220.00</option>
		                                <option value="1275.00">1275.00</option>
		                                <option value="1330.00">1330.00</option>
		                                <option value="1385.00">1385.00</option>
		                                <option value="1440.00">1440.00</option>
		                       			<option value="1495.00">1495.00</option>
		                                <option value="1550.00">1550.00</option>
		                                <option value="1605.00">1605.00</option>
		                                <option value="1680.00">1680.00</option>
		                                <option value="1735.00">1735.00</option>
		                                <option value="1790.00">1790.00</option>
                            		</select>
                            	</div>
<!-- 								<div class="form-group">
									<input type="text" class="form-control" name="amount"  autocomplete="off" placeholder="Amount*" required>
								</div> -->
								<div class="form-group">
									<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Update Member" 
			                        style="float: left; 	background-color: #124B82; color: #FFF;">	
			                    </div>							
						</div>
						

                        </form>
                        <?php endforeach ; ?>
            			<?php endif; ?>
						<?php foreach($records as $row){ ?>
						<!--<form class="contact-form" action="search_account" method="post">
                     			
								<div class="form-group">
									<input type="text" name="search" value="<?php echo $row->member_id; ?>" hidden/>
								</div>
								<div class="form-group">
									<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Back" 
			                        style="float: right; background-color:#124B82; color: #FFF; margin-right: 50px;">	
			                    </div>							
                        </form>-->
						<?php } ?>
						
						
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

