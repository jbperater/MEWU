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
				    <th>Equipment ID</th>
				    <th>Name</th>
				    <th>Brand</th>
				    <th>Model</th>
				    <th>Serial No</th>
				    <th>Office</th>
				    <th>Department</th>
				    <th>Year Acquired</th>
				  </tr>
				  <tr>
				    <td>1</td>
				    <td>Aircon</td>
				    <td>LG</td>
				    <td>224</td>
				    <td>15426</td>
				    <td>CITC OFFICE</td>
				    <td>CITC</td>
				    <td>2012</td>
				  </tr>
				  <tr>
				    <td>2</td>
				    <td>Aircon</td>
				    <td>Mistubishi</td>
				    <td>224</td>
				    <td>15426</td>
				    <td>CSM OFFICE</td>
				    <td>CSM</td>
				    <td>2012</td>
				  </tr>
				  <tr>
				    <td>3</td>
				    <td>Aircon</td>
				    <td>Condura</td>
				    <td>9986823</td>
				    <td>4312</td>
				    <td>CEA OFFICE</td>
				    <td>CEA</td>
				    <td>2012</td>
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
		