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
							<i class="fa fa-file"></i> Set Event Reservation
						</li>
					</ol>
				</div>
				<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Main/reservation_insert">
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Title of Event:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="text" name="title_event" class='form-control' required placeholder="Title of Event">
							     		</div>
							     	</div>
							     </div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Venue:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											 <input type="text" id="inputUsername" class="form-control" placeholder="Venue" name="venue" required autofocus>
										</div>
									</div>
								</div>
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Department:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							     			  <input type="text" id="inputUsername" class="form-control" placeholder="Department" name="department" required autofocus>
							     		</div>
							     	</div>
							     </div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Date Actual Use:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											 <input type="Date" id="inputUsername" class="form-control" placeholder="Username" name="date_act" required autofocus>
										</div>
									</div>
								</div>
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Time Actual Use:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							     			  <input type="time" id="inputUsername" class="form-control" placeholder="Time Actual Use" name="time_act" required autofocus>
							     		</div>
							     	</div>
							     </div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Contact Number:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							     			  <input type="text" id="inputUsername" class="form-control" placeholder="Contact Number" name="contact_no" required autofocus>
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
		