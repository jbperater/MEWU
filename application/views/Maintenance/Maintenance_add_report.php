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
							<i class="fa fa-file"></i> Add Report
						</li>
					</ol>
				</div>
				
								<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Maintenance/Maintenance_add_report">
								
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Date Requested:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="Date" class="form-control" placeholder="Date Requested" name="date_req" required autofocus>
							     		</div>
							     	</div>
							     </div>
								<div class="form-group">
								    <label class="control-label col-sm-4">Description</label>
								    <div class="col-sm-5 inputGroupContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
											<input type="text"  class="form-control" placeholder="Description" name="description" required autofocus>
										</div>
									</div>
								</div>
								<div class="form-group">
							     	<label for="" class="control-label col-sm-4">Parts Replaced:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="text"  class="form-control" placeholder="Parts Replaced" name="parts_rep" required autofocus>
							     		</div>
							     	</div>
							     </div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Date Replaced:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="Date" class="form-control" placeholder="Date Replaced" name="date_rep" required autofocus>
							     		</div>
							     	</div>
							     </div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Time Replaced:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="Time" class="form-control" placeholder="Time Replaced" name="time_rep" required autofocus>
							     		</div>
							     	</div>
							     </div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Date Finished:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="Date" class="form-control" placeholder="Date Finished" name="date_fin" required autofocus>
							     		</div>
							     	</div>
							     </div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Remarks:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="text"  class="form-control" placeholder="Remarks" name="remark" required autofocus>
							     		</div>
							     	</div>
							     </div>
							     <div class="form-group">
							     	<label for="" class="control-label col-sm-4">Performed By:</label>
							     	<div class="col-sm-5 inputGroupContainer">
							     		<div class="input-group">
							     			<span class="input-group-addon"><i class="glyphicon glyphicon-bookmark"></i></span>
							     			 <input type="text"  class="form-control" placeholder="Performed By" name="performed_by" required autofocus>
							     		</div>
							     	</div>
								<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" >Submit</button>
								</form>-->
				<!--<form method="post" action="<?php echo base_url(); ?>Maintenance/Maintenance_add_report">
							<table >
					  <tr>
					    <td>Date Requested </td>
					    <td><input type="Date" name="date_req"/></td>
					  </tr>
					  <tr>
					    <td>Description </td>
					    <td><input type="text" name="description"/></td>
					  </tr>
					  <tr>
					    <td>Parts Replaced </td>
					    <td><input type="text" name="parts_rep"/></td>
					  </tr>
					  <tr>
					    <td>Date Replaced </td>
					    <td><input type="Date" name="date_rep"/></td>
					  </tr>
					  <tr>
					    <td>Time Replaced </td>
					    <td><input type="Time" name="time_rep"/></td>
					  </tr>
					  <tr>
					    <td>Date Finished </td>
					    <td><input type="Date" name="date_fin"/></td>
					  </tr>
					  <tr>
					    <td>Remarks </td>
					    <td><input type="text" name="remark"/></td>
					  </tr>
					  <tr>
					    <td>Performed by</td>
					    <td><input type="text" name="performed_by"/></td>
					  </tr>
					  <tr>
					  	<td><button class="btn btn-lg btn-primary btn-block btn-signin" float="right" name="submit" type="submit" value="Save Data">Submit</button></td>
					    <td colspan="2" align="left"><input type="submit" name="submit" value="Save Data"/></td>-->
					  </tr>
					</table>
					 
						</form>
			</div>
		</div>
	</div>
</div>
		