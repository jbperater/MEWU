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
							<i class="fa fa-file"></i> View Equipment
						</li>
					</ol>
				</div>
				<table>
				  <tr>
				    <th>Equipment Name</th>
				    <th>Brand</th>
				    <th>Model</th>
				    <th>Serial Number</th>
				    <th>Office</th>
				    <th>Type</th>
				    <th>Year Acquired</th>
				  </tr>
				  <?php foreach($fetch_data as $row){?>
					<tr>
						<td><?php echo $row->equip_name; ?></td>
						<td><?php echo $row->brand; ?></td>
						<td><?php echo $row->model; ?></td>
						<td><?php echo $row->serial_no; ?></td>
						<td><?php echo $row->office; ?></td>
						<td><?php echo $row->type; ?></td>
						<td><?php echo $row->year_acc; ?></td>

					</tr>
				 <?php

				 	}
				 

				
				 {

				 ?>	
					
				 <?php
				 }

				 ?>
				</table>
			</div>
		</div>
	</div>
</div>
		