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
							<i class="fa fa-file"></i> Add History
						</li>
					</ol>
				</div>
				<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Maintenance/add_history">
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Date Requested:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="date" name="date_req" class='form-control' required placeholder="ate Requested">
							     		</div>
							     	</div>
							     </div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Description of Equipment:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="text" name="description" class='form-control' required placeholder="Description of Equipment">
										</div>
									</div>
								</div>
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Parts Used/Replaced:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							     			 <input type="text" name="parts_rep" class='form-control' required placeholder="Parts used/Replaced">
							     		</div>
							     	</div>
							     </div>
							    <div class="form-group">
									<label class="control-label col-sm-4">Date of Repair:</label>
									<div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
								    		<input type="date" name="date_rep" class='form-control' required placeholder="Date of Repair">
								    	</div>
								    </div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-4">Time of Repair:</label>
									<div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									 		 <input type="time" name="time_rep" class='form-control' required placeholder="Time of Repair">
										</div>
									</div>
							 	</div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Date Completed:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							     			 <input type="date" name="date_fin" class='form-control' required placeholder="Date Completed">
							     		</div>
							     	</div>
							     </div>
							      <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Remarks/Status:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							     			 <input type="text" name="remark"class='form-control' required placeholder="Remarks/Status">
							     		</div>
							     	</div>
							     </div>
							      <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Performed By:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							     			 <input type="text" name="performed_by"class='form-control' required placeholder="Performed By">
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
		