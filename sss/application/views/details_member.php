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
a {
  color: black;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}

#myBtn:hover {
  background-color: #555;
}
</style>
  <style> 
input[type=text] {
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
}

</style>


	<!-- Modernizr JS -->
	<script src="<?php echo base_url();?>assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
	<body data-stellar-background-ratio="0.1" style="background-image: url(../assets/images/ssss.jpg); height :100px;">
		
        <!-- end:fh5co-header -->
		<div class="fh5co-hero">
			<div class="fh5co-cover" >
            <div class="container" style="margin-top: -5%; height:850px;">
					<div class="row" style="margin-top: 8%; height:330px; padding-top:30px; background-color: white;">
						<H1 style="color: black;"><b><center><a href="<?php echo base_url();?>auth/home">GENERAL SERVICES COOPERATIVE</a></center></b></H1>
						<h4 style="margin-top:-2%; "><center>Borja Rd., Damilag, Manolo Fortich, Bukidnon</center></h4>
						<h2 style="margin-top:2%; font-weight: bold; " ><center>MEMBER DETAILS</center></h2>
						<table width="100%" >
						<?php
							foreach($record as $records)
							{
						?>
							
							<tr>
								<td style="color:black; padding-left:10px;"><b>ID Number : </b><?php echo $records->member_id; ?></td>
								<td style="color:black"><b>Date: </b><?php echo date('M d, Y') ?></td></tr>
							<tr>
								<td style="color:black; padding-left:10px; "><b>Name : </b><?php echo ($records->lastname." ".$records->firstname." ".$records->middlename); ?></td> 
							</tr>
							<tr>
								<td style="color:black; padding-left:10px;"><b>SSS Number : </b><?php echo $records->sss_num; ?></td>
							</tr>
							<tr>
								<td style="color:black; padding-left:10px;"><b>Pagibig Number : </b><?php echo $records->hdmf; ?></td>
							</tr>
							<tr>
								<td style="color:black; padding-left:10px;"><b>Philhealth Number : </b><?php echo $records->philhealth_num; ?></td>
							</tr>
							
						<?php
							
							}
						?>

						</table>
						<br>

						<h4 style="padding-top:20px;"><center>2016 CONTRIBUTION</center></h4>
                        <table id="miyazaki" border="2px" width="100%" >
                        <thead>

						<tr><th><center>Benefits</center></th><th><center>January</center><th><center>February</center><th><center>March</center><th><center>April</center><th><center>May</center><th><center>June</center><th><center>July</center><th><center>August</center><th><center>September</center><th><center>October</center><th><center>November</center><th><center>December
						<tbody>
                        <?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>

						
	                            	<tr> 
	                            		<td><center>SSS</td>
	                                	
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo $contribution_2016[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year-2; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contribution_2016[$j]; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>		-->					
														
												</form>
												<?php } ?>

	                                			</td>
	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	
	                                		foreach($prev as $pv){
	                                	?>

	                                    		<!--<td><center><?php echo $pv; ?>
	                                    		<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year-2; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $pv; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>		-->			
														
												</form></td>
	                                   
			     							<?php } ?>
	                                </tr>
                      
                        
						<?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>
	                            	<tr>
	                            		<td>
	                            			<center>PAGIBIG</td>
	                                	
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo $contributions_2016[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year-2; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contributions_2016[$j]; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div> -->							
														
												</form>
												<?php } ?>

	                                			</td>
	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	
	                                		foreach($prev as $pv){
	                                	?>

	                                    		<!--<td><center><?php echo $pv; ?>
	                                    		<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year-2; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $pv; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>		-->				
														
												</form></td>
	                                   
			     							<?php } ?>
	                                </tr>
                      
                        
                        <?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>
	                            	<tr>
	                            		<td><center>PHILHEALTH</td>	
	                                	
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo $contributionss_2016[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year-2; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contributionss_2016[$j]; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>-->							
														
												</form>
												<?php } ?>

	                                			</td>
	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	
	                                		foreach($prev as $pv){
	                                	?>

	                                    		<!--<td><center><?php echo $pv; ?>
	                                    		<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year-1; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $pv; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>		-->					
														
												</form></td>
	                                   
			     							<?php } ?>
	                                </tr>
	                            </table>
                      
                      	<br><br>



						<h4 style="padding-top:20px;"><center>2017 CONTRIBUTION</center></h4>
                        <table id="miyazaki" border="1px" width="100%" >
                        <thead>
						<tr><th><center>Benefits</center></th><th><center>January</center><th><center>February</center><th><center>March</center><th><center>April</center><th><center>May</center><th><center>June</center><th><center>July</center><th><center>August</center><th><center>September</center><th><center>October</center><th><center>November</center><th><center>December
						<tbody>
                        <?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>
	                            	<tr>
	                            		<td><center>SSS</td>	
	                                	
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo $contribution[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year-1; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contribution[$j]; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>		-->					
														
												</form>
												<?php } ?>

	                                			</td>
	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	
	                                		foreach($prev as $pv){
	                                	?>

	                                    		<!--<td><center><?php echo $pv; ?>
	                                    		<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year-1; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $pv; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>					
														
												</form></td>-->
	                                   
			     							<?php } ?>
	                                </tr>
                      
                        
						<?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>
	                            	<tr>	
	                            		<td><center>PAGIBIG</td>
	                                	
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo $contributions[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year-1; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contributions[$j]; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div> -->							
														
												</form>
												<?php } ?>

	                                			</td>
	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	
	                                		foreach($prev as $pv){
	                                	?>

	                                    		<!--<td><center><?php echo $pv; ?>
	                                    		<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year-1; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $pv; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>						
														
												</form></td>-->
	                                   
			     							<?php } ?>
	                                </tr>
                      
                        
                        <?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>
	                            	<tr>	
	                            		<td><center>PHILHEALTH</td>
	                                	
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo $contributionss[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year-1; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contributionss[$j]; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>-->							
														
												</form>
												<?php } ?>

	                                			</td>
	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	
	                                		foreach($prev as $pv){
	                                	?>

	                                    		<!--<td><center><?php echo $pv; ?>
	                                    		<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year-1; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $pv; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>							
														
												</form></td>-->
	                                   
			     							<?php } ?>
	                                </tr>
	                            </table>
                      
                      	<br><br>

                        <h4 style="padding-top:20px;"><center>2018 CONTRIBUTION</center></h4>
                        <table id="miyazaki" border="1px" width="100%" >
                        <thead>
						<tr><th><center>Benefits</center></th><th><center>January</center><th><center>February</center><th><center>March</center><th><center>April</center><th><center>May</center><th><center>June</center><th><center>July</center><th><center>August</center><th><center>September</center><th><center>October</center><th><center>November</center><th><center>December
						<tbody>
                        <?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>
	                            	<tr>
	                            		<td><center>SSS</td>	
	                                	
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo $contribution_2017[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contribution_2017[$j]; ?>" hidden/>
														</div>
																			
														
												</form>
												<?php } ?>

	                                			</td>

	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	foreach($now as $nw){

	                                	?>
	                                    		
	                                   			<!--<td><center><?php echo $nw; ?>
	                                   			<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $nw	; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>							
														
												</form></td>-->
			     							<?php } ?>
	                                </tr>


	                      <?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>
	                            	<tr>	
	                                	<td><center>PAGIBIG</td>
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo  $contributions_2017[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contributions_2017[$j]; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div> -->							
														
												</form>
												<?php } ?>

	                                			</td>
	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	
	                                		foreach($prev as $pv){
	                                	?>

	                                    		<!--<td><center><?php echo $pv; ?>
	                                    		<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $pv; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>						
														
												</form></td>-->
	                                   
			     							<?php } ?>
	                                </tr>


	                        <?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>
	                            	<tr>	
	                            		<td><center>PHILHEALTH</td>
	                                	
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo  $contributionss_2017[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contributionss_2017[$j]; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div> -->							
														
												</form>
												<?php } ?>

	                                			</td>
	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	
	                                		foreach($prev as $pv){
	                                	?>

	                                    		<!--<td><center><?php echo $pv; ?>
	                                    		<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $pv; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>						
														
												</form></td>-->
	                                   
			     							<?php } ?>
	                                </tr>
							
                         
                        </table>

                        <br>



						<h4 style="padding-top:20px;"><center>2019 CONTRIBUTION</center></h4>
                        <table id="miyazaki" border="1px" width="100%" >
                        <thead>
						<tr><th><center>Benefits</center></th><th><center>January</center><th><center>February</center><th><center>March</center><th><center>April</center><th><center>May</center><th><center>June</center><th><center>July</center><th><center>August</center><th><center>September</center><th><center>October</center><th><center>November</center><th><center>December
						<tbody>
                        <?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>
	                            	<tr>
	                            		<td><center>SSS</td>	
	                                	
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo $contribution_2019[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year+1; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contribution_2019[$j]; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div> -->							
														
												</form>
												<?php } ?>

	                                			</td>
	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	
	                                		foreach($prev as $pv){
	                                	?>

	                                    		<!--<td><center><?php echo $pv; ?>
	                                    		<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year+1; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $pv; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>					
														
												</form></td>-->
	                                   
			     							<?php } ?>
	                                </tr>
                      
                        
						<?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>
	                            	<tr>
	                            		<td><center>PAGIBIG</td>	
	                                	
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo $contributions_2019[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year+1; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contributions_2019[$j]; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div> -->							
														
												</form>
												<?php } ?>

	                                			</td>
	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	
	                                		foreach($prev as $pv){
	                                	?>

	                                    		<!--<td><center><?php echo $pv; ?>
	                                    		<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year+1; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $pv; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>						
														
												</form></td>-->
	                                   
			     							<?php } ?>
	                                </tr>
                      
                        
                        <?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>
	                            	<tr>	
	                            		<td><center>PHILHEALTH</td>
	                                	
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo $contributionss_2019[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year+1; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contributionss_2019[$j]; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>-->							
														
												</form>
												<?php } ?>

	                                			</td>
	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	
	                                		foreach($prev as $pv){
	                                	?>

	                                    		<!--<td><center><?php echo $pv; ?>
	                                    		<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year+1; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $pv; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>							
														
												</form></td>-->
	                                   
			     							<?php } ?>
	                                </tr>
	                            </table>
                      
                      	<br><br>

                      	<h4 style="padding-top:20px;"><center>2020 CONTRIBUTION</center></h4>
                        <table id="miyazaki" border="1px" width="100%" >
                        <thead>
						<tr><th><center>Benefits</center></th><th><center>January</center><th><center>February</center><th><center>March</center><th><center>April</center><th><center>May</center><th><center>June</center><th><center>July</center><th><center>August</center><th><center>September</center><th><center>October</center><th><center>November</center><th><center>December
						<tbody>
                        <?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>
	                            	<tr>
	                            		<td><center>SSS</td>	
	                                	
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo $contribution_2020[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year+2; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contribution_2020[$j]; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div> -->							
														
												</form>
												<?php } ?>

	                                			</td>
	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	
	                                		foreach($prev as $pv){
	                                	?>

	                                    		<!--<td><center><?php echo $pv; ?>
	                                    		<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year+2; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $pv; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>					
														
												</form></td>-->
	                                   
			     							<?php } ?>
	                                </tr>
                      
                        
						<?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>
	                            	<tr>
	                            		<td><center>PAGIBIG</td>	
	                                	
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo $contributions_2020[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year+2; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contributions_2020[$j]; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div> -->							
														
												</form>
												<?php } ?>

	                                			</td>
	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	
	                                		foreach($prev as $pv){
	                                	?>

	                                    		<!--<td><center><?php echo $pv; ?>
	                                    		<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year+2; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $pv; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>						
														
												</form></td>-->
	                                   
			     							<?php } ?>
	                                </tr>
                      
                        
                        <?php
								$count_month=12;
								$loop_month=0;
								$month=array('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER');
								

						?>
	                            	<tr>	
	                                	<td><center>PHILHEALTH</td>
	                                    
	                                	<?php
	                                		for($j=$loop_month;$j!=$count_month;$j++)
	                                		{

	                                	?>
	                                			<td><center><?php echo $contributionss_2020[$j]; ?>
	                                				<?php foreach ($record as $records){?>


	                                				<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="month" value="<?php echo $month[$j]; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year+2; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="CONTRIBUTION" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $contributionss_2020[$j]; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>-->							
														
												</form>
												<?php } ?>

	                                			</td>
	                                	<?php
	                                		$loop_month++;
	                                		}
	                                		$count_month+=12;
	                                	
	                                		foreach($prev as $pv){
	                                	?>

	                                    		<!--<td><center><?php echo $pv; ?>
	                                    		<form class="contact-form" action="update" method="post">
                     			
														<div class="form-group">
															<input type="text" name="member_id" value="<?php echo $records->member_id; ?>" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="year" value="<?php echo $year+2; ?>" hidden/>
														</div>
														<div class="form-group">
															<input type="text" name="edit" value="REMARKS" hidden/>
														</div>
														
														<div class="form-group">
															<input type="text" name="amount" value="<?php echo $pv; ?>" hidden/>
														</div>
														<!--<div class="form-group">
															<input type="submit"  value="Edit" 
									                        style="float: center;  ">	
									                    </div>							
														
												</form></td>-->
	                                   
			     							<?php } ?>
	                                </tr>
	                            </table>
                      
                      	<br><br>


                        <form class="contact-form" action="search_account" method="post">
                     			
								<div class="form-group">
									<input type="text" name="search" value="<?php echo $records->member_id; ?>" hidden/>
								</div>
								<div class="form-group">
									<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Back" 
			                        style="float: left; background-color: black; color: #FFF;">	
			                    </div>							
						</div>
                        </form>
               			
                     
								
						</div>
					</div>
				</div>
          
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