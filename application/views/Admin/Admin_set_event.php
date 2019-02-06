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
				<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Admin/Admin_add_event">
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Number of Participants:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="input" name="no_participants" class='form-control' required placeholder="<?php echo $id; ?>">
							     		</div>  
							     	</div>
							     </div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Venue: (please check)</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<?php foreach($venuedata as $venuedata){?>
							     			  <input type="checkbox" name="venue[]" value="<?=$venuedata->venue_id;?>"><?=$venuedata->bldg_no;?>&nbsp<?=$venuedata->name;?> <br>
							     			<?php }?>
							     			 <!--  <input type="checkbox" name="venue[]" value="1">University Gymasium <br>
							     			 <input type="checkbox" name="venue[]" value="2"> Audio Visual Room 1 (Ground Floor, ITB Phase-2<br>
							     			 <input type="checkbox" name="venue[]" value="3"> Audio Visual Room 2 (4th Floor, ICT Building<br>
							     			 <input type="checkbox" name="venue[]" value="4"> Audio Visual Room 3 (6th Floor, Engineering Complex<br> -->
							     		</div>
							     	</div>
							     </div>
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Department: (please check)</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<select name="department" id="" class="form-control">
							     			  <?php foreach($option as $option){?>
											<option value=<?=$option->dep_id;?>><?=$option->acroname;?> - &nbsp<?=$option->name;?></option>
											<?php }?>
							     			</select>
							     		</div>
							     	</div>
							     </div>
							     <div class="form-group">
								    <label class="control-label col-sm-4">Date Reserved:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="date" name="date_request" class='form-control' required placeholder="Date Reserved" value="<?php echo date('Y-m-d'); ?>" />
											<!-- <input type="date" name="date_request" class='form-control' required placeholder="Date Actual Use"> -->
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
							     	<label for="" class="control-label col-sm-4">Purpose:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<select name="purpose" id="" class="form-control">
						
							  
							     			  <option 
							     			   value="Lecture/Forum/Symposium"> Lecture/Forum/Symposium</option>
							     			  <option 
							     			   value="Film Showing"> Film Showing</option>
							     			  <option 
							     			   value="Seminar/Workshop/Conference"> Seminar/Workshop/Conference</option>
							     			  <option 
							     			   value="General Assembly"> General Assembly</option>
							     			   <option 
							     			   value="General Assembly"> College Meeting/Conference</option>
							     			   <option 
							     			   value="General Assembly"> Stage Drama</option>
							     			    <option 
							     			   value="General Assembly"> Others</option>
							     			</select>
							     		</div>
							     	</div>
							     </div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Equipment Needed: (please check)</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<?php foreach($equip_event as $equip_event){?>
							     			  <input type="checkbox" name=event[]" value="<?=$equip_event->equip_id;?>"><?=$equip_event->name;?> <br>
							     			<?php }?>
							     			  <!-- <input type="checkbox" name="equipneed[]" value="Multi-media Data Projector LCD Projector">Multi-media Data Projector LCD Projector<br>
							     			  <input type="checkbox" name="equipneed[]" value="Sound System"> Sound System<br>
							     			  <input type="checkbox" name="equipneed[]" value="Scoreboard"> Scoreboard<br> -->
							     			  <div class="form-group">
							     			 <label for="" class="control-label">Tables:</label>
									     	<input type="text" name="table_no" class='form-control col-sm-3' required placeholder="(specify #)">
									     	</div>
									     	 <div class="form-group">
							     			  <label for="" class="control-label">Chairs:</label>
									     	<input type="text" name="chair_no" class='form-control col-sm-3' required placeholder="(specify #)">
									     	</div>
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
		