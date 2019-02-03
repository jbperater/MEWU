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
							<i class="fa fa-file"></i> Repair Schedule
						</li>
					</ol>
				</div>
				<table>
				  <tr>
				    <th>Item No</th>
				    <th>Work Deccrition</th>
				    <th>Location Bldg/Office</th>
				    <th>Room</th>
				    <th>Date & Time Started</th>
				    <th>Date & Time Finished</th>
				    <th>Person Attended</th>
				    <th>Remarks</th>
				    <th></th>

			
				  </tr>

					 <?php foreach($repair as $repair){?>
				     <tr>
				     <td><?=$repair->item_no;?></td>
				    <td><?=$repair->date_req;?></td>
				 	<td><?=$repair->work_description;?></td>
				 	<td><?=$repair->bldg_no;?></td>
				 	<td><?=$repair->location;?></td>
				 	<td><?=$repair->date_time_start;?></td>
				 	<td><?=$repair->date_time_fin;?></td>
				 	<td><?=$repair->remark;?></td>
				 	
				 	<td> <a href="<?php echo base_url();?>Maintenance/maintenance_update_sched?id=<?=$repair->job_id;?>"> 
				 		<!-- <a data-toggle="modal" href="#myModal" > -->
					      <button class='btn btn-success' style='width:100%;margin-top:2px;'>Update</button>
						</a>
				 	 </tr>    
				    <?php }?>

				  <tr>
				   <td>1</td>
				    <td>Fan Cleaning</td>
				     <td>BLDG 23</td>
				     <td>101</td>
				    <td></td>
				    <td></td>
				    <td>Joshua</td>
				    <td></td>
				    <td><button class="btn btn-lg btn-primary btn-block btn-signin" float="right" name="view_history" type="submit" value="Save Data">Update</button></td>

				  </tr>

				  
				</table>
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
		