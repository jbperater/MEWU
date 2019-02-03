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
							<i class="fa fa-file"></i> Create Account
						</li>
					</ol>
				</div>
				<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Admin/Admin_add_account">
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Username:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="input" name="username" class='form-control' required placeholder="Username">
							     		</div>
							     	</div>
							     </div>
							     <div class="form-group">
								    <label class="control-label col-sm-4">Password:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="input" name="password" class='form-control' required placeholder="Password" >
										</div>
									</div>
								</div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Type:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="input" name="type" class='form-control' required placeholder="Type">
										</div>
									</div>
								</div>
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Status:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							     			 <input type="text" name="status" class='form-control' required placeholder="Status">
							     		</div>
							     	</div>
							     </div>
							    	<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Date Created:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
							    			 <input type="datetime-local" name="date_created" class='form-control' required placeholder="Date Created">
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
		