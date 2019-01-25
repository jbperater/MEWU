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
							<i class="fa fa-file"></i> Pending Event Request
						</li>
					</ol>
				</div>
				<div class="row">
				<table>
				  <tr>
				    <th>Form No</th>
				    <th>Name of Event</th>
				    <td>Venue</td>
				    <th>Department</th>
				    <th>Date Reserved</th>
				    <th>Time Reserved</th>
				    <th>Date Actual Use</th>
				    <th>Time Actual Use</th>
				    <th>Purpose</th>
				    <th>Equipment Needed</th>
				    <th>Contact</th>
				    <th>Status</th>
				  </tr>
				  <tr>
				    <td>1</td>
				    <td>DOST Seminar</td>
				    <td>Gym</td>
				    <td>CITC</td>
				    <td>OCtober 25, 2018</td>
				    <td>12:00</td>
				    <td>NOvember 1, 2018</td>
				    <td>12</td>
				    <td>Seminar</td>
				    <td>Chair</td>
				    <td>09169947508</td>
				    <td>Pending</td>
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
		