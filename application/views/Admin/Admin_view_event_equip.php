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
							<i class="fa fa-file"></i> Add Equipment
						</li>
					</ol>
				</div>
				<table>
				  <tr>
				    <th>Name</th>
				    <th>Type</th>
				  </tr>
				  <?php
				 if($fetch_data->num_rows() > 0)
				 {
				 	foreach ($fetch_data->result() as $row) {
				 ?>		
					<tr>
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
		