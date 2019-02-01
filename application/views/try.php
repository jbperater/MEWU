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
							<i class="fa fa-file"></i> Add Forecast
						</li>
					</ol>
				<div id="graph"></div>
 
			    
			    <script>
			        console.log("hoy");
			        console.log(<?php echo $data;?>);
			    </script>
				</div>	
			</div>
		</div>
	</div>
</div>
		