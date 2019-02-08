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
							<i class="fa fa-file"></i> Manage Account
						</li>
					</ol>
				</div>
				<table>
				  <tr>
							<th>Person ID</th>
							<th>Family Name</th>
							<th>Middle Name</th>
							<th>Last Name</th>
							<th>Birthday</th>
							<th>Position</th>
							<th>Contact Number</th>
							<th>Email</th>
							<th>Username</th>
							<th>Password</th>
							<th>Type</th>
							<th>Status</th>
							<th>Sign</th>
							<th>Email</th>
							<th><center>Controls</center></th>
						</thead>
						<tbody>
                        <?php
							if($fetch_data->num_rows() > 0 ){
								foreach($fetch_data->result() as $row)
								{
							?>
                            	<tr>
                            		<td><?php echo $row->person_id; ?></td>
                            		<td><?php echo $row->fname; ?></td>
                            		<td><?php echo $row->mname; ?></td>
                            		<td><?php echo $row->lname; ?></td>
                            		<td><?php echo $row->bday; ?></td>
                            		<td><?php echo $row->position; ?></td>
                            		<td><?php echo $row->contact_no; ?></td>
                            		<td><?php echo $row->email; ?></td>
                            		<td><?php echo $row->username; ?></td>
                            		<td><?php echo $row->password; ?></td>
                            		<td><?php echo $row->type; ?></td>
                            		<td><?php echo $row->status; ?></td>
                            		<td><?php echo $row->sign; ?></td>
                            		<td><?php echo $row->email; ?></td>
                                   
                                    
                                    <td>
      
                                    <a href="http://localhost/sss/auth/update_member?id=<?php echo $row->member_id ?>" style="color:#444; margin-right:5px"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                    <a href="http://localhost/sss/auth/delete_member_record?id=<?php  echo $row->member_id ?>" style="color:#444; margin-right:-150px"><i class="glyphicon glyphicon-trash"></i> Delete</a>
                                    
                                    
                                 
                                    </td>
                                
                                		
		     
                                </tr>
                         
                        </table>
                        <td colspan="9"><?php echo $this->pagination->create_links(); ?></td>
			</div>
		</div>
	</div>
</div>
		