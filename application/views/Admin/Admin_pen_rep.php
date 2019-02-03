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
				<table>
					<tr><td><strong>Job ID</strong></td>
					<td><strong>Date Requested</strong></td>
					<td><strong>Description</strong></td>
					<td><strong>Building Number</strong></td>
					<td><strong>Location</strong></td>
				     
				     <?php foreach($repair as $repair){?>
				     <tr>
				    <td><?=$repair->job_id;?></td>
				    <td><?=$repair->date;?></td>
				 	<td><?=$repair->description;?></td>
				 	<td><?=$repair->bldg_no;?></td>
				 	<td><?=$repair->location;?></td>
				 	<td><a href="<?php echo base_url(); ?>Admin/approve_request?approve=<?php echo $repair->job_id;?>" button class="btn btn-lg btn-primary btn-block btn-signin" float="right" name="approve_request" type="submit" value="Save Data">Approve</button></td>
				 	<td><a href="<?php echo base_url(); ?>Admin/decline_request?decline=<?php echo $repair->job_id;?>" button class="btn btn-lg btn-primary btn-block btn-signin" float="right" name="decline_request" type="submit" value="Save Data">Decline</button></td></tr>    

					<tr>
						<th><strong>Item No</strong></th>
						<th><strong>Date Requested</strong></th>
						<th><strong>Description</strong></th>
						<th><strong>Building Number</strong></th>
						<th><strong>Location</strong></th>
						<th><strong>Request By</strong></th>
					    <th><strong>Action</strong></th>
					</tr>
				     <?php foreach($repair as $repair){?>
				     <tr>
				     <td><?=$repair->item_no;?></td>
				    <td><?=$repair->date_req;?></td>
				 	<td><?=$repair->work_description;?></td>
				 	<td><?=$repair->bldg_no;?></td>
				 	<td><?=$repair->location;?></td>

				 	<td><?=$repair->fname;?>&nbsp<?=$repair->mname;?>&nbsp<?=$repair->lname;?></td>
				 	<td> <a href="<?php echo base_url();?>Admin/admin_rep_app?id=<?=$repair->job_id;?>"> 
				 		<!-- <a data-toggle="modal" href="#myModal" > -->

					      <button class='btn btn-success' style='width:40%;margin-top:2px;'>Approve</button>
						</a>
				 	 <a href="<?php echo base_url();?>Admin/admin_rep_dec?id=<?=$repair->job_id;?>">
					      <button class='btn btn-danger' style='width:40%;margin-top:2px;'>Decline</button>
						</a></td></tr>    
				    <?php }?>
				  

				</table>

				<div class="row">
						<div class="modal fade" id="myModal">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						          <h4 class="modal-title">Assign Personel</h4>
						        </div>
						        <form action="/action_page.php" class="form_group">
						        <div class="modal-body">
										<select name="personel" class="form-control">
										<?php foreach($option as $option){?>
										<option value=<?=$option->person_id;?>><?=$option->fname;?>&nbsp<?=$option->mname;?>&
											<?=$option->lname;?></option>
										<?php }?>
										</select>
										
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
			</div>
		</div>
	</div>
</div>
		