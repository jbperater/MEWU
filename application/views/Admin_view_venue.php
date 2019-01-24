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
				  <tr>
				    <td>1</td>
				    <td>25</td>
				    <td>402</td>
				    <td>AVR</td>
				  </tr>
				  <tr>
				    <td>2</td>
				    <td>41</td>
				    <td>402</td>
				    <td>Lecture Room</td>
				  </tr>
				  <tr>
				    <td>3</td>
				    <td>42</td>
				    <td>405</td>
				    <td>Conference Room</td>
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
		