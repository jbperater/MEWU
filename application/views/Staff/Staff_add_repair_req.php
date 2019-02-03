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
							<i class="fa fa-file"></i> Add Repair Request
						</li>
					</ol>
				</div>
				<form class="form-horizontal" method="POST" action="action/attendance_details_add.php">
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">No. of Items:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="text" name="Title of Event" class='form-control' required placeholder="No. of Items">
							     		</div>
							     	</div>
							     </div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Work Description:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							     			 <input type="text" name="Department" class='form-control' required placeholder="Description">
							     		</div>
							     	</div>
							     </div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Bld. No.:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="text" name="Venue" class='form-control' required placeholder="Location">
										</div>
									</div>
								</div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Room No.:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="text" name="Venue" class='form-control' required placeholder="Room No.">
										</div>
									</div>
								</div>
								
					  		</form>
			</div>
		</div>
	</div>
</div>
		