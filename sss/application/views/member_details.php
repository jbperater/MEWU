<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GSC</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" /> -->

  	<!-- Facebook and Twitter integration -->
	<!-- <meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" /> -->

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

<style>
#myBtn {
  display: none;
  /*position: fixed;*/
  bottom: 20px;
  right: 30px;
  z-index: 99;
  border: none;
  outline: none;
  background-color: gray;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 10px;

}

#myBtn:hover {
  background-color: #555;
}
</style>


</head>
	<body>
		
        <!-- end:fh5co-header -->
		<div class="fh5co-hero">
			<div class="fh5co-cover">
				<div class="fh5co-cover" style="background-image: url(<?php echo base_url();?>assets/images/back.jpg);">
            		<div class="container" style="margin-top: -5%; height:850px;">
					<div class="row" style="margin-top: 8%; height:350px; padding-top:30px; background-color: #F0F8FF; opacity: 0.8; border-radius: 10px;">
						<h1 ><b><center><a style="color: #000000;" href="<?php echo base_url();?>auth/home">GENERAL SERVICES COOPERATIVE</a></center></b></h1>
						<h4 style="margin-top:-2%; "><center>Borja Rd., Damilag, Manolo Fortich, Bukidnon</center></h4>
						<h2 style="margin-top:2%; font-weight: bold; " ><center>MEMBER DETAILS</center></h2>
						<table width="100%" >
							<?php
								foreach($record as $records)
								{
							?>
								
								<tr><td style="color:black; padding-left:10px;"><b>ID Number : </b><?php echo $records->member_id; ?></td><td style="color:black"><b>Date : </b><?php echo date('M d, Y') ?></td></tr>

								<tr><td style="color:black; padding-left:10px; font-weight: bold;"><b>Name : </b><?php echo ($records->lastname." ".$records->firstname." ".$records->middlename); ?></td><td style="color: black;"><b>Designation : </b><?php echo $records->designation; ?></td> </tr>

								<tr><td style="color:black; padding-left:10px;"><b>Home Address : </b><?php echo $records->home_address ?></td><td style="color: black;"><b>Department : </b><?php echo $records->department; ?></td> </tr>

								<tr><td style="color:black; padding-left:10px;"><b>Civil Status : </b><?php echo $records->civil_stat ?></td><td style="color: black;"><b>Gender : </b><?php echo $records->sex; ?></td> </tr>

								<tr><td style="color:black; padding-left:10px;"><b>Birthdate : </b><?php echo $records->birthdate ?></td> </tr>
							<?php
								
								}
							?>

						</table>

				<div  class="option_pane" style="margin-top: 30px;" >	
					<button type="button" class="btn btn-success btn-theme  glyphicon glyphicon-link"  style="width: 300px; height: 50px; border-radius: 20px; margin-bottom: -170px; background-color:green; font-size: 15px; opacity: .8;"> SOCIAL SECURITY</button>
						
					<button type="button" class="btn btn-success btn-theme  glyphicon glyphicon-link" style="width: 300px; height: 50px; border-radius: 20px; margin-bottom: -165px;margin-left: 100px;background-color:green; opacity: .8;"> Pag-IBIG FUND</button>
					
					<button type="button" class="btn btn-success btn-theme  glyphicon glyphicon-link" style="width: 300px; height: 50px; border-radius: 20px; margin-bottom: -105px; background-color:green;margin-left: 820px;opacity: .8;"> PHILHEALTH</button>
				</div>

               							
			</div>

		 <form class="contact-form" action="search" method="post" ">
            <div class="form-group">
				<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Back" 
			     style="float: right; background-color: black; color: #FFF; margin-top: 200px;">	
			 </div>					
         </form>
		</div>
	</div>
	        
</div>
</div>

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

