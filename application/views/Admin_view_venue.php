<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->library('session');
/*$this->load->database();
$fetch_data=$this->db->get("venue");*/
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
							<i class="fa fa-file"></i> View Venue
						</li>
					</ol>
				</div>
				<table>
				  <tr>
				    <th>Venue Id</th>
				    <th>Building No</th>
				    <th>Room Number</th>
				    <th>Name</th>
				  </tr>
				 <?php
				 if($fetch_data->num_rows() > 0)
				 {
				 	foreach ($fetch_data->result() as $row) {
				 ?>		
					<tr>
						<td><?php echo $row->venue_id; ?></td>
						<td><?php echo $row->bldg_no; ?></td>
						<td><?php echo $row->name; ?></td>
						<td><?php echo $row->type; ?></td>

					</tr>
				 <?php

				 	}
				 }

				 else
				 {

				 ?>	
					<tr>
						<td>NO DATA</td>
					</tr>
				 <?php
				 }

				 ?>
				</table>
			</div>
		</div>
	</div>
</div>
		