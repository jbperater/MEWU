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
				<form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>Admin/update_account">

					<div class="container">
					<div class="row" style="margin-top: 10%">
					<?php foreach($records as $row){ ?>
						<!--<form class="contact-form" action="search_account" method="post">
                     			
								<div class="form-group">
									<input style="border:black 1px solid;" type="text" name="search" value="<?php echo $row->member_id; ?>" hidden/>
								</div>
								<div class="form-group" >
									<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Back" 
			                        style="float: right; background-color: #124B82; color: #FFF; margin-right: 50px;">	
			                    </div>							
                        </form>
						<?php } ?>-->
						<br><br><br>
                     <h4 style="color:black"><i class="glyphicon glyphicon-user" style="color:black; margin-left:15px;"></i>
             Update Member</h4>
                     <div id="errMsg" style="color:#F00;">
                      <h4 style="color:#C30; font-size:13px; margin-left:10px;">
           		 <?php if(!empty($_SESSION['errMsg'])) { echo '<i class="glyphicon glyphicon-remove"></i>' . " " . $_SESSION['errMsg']; } ?></h4>
       			 </div>
        		 <?php unset($_SESSION['errMsg']); ?>
						
                        <?php if(isset($records)) : foreach($records as $row) : ?>
		               		 	<form class="contact-form" action="update_account" method="post">
									<div class="col-md-4 animate-box">
		                     			<label style="font-size:15px; color:black; ">Current Person ID Number:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="new_person_id" value="<?php echo $row->person_id ?>" placeholder="ID Number*" autocomplete="off" required>
										</div>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" name="person_id" value="<?php echo $row->person_id; ?>" hidden/>
										</div>
										<label style="font-size:15px; color:black;">First Name:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="lastname" value="<?php echo $row->fname ?>" placeholder="First Name*" autocomplete="off" required>
										</div>
										<label style="font-size:15px; color:black; ">Middle Name:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="mname" value="<?php echo $row->mname ?>" placeholder="Middle Name*" autocomplete="off" required>
										</div>
										<label style="font-size:15px; color:black; ">Last Name:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="lname" value="<?php echo $row->lname ?>" placeholder="Last Name*" autocomplete="off" required>
										</div>
										<label style="font-size:15px; color:black; ">Birthday:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="bday" value="<?php echo $row->bday ?>" placeholder="Birthday*" autocomplete="off">
										</div>
										<label style="font-size:15px; color:black; ">Position:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="position" value="<?php echo $row->position ?>" placeholder="Position*" autocomplete="off">
										</div>
										<label style="font-size:15px; color:black; ">Contact Number:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="contact_no" value="<?php echo $row->contact_no ?>" placeholder="Contact Number*" autocomplete="off">
										</div>
										<label style="font-size:15px; color:black; ">Email:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="email" value="<?php echo $row->email ?>" placeholder="Email*" autocomplete="off">
										</div>
										<label style="font-size:15px; color:black; ">Username:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="username" value="<?php echo $row->username ?>" placeholder="Username*" autocomplete="off">
										</div>
										<label style="font-size:15px; color:black; ">Password:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="password" value="<?php echo $row->password ?>" placeholder="Password*" autocomplete="off">
										</div>
										<label style="font-size:15px; color:black; ">Type:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="type" value="<?php echo $row->type ?>" placeholder="Type*" autocomplete="off">
										</div>
										<label style="font-size:15px; color:black; ">Status:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="status" value="<?php echo $row->status ?>" placeholder="Status*" autocomplete="off">
										</div>
										<label style="font-size:15px; color:black; ">Sign:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="text" class="form-control" name="sign" value="<?php echo $row->sign ?>" placeholder="Sign*" autocomplete="off">
										</div>
										<label style="font-size:15px; color:black; ">Date Created:</label>
										<div class="form-group">
											<input style="border:black 1px solid;"type="datetime-local" class="form-control" name="date_created" value="<?php echo $row->date_created ?>" placeholder="Date Created*" autocomplete="off">
										</div>
										<div class="form-group">
											<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Update Account" 
					                        style="float: left; 	background-color: #124B82; color: #FFF;">
					                    </div>
		                   </form>     
                        <?php endforeach ; ?>
            			<?php endif; ?>
								
					</div>
						</div>
				</div>
		</div>
	</div>
</div>
		