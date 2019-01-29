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
							<i class="fa fa-file"></i> Add Event Request
						</li>
					</ol>
				</div>
				<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Main/reservation_insert">
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Title of Event:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="text" name="title" class='form-control' required placeholder="Title of Event">
							     		</div>
							     	</div>
							     </div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Venue:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="text" name="Venue" class='form-control' required placeholder="Venue">
										</div>
									</div>
								</div>
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Department:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							     			 <input type="text" name="department" class='form-control' required placeholder="Department">
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
									<label class="control-label col-sm-4">Date Reserved:</label>
									<div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
								    		<input type="text" name="date_res" class='form-control' required placeholder="Date Reserved">
								    	</div>
								    </div>
								</div>
								<!-- <div class="form-group">
									<label class="control-label col-sm-4">Time Reserved:</label>
									<div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
									 		 <input type="text" name="time_res" class='form-control' required placeholder="Time Reserved">
										</div>
									</div>
															 	</div>
															 	  <div class="form-group">
															     	<label for="" class="control-label col-sm-4">Date Actual Use:</label>
															     	<div class="col-sm-5 inputGroupContainer">
															     		<div class="input-group">
															     			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
															     			 <input type="text" name="date_act" class='form-control' required placeholder="Time Actual Use">
															     		</div>
															     	</div>
															     </div> -->
							    <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Time Actual Use:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
							     			 <input type="text" name="time_act" class='form-control' required placeholder="Time Actual Use">
							     		</div>
							     	</div>
							     </div>
							    <!--  <div class="form-group">
							    	<label for="" class="control-label col-sm-4">Confirmd by:</label>
							    	<div class="col-sm-5 inputGroupContainer">
							    		<div class="input-group">
							    			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							    			 <input type="text" name="Confirmd by" class='form-control' required placeholder="Confirmd by">
							    		</div>
							    	</div>
							    </div> -->
							     
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Contact Number:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							     			 <input type="text" name="contact_no" class='form-control' required placeholder="Contact Number">
							     		</div>
							     	</div>
							     </div>
							     <!-- <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Reserved By:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							     			 <input type="text" name="Reserved By" class='form-control' required placeholder="Reserved By">
							     		</div>
							     	</div>
							     </div> -->
							     <!--  <div class="form-group">
							     							     	<label for="" class="control-label col-sm-4">Noted by:</label>
							     							     	<div class="col-sm-5 inputGroupContainer">
							     							     		<div class="input-group">
							     							     			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							     							     			 <input type="text" name="Noted by" class='form-control' required placeholder="Noted by">
							     							     		</div>
							     							     	</div>
							     							     </div> -->
							      <!-- <div class="form-group">
							      							     	<label for="" class="control-label col-sm-4">Confirmd by:</label>
							      							     	<div class="col-sm-5 inputGroupContainer">
							      							     		<div class="input-group">
							      							     			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							      							     			 <input type="text" name="Confirmd by" class='form-control' required placeholder="Confirmd by">
							      							     		</div>
							      							     	</div>
							      							     </div> -->
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
		