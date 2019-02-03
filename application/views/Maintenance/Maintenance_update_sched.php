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
				<form class="form-horizontal" method="POST" action="<?php echo base_url();?>Maintenance/Maintenance_na?id=<?php echo $this->input->get('id');?>">
					<?php foreach($data as $data){?>
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">No. of Items:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="text" name="Title of Event" class='form-control' value="<?=$data->item_no;?>" readonly placeholder="No. of Items">
							     		</div>
							     	</div>
							     </div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Work Description:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							     			 <input type="text" name="Department" class='form-control' value="<?=$data->work_description;?>" readonly placeholder="Description">
							     		</div>
							     	</div>
							     </div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Bld. No.:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="text" name="Venue" class='form-control' readonly value=<?=$data->bldg_no;?> placeholder="Location">
										</div>
									</div>
								</div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Location   :</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="text" name="Venue" class='form-control' readonly value=<?=$data->location;?> placeholder="Room No.">
										</div>
									</div>
								</div>

								<div class="form-group">
								    <label class="control-label col-sm-4">Date Time Start:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="datetime-local" name="date_time_start" class='form-control' required placeholder="Date Time Start">
										</div>
									</div>
								</div>

								<div class="form-group">
								    <label class="control-label col-sm-4">Date Time Finised:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="datetime-local" name="date_time_fin" class='form-control' required placeholder="Date Time Finised">
										</div>
									</div>
								</div>

								<div class="form-group">
								    <button type="submit" class="btn btn-primary">
					  					Submit
					  				</button>
								</div>


								
								
						<?php }?>

					</form>
			</div>
		</div>
	</div>
</div>
		