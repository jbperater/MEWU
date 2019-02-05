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
							<i class="fa fa-file"></i> Repair Requests
						</li>
					</ol>
				</div>
				<table>
					<tr><td><strong>Job ID</strong></td>
					<td><strong>Date Requested</strong></td>
					<td><strong>Description</strong></td>
					<td><strong>Building Number</strong></td>
					<td><strong>Location</strong></td>
				     
				     
				     <?php foreach($repair as $repair){ ?>
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
						        <form action="#" method="post" class="form_group">
						        <div class="modal-body">
										<select name="personel" class="form-control">
										<?php foreach($option as $option){  ?>
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
		