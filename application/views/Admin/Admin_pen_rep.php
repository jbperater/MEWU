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
				 	<td><a href="<?php echo base_url();?>Admin/admin_rep_app?id=<?=$repair->job_id;?>">
					      <button class='btn btn-success' style='width:40%;margin-top:2px;'>Approve</button>
						</a>
				 	 <a href="<?php echo base_url();?>Admin/admin_rep_dec?id=<?=$repair->job_id;?>">
					      <button class='btn btn-danger' style='width:40%;margin-top:2px;'>Decline</button>
						</a></td></tr>    
				    <?php }?>
				<!--<table>
				  <tr>
				    <th>Form No</th>
				    <th>Date Requested</th>
				    <th>Description</th>
				    <th>Building Number</th>
				    <th>Room Number</th>
				    <th></th>
				  </tr>
				  <tr>
				    <td>1</td>
				    <td>November 15, 2018</td>
				    <td>Aircon not functioning</td>
				    <td>Building 9</td>
				    <td>306</td>
				    <td>
				    	<a href='../user/about_me.php?id=".$row['staff_id']."'>
					      <button class='btn btn-success' style='width:75px;margin-top:2px;'>Approve</button>
						</a>
					 	
					    <a href='Update_staff.php?id=".$row['staff_id']."'>
					      <button class='btn btn-primary' style='width:75px;margin-top:2px;'>Disapprove</button>
						</a>
					 </td>
					</tr>
				
				 <!--  <tr>
				   <td>Centro comercial Moctezuma</td>
				   <td>Francisco Chang</td>
				   <td>Mexico</td>
				 </tr>
				 <tr>
				   <td>Ernst Handel</td>
				   <td>Roland Mendel</td>
				   <td>Austria</td>
				 </tr>
				 <tr>
				   <td>Island Trading</td>
				   <td>Helen Bennett</td>
				   <td>UK</td>
				 </tr>
				 <tr>
				   <td>Laughing Bacchus Winecellars</td>
				   <td>Yoshi Tannamuri</td>
				   <td>Canada</td>
				 </tr>
				 <tr>
				   <td>Magazzini Alimentari Riuniti</td>
				   <td>Giovanni Rovelli</td>
				   <td>Italy</td>
				 </tr> -->
				</table>
			</div>
		</div>
	</div>
</div>
		