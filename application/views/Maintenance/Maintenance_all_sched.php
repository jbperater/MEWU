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
							<i class="fa fa-file"></i> All Repair Schedule
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
	
				  </tr>
				  <tr>
				   <td>1</td>
				    <td>Fan Cleaning</td>
				     <td>BLDG 23</td>
				     <td>101</td>
				    <td></td>
				    <td></td>
				    <td>Joshua</td>
				    <td></td>
				  </tr>
				   <tr>
				   <td>1</td>
				    <td>Fan Cleaning</td>
				     <td>BLDG 23</td>
				     <td>101</td>
				    <td></td>
				    <td></td>
				    <td>Joshua</td>
				    <td></td>
				  </tr>
				   <tr>
				   <td>1</td>
				    <td>Fan Cleaning</td>
				     <td>BLDG 23</td>
				     <td>101</td>
				    <td></td>
				    <td></td>
				    <td>Joshua</td>
				    <td></td>
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
		