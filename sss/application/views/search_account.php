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
<style type="text/css">
	table#miyazaki { 
  margin: 0 auto;
  border-collapse: collapse;
  font-family: Agenda-Light, sans-serif;
  font-weight: 100; 
  background: #103f6b; color: #fff;
  text-rendering: optimizeLegibility;
  border-radius: 5px; 
}
table#miyazaki caption { 
  font-size: 16px; color: #CCC;
  margin: 1rem;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center left, center right;
  margin: 3px; 
}
table#miyazaki thead th { font-weight: 600; }
table#miyazaki thead th, table#miyazaki tbody td { 
  padding: .8rem; font-size: 1.4rem;
}
table#miyazaki tbody td { 
  padding: .8rem; font-size: 1.4rem;
  color: #444; background: #eee; 
}
table#miyazaki tbody tr:not(:last-child) { 
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;  
}

@media screen and (max-width: 600px) {
  table#miyazaki caption { background-image: none; }
  table#miyazaki thead { display: none; }
  table#miyazaki tbody td { 
    display: block; padding: .6rem; 
  }
  table#miyazaki tbody tr td:first-child { 
    background: #666; color: #fff; 
  }
	table#miyazaki tbody td:before { 
    content: attr(data-th); 
    font-weight: bold;
    display: inline-block;
    width: 6rem;  
  }
}
	</style>
	
	<style>
#myBtn {
  display: none;
  position: fixed;
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
 
<style> 
/*input[type=text] {
	color:#666;
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    background-color: white;
    background-image:url(<?php echo base_url();?>assets/images/searchicon.png);
    background-position: 10px 12px; 
    background-repeat: no-repeat;
    padding: 10px 15px 10px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}*/


/* Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    font-size: 12px;
    border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

</style>


	<!-- Modernizr JS -->
	<script src="<?php echo base_url();?>assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
	<body>
		<div id="fh5co-wrapper" style="background-image: url(../assets/images/ssss.jpg);">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
											<h1 id=""><span><img src="<?php echo base_url();?>assets/Logo.png" style="width:120px; height:120px;"/><a href="<?php echo base_url();?>auth/home" style=" margin-top:-50px;font-weight: bold;" >Government Mandatory
											</span></a></h1>

										<div class="col-md-2" style="margin-top: -150px; float: right;">
									<nav id="fh5co-menu-wrap" role="navigation"><br>
						                        <form action="search_account" method="post" >
						                        	<input style="border: #FFF8DC solid 2px ;float: right;  background: white;" type="text" name="search" placeholder="Search">

						                        </form>
						                       </nav>
						                      </div>
						<!-- START #fh5co-menu-wrap -->
			
					</div>
				</div>
			</header>		
		</div>
        <!-- end:fh5co-header -->
		<div class="fh5co-hero">
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" >
            <div class="container"><br>
					<div class="row" style="margin-top: 13%">
                        <table id="miyazaki" width="100%">
                        <thead>
						<tr><th>ID Number<th>Last Name<th>First Name<th>Middle Name<th><center>Controls
						<tbody>
                        <?php
							if($search_account->num_rows() > 0 ){
								foreach($search_account->result() as $row)
								{
							?>

                            	<tr>
                            		<td><?php echo $row->member_id; ?></td>
                            		
                            		<td><?php echo $row->lastname; ?></td>
                            		<td><?php echo $row->firstname; ?></td>
                            		<td><?php echo $row->middlename; ?></td>
                                    <td>
	                                    <div class="dropdown">
											<button onclick="myFunction()" class="dropbtn"><i class="glyphicon glyphicon-plus-sign"></i>Contribution</button>
											  <div id="myDropdown" class="dropdown-content">
											    <a href="http://localhost/sss/auth/add_contribution?id=<?php echo $row->member_id ?>" >SSS</a>
											    <a href="http://localhost/sss/auth/add_contribution_pagibig?id=<?php echo $row->member_id ?>">PAG-IBIG</a>
											    <a href="http://localhost/sss/auth/add_contribution_philhealth?id=<?php echo $row->member_id ?>">PHILHEALTH</a>
											  </div>
										</div>
                                    <!-- <a href="http://localhost/sss/auth/add_contribution?id=<?php echo $row->member_id ?>" style="color:#444;"><i class="glyphicon glyphicon-plus-sign"></i> Contribution</a> -->
                                    <a href="http://localhost/sss/auth/update_member?id=<?php echo $row->member_id ?>" style="color:#444; margin-right:5px"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                    <a href="http://localhost/sss/auth/details_member?id=<?php echo $row->member_id ?>" style="color:#444; margin-right:5px"><i class="glyphicon glyphicon-list-alt"></i> Details</a>
                                    <a href="http://localhost/sss/auth/delete_member_record?id=<?php  echo $row->member_id ?>" style="color:#444; margin-right:-140px"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                                    <!-- For Modal Function -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h3 ><center><i class="glyphicon glyphicon-warning-sign" style="color:#C30"></i> Delete Account? </center></h3>
 
            	 <small>Are you sure you want to delete this account?</small><br>
				  <form method="POST" action="<?php echo base_url();?>auth/delete_member_record">
                  	<input type="text" name="member_id" value="<?php echo $row->id;  ?>" hidden="">
					<input type="submit" name="login" class="login loginmodal-submit" value="YES">
				  </form>
				</div>
			</div>
		  </div>
	 <!-- For Modal Function End -->
                                    
                                    
                                    
                                    </td>
                                
                                		<!-- end:fh5co-hero -->
		     
                                </tr>
                                
                                
                                
                            <?php
								}
								
							}
							else
							{
						?>
                        	<tr>
                            	<td colspan="8">No Data Found</td>
                            </tr>
                        <?php
							}
							?>

                         
                        </table>
								
						</div>
					</div>
				</div>
          
		</div>
		</div>
	
		
	</div>
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h3 ><center><i class="glyphicon glyphicon-user"></i> Add Member</center></h3><br>
            	 <div id="errMsg" style="color:#C30; font-size:16px; font-weight:bold ">
            	 				<?php if(!empty($_SESSION['errMsg'])) { echo "<i class='glyphicon glyphicon-remove-circle'></i>" . " " .
								$_SESSION['errMsg']; } ?>
       							</div>
				  <form method="POST" action="<?php echo base_url();?>auth/save_member_from_admin">
					<div class="form-group">
									<label style="font-size:15px;">SSS Number</label>
									<input type="text" class="form-control" name="member_id" placeholder="SSS Number*" autocomplete="off" required>
								</div>
								<label style="font-size:15px;">Last Name</label>
								<div class="form-group">
									<input type="text" class="form-control" name="lastname" placeholder="Last Name" autocomplete="off" required>
								</div>
								<label style="font-size:15px;">First Name</label>
								<div class="form-group">
									<input type="text" class="form-control" name="firstname" placeholder="First Name" autocomplete="off" required>
								</div>
								<label style="font-size:15px;">Middle Name</label>
								<div class="form-group">
									<input type="text" class="form-control" name="middlename" placeholder="Middle Name" autocomplete="off" >
								</div>
								<input type="submit" name="login" class="login loginmodal-submit" value="Add">
				  </form>
				
				</div>
			</div>
		  </div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->
	
	
	<button onclick="topFunction()" id="myBtn" title="Go to top" class="glyphicon glyphicon-arrow-up" style="margin-top:42%"></button>


		<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
		</script>
    <style type="text/javascript">
	var headertext = [],
headers = document.querySelectorAll("#miyazaki th"),
tablerows = document.querySelectorAll("#miyazaki th"),
tablebody = document.querySelector("#miyazaki tbody");

for(var i = 0; i < headers.length; i++) {
  var current = headers[i];
  headertext.push(current.textContent.replace(/\r?\n|\r/,""));
} 
for (var i = 0, row; row = tablebody.rows[i]; i++) {
  for (var j = 0, col; col = row.cells[j]; j++) {
    col.setAttribute("data-th", headertext[j]);
  } 
}

	</style>


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

