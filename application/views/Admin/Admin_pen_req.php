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
					<tr><td><strong>Date Requested</strong></td>
					<td><strong>Title of Event</strong></td>
					<td><strong>Venue</strong></td>
					<td><strong>Purpose</strong></td>
					<td><strong>Date Actual Use</strong></td>
					<td><strong>Time Actual Use</strong></td>
					<td><strong>Department</strong></td>
				     
				     <?php foreach($event as $event){?>
				     <tr>
				    <td><?=$event->date_request;?></td>
				    <td><?=$event->title_event;?></td>
				 	<td><?=$event->venue;?></td>
				 	<td><?=$event->purpose;?></td>
				 	<td><?=$event->date_act;?></td>
				 	<td><?=$event->time_act;?></td>
				 	<td><?=$event->department;?></td>
				 	<td><a href="" button class="btn btn-lg btn-primary btn-block btn-signin" float="right" name="approve_request" type="submit" value="Save Data">Approve</button></td>
				 	<td><a href="" button class="btn btn-lg btn-primary btn-block btn-signin" float="right" name="decline_request" type="submit" value="Save Data">Decline</button></td></tr>    
				    <?php }?>
				
				</table>
			</div>
		</div>
	</div>
</div>
		