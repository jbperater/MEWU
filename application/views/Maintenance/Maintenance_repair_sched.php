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
					<?php foreach($data as $data){?>
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
		