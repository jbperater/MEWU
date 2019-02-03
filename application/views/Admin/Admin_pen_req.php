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
					<tr><td><strong>Form Number</strong></td>
					<td><strong>Venue</strong></td>
					<td><strong>Number of Participants</strong></td>
					<td><strong>Name</strong></td>
					
					<td><strong>Department</strong></td>
					<td><strong>Date Reserved</strong></td>
					<td><strong>Date Actual Use</strong></td>
					<td><strong>Purpose</strong></td>
					<td><strong>Name of Event</strong></td>
				     
				     <?php foreach($event_req as $event_req){?>
				     <tr>
				    <td><?=$event_req->form_no;?></td>
				 	<td><?=$event_req->name;?></td>
				 	<td><?=$event_req->no_participants;?></td>
				 	<td><?=$event_req->fname;?>&nbsp<?=$event_req->mname;?>&nbsp<?=$event_req->lname;?></td>
				 	
				 	<td><?=$event_req->acroname;?></td>
				 	<td><?=$event_req->date_request;?></td>
				 	<td><?=$event_req->date_act;?></td>
				 	<td><?=$event_req->purpose;?></td>
				 	<td><?=$event_req->title_event;?></td>
				 	<td><a href="" button class="btn btn-lg btn-primary btn-block btn-signin" float="right" name="approve_request" type="submit" value="Save Data">Approve</button></td>
				 	<td><a href="" button class="btn btn-lg btn-primary btn-block btn-signin" float="right" name="decline_request" type="submit" value="Save Data">Decline</button></td></tr>    
				    <?php }?>
				
				</table>
			</div>
		</div>
	</div>
</div>
		