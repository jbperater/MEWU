<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->library('session');
$user_detail = $this->session->userdata('user_data_session');
$level = $user_detail['type'];
?>
<div id="wrapper">
	<div id="page-wrapper"> 
		 <div class="container-fluid">
           
			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<ol class="breadcrumb">
						<li class="active">
							<i class="fa fa-file"></i> Add Equipment
						</li>
					</ol>
				</div>
				<form class="form-horizontal" method="POST" action="action/attendance_details_add.php">
								<form class="form-horizontal" method="POST" action="action/attendance_details_add.php">
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Brand:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="text" name="Brand" class='form-control' required placeholder="Brand">
							     		</div>
							     	</div>
							     </div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Model:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="text" name="Model" class='form-control' required placeholder="Model">
										</div>
									</div>
								</div>
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Serial No:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							     			 <input type="text" name="Serail No" class='form-control' required placeholder="Serail No">
							     		</div>
							     	</div>
							     </div>
							    <!-- <div class="form-group">
							    									<label class="control-label col-sm-4">Applicant:</label>
							    									<div class="col-sm-5 inputGroupContainer">
							    										<div class="input-group">
							    											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							    											<input type="text" name="Applicant" class='form-control' required placeholder="Applicant">
							    										</div>
							    									</div>
							    							 	</div> -->
							     
							    <div class="form-group">
									<label class="control-label col-sm-4">Office:</label>
									<div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
								    		<input type="text" name="Office" class='form-control' required placeholder="Office">
								    	</div>
								    </div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-4">Department:</label>
									<div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									 		 <input type="text" name="Department" class='form-control' required placeholder="Department">
										</div>
									</div>
							 	</div>
							 	  <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Year Acquired:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							     			 <input type="text" name="Time Actual Use" class='form-control' required placeholder="Year Acquired">
							     		</div>
							     	</div>
							     </div>
							   				   
							   <br>
							   <div class="form-group">
							    <label for="" class="col-sm-4 control-label"></label>
							   		<div class="col-sm-5">
							  		<button type="submit" class="btn btn-primary" id="submit" name="submit" width="100px">Submit <span class="glyphicon glyphicon-send"></span></button>

							  </div>
							  </div>
					  		</form>
			</div>
		</div>
	</div>
</div>
		