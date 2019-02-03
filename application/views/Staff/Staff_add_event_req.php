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
				<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Staff/Staff_add_event">
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Number of Participants:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="text" name="no_participants" class='form-control' required placeholder="Number of Participants">
							     		</div>
							     	</div>
							     </div>
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Department: (please check)</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			  <input type="checkbox" name="vehicle" value="Bike">College of Engineering and Architecture<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> College of Science and Mathematics<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> College of Science and Technology Education<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> College of Information Technology and Computing<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> College of Technology<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> Graduate School<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> Student Organiation<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> University Administration<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> Others:
							     			  	 <input id="propertytype_other" name="propertytype_other" type="text" value=""     placeholder="Please Specify" class="form-control"><br>
							     		</div>
							     	</div>
							     </div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Date Actual Use:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="datetime-local" name="date_act" class='form-control' required placeholder="Date Actual Use">
										</div>
									</div>
								</div>
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Purpose: (please check)</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			  <input type="checkbox" name="vehicle" value="Bike"> Lecture/Forum/Symposium<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> Film Showing<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> Seminar/Workshop/Conference<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> General Assembly<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> Others:
							     			  	 <input id="propertytype_other" name="propertytype_other" type="text" value=""     placeholder="Please Specify" class="form-control"><br>
							     		</div>
							     	</div>
							     </div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Equipment Needed: (please check)</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			  <input type="checkbox" name="vehicle" value="Bike">Multi-media Data Projector LCD Projector<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> Sound System<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> Scoreboard<br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> Tables:
							     			  	 <input id="propertytype_other" name="propertytype_other" type="text" value=""     placeholder="Specify #" class="form-control"><br>
							     			  <input type="checkbox" name="vehicle" value="Bike"> Chairs:
							     			  	 <input id="propertytype_other" name="propertytype_other" type="text" value=""     placeholder="Specify #" class="form-control"><br>
							     		</div>
							     	</div>
							     </div>
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Name of Event:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							     			 <input type="text" name="title_event" class='form-control' required placeholder="Name of Event">
							     		</div>
							     	</div>
							     </div>
							    <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Contact Number:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							     			 <input type="input" name="contact_no" class='form-control' required placeholder="Contact Number">
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
		