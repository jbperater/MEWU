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
							<i class="fa fa-file"></i> View Pending Repair
						</li>
					</ol>
				</div>
				<form action="/action_page.php" class="form_group">
						        <div class="modal-body">
									<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Main/add_equip_his">
										<div class="form-group">
									     	<label for="" class="control-label col-sm-4">Date Request:</label>
									     	<div class="col-sm-5 inputGroupContainer">
									     		<div class="input-group">
									     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
									     			 <input type="text" name="date_req" class='form-control' required placeholder="Date_Request">
									     		</div>
									     	</div>
									     </div>
										<div class="form-group">
									     	<label for="" class="control-label col-sm-4">Description:</label>
									     	<div class="col-sm-5 inputGroupContainer">
									     		<div class="input-group">
									     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
									     			 <input type="text" name="description" class='form-control'  placeholder="Description">
									     		</div>
									     	</div>
									     </div>
										<div class="form-group">
										    <label class="control-label col-sm-4">Part Repair:</label>
										    <div class="col-sm-5 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
													<input type="text" name="part_rep" class='form-control' placeholder="Part Repair">
												</div>
											</div>
										</div>
										<div class="form-group">
									     	<label for="" class="control-label col-sm-4">Date Repair:</label>
									     	<div class="col-sm-5 inputGroupContainer">
									     		<div class="input-group">
									     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
									     			 <input type="text" name="date_rep" class='form-control' required placeholder="Date Repair">
									     		</div>
									     	</div>
									     </div>
									     			 <input type="text" name="SerailNo" class='form-control' required placeholder="Serail No">
									     		</div>
									     	</div>
									     </div>
									    <div class="form-group">
											<label class="control-label col-sm-4">Time Repair:</label>
											<div class="col-sm-5 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
										    		<input type="time" name="time_rep" class='form-control' required placeholder="Time Repair">
										    	</div>
										    </div>
										</div>
										<div class="form-group">
											<label class="control-label col-sm-4">Date Finish:</label>
											<div class="col-sm-5 inputGroupContainer">
												<div class="input-group">
													<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
											 		 <input type="text" name="office" class='form-control'placeholder="date_fin">
												</div>
											</div>
									 	</div>
									     <div class="form-group">
									     	<label for="" class="control-label col-sm-4">Remark</label>
									     	<div class="col-sm-5 inputGroupContainer">
									     		<div class="input-group">
									     			<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
									     			 <input type="text" name="remark" class='form-control' required placeholder="Type">
									     		</div>
									     	</div>
									     </div>
									   <div class="form-group">
									    <label for="" class="col-sm-4 control-label"></label>
									   		<div class="col-sm-5">
									  		<button type="submit" class="btn btn-primary" id="submit" name="submit" width="100px">Submit <span class="glyphicon glyphicon-send"></span></button>

									  </div>
									  </div>
							  		</form>
								        </div>
								        <div class="modal-footer">
								          <a href="#" data-dismiss="modal" class="btn">Close</a>
								          <button class="btn btn-primary" type="submit">Save changes</button>
								        </div>
						        </form>
			</div>
		</div>
	</div>
</div>
		