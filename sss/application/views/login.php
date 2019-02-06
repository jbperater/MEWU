<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GSC</title>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css' ?>"> -->
	<style>
		/*body{
			background-image:url('../assets/pinya.jpg');
			background-repeat: no-repeat;
			text-align: center;
		}*/
		.text_area{
			margin-top: -200px;
		}
		input{
			width: 300px;
			height: 30px;
			border-color: #00ace6;
			border-radius: 50px;
			text-align: center;
		}
		button{
			width: 300px;
			height: 30px;
			/*color: #00ace6;*/
			background-color: #00ace6;
			border-radius: 50px;
			border-color: #00ace6;
		}
		form{
			background-color: #E6E6FA;
			border-radius: 10px;
			width:390px;
			padding: 8px;
			opacity: 0.8;
		}

	</style>
<link rel="shortcut icon" href="<?php echo base_url();?>assets/Logo.png">
</head>
<body>
	<img style="position:fixed;" src="<?php echo base_url().'assets/pine.jpg' ?>">
	<div class="container" style="position:relative;">
		<div class="page-header">
			<img class="logo img-responsive" style="width: 250px;" src="<?php echo base_url().'assets/logo.png' ?>">
				<div class="text_area">
				  <center><h1 ><b>GENERAL SERVICES COOPERATIVE</b></h1>
				  			<h4 >Borja Road, Damilag, Manolo Fortich Bukidnon</h4>
				  			<h5>Tel No.(088) 223-3862</h5>
				  </center>
				</div>
		</div>
	</div>
	
	<center>
	<form method="post">
		<h2 ><b>Login Administrator</b></h2>
		<input type="text" name="username" placeholder="username" required><br><br>
		<input type="password" name="password" placeholder="password" required><br><br>
		<button type="submit" name="login" class="glyphicon glyphicon-log-in"> Login</button><br><br>
		
		<?php if(isset($_SESSION['success'])){?>
	    <center><div class="glyphicon glyphicon-log-in" style="color: #00ace6;  width: 200px; opacity: 0.8;"><?php echo $_SESSION['success']; ?></div></center><br>
	    <?php 
	    }
	     ?>
	</form>
	</center>

</body>


</html>