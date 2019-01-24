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
							<i class="fa fa-file"></i> Add Equipment
						</li>
					</ol>
				</div>
				<form class="form-horizontal" method="POST" action="action/attendance_details_add.php">
								<form class="form-horizontal" method="POST" action="action/attendance_details_add.php">
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Name:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="text" name="Bldg No" class='form-control' required placeholder="name">
							     		</div>
							     	</div>
							     </div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Type:</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="text" name="Type" class='form-control' required placeholder="Type">
										</div>
									</div>
								</div>
							</form>
						</form>
					</div>
			</div>
		</div>
	</div>
</div>
		