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
							<i class="fa fa-file"></i> View Equipment
						</li>
					</ol>
				</div>
				<form class="form-horizontal" method="POST" action="action/attendance_details_add.php">
								<div class="form-group">
								    <label class="control-label col-sm-4">Date Requested:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="text" name="DateRequested" class='form-control' required placeholder="Date Requested">
										</div>
									</div>
								</div>
							    <div class="form-group">
									<label class="control-label col-sm-4">Description:</label>
									<div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
											<input type="text" name="Description" class='form-control' required placeholder="Description">
										</div>
									</div>
							 	</div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Part Used/Replace:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							     			 <input type="text" name="Part" class='form-control' required placeholder="Part Used/Replace">
							     		</div>
							     	</div>
							     </div>
							    <div class="form-group">
									<label class="control-label col-sm-4">Date Repair:</label>
									<div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
								    		<input type="text" name="DateRepair" class='form-control' required placeholder="Date Repair">
								    	</div>
								    </div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-4">Time Repair:</label>
									<div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									 		 <input type="text" name="TimeRepair" class='form-control' required placeholder="Time Repair">
										</div>
									</div>
							 	</div>
							 	<div class="form-group">
								  	<label class="control-label col-sm-4">Date Finished:</label>
								  	<div class="col-sm-5 inputGroupContainer">
								  		<div class="input-group">
								  			<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
								   		 	<input type="text" name="DateFinished" class='form-control' required placeholder="Date Finished">
								  		</div>
								  	</div>
							    </div>
							    <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Remark:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							     			 <input type="text" name="Remark" class='form-control' required placeholder="Remark">
							     		</div>
							     	</div>
							     </div>
							      <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Performed By:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							     			 <input type="text" name="PerformedBy" class='form-control' required placeholder="Performed By">
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
		