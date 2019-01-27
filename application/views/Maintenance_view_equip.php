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
					<tr><td><strong>Number</strong></td>
					<td><strong>Name</strong></td>
					<td><strong>Brand</strong></td>
					<td><strong>Model</strong></td>
					<td><strong>Serial Number</strong></td>
					<td><strong>Office</strong></td>
					<td><strong>Department</strong></td>
					<td><strong>Year Acquired</strong></td></tr> 
				     
				     <?php foreach($equipment as $equipment){?>
				     <tr>
				    <td><?=$equipment->equip_id;?></td>
				 	<td><?=$equipment->equip_name;?></td>
				 	<td><?=$equipment->brand;?></td>
				 	<td><?=$equipment->model;?></td>
				 	<td><?=$equipment->serial_no;?></td>
				 	<td><?=$equipment->office;?></td>
				 	<td><?=$equipment->depart;?></td>
				 	<td><?=$equipment->year_acc;?></td></tr>     
				    <?php }?>
				  <!--<tr>
				    <th>Name</th>
				    <th>Brand</th>
				    <th>Model</th>
				    <th>Serial Number</th>
				    <th>Office</th>
				    <th>Department</th>
				    <th>Year Acquired</th>
				  </tr>
				
		            <td></td>  
		            <td></td>
		            <td></td>  
		            <td></td> 
		            <td></td>  
		            <td></td>
		            <td></td>   
		            
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
		