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
				<table id="book-table">
					<tr>
					<!-- <td><strong>Number</strong></td> -->
					<td><strong>Name</strong></td>
					<td><strong>Brand</strong></td>
					<td><strong>Model</strong></td>
					<td><strong>Serial Number</strong></td>
					<td><strong>Office</strong></td>
					<!-- <td><strong>Department</strong></td> -->
					<td><strong>Year Acquired</strong>
					<td><strong></strong>
					<td></td></td></tr> 
				     
				    
				  
				</table>
					
			</div>
		</div>
	</div>
</div>
		