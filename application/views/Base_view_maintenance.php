<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->library('session');
$user_detail = $this->session->userdata('user_data_session');
$username = $user_detail['username'];
$type = $user_detail['type'];
$this->Maintenance_model->get_equipment();


if($content == 'dashboard') { $this->load->view('home'); $selected = $content; $content='';}
if($content == 'Maintenance_view_equip') { /*$this->load->view('Maintenance/Maintenance_view_equip_dt',array());*/ $selected = $content; }
if($content == 'Maintenance_add_report') { $this->load->view('Maintenance/Maintenance_add_report'); $selected = $content; $content='';}
if($content == 'Maintenance_update_sched') { 
        $id = $this->input->get('id');
        $query = $this->Maintenance_model->update_sched($id);
        $data['data'] = $query;
        $this->load->view('Maintenance/Maintenance_update_sched',$data); 
        $selected = 'Maintenance_repair_sched'; 
        $content='';}
if($content == 'Maintenance_repair_sched') { 
        $id= $this->session->userdata('user_data_id');
        $query = $this->Maintenance_model->view_sched($id);
        $data['content'] = 'Maintenance_repair_sched';
        $data['repair'] =  $query;
    $this->load->view('Maintenance/Maintenance_repair_sched',$data); $selected = $content; $content='';}
if($content == 'Maintenance_all_sched') { $this->load->view('Maintenance/Maintenance_all_sched'); $selected = $content; $content='';}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Maintenance Staff Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/css/plugins/morris.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/css.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/scripts/DataTable/css/datatables.min.css"/>

    <link href="<?php echo base_url('assets/scripts/DataTable/css/jquery.dataTables.css') ?>" rel="stylesheet" />

    <!-- Custom Fonts 
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"  -->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>home">Maintenance Staff Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $username;?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>settings"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url(); ?>logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" >
                <ul class="nav navbar-nav side-nav">
                   <!--  <?php 
                                       if ($selected == 'dashboard')     echo '<li class="active" >';
                                       else echo '<li>';
                                       ?>
                       <a href="<?php echo base_url(); ?>home"><i class="fa fa-fw fa-dashboard"></i> Dashboard<?php echo '';?></a>
                   </li>
                   <?php 
                                       if ($selected == 'set_sched')     echo '<li class="active" >';
                                       else echo '<li>';
                                       ?>
                       <a href="<?php echo base_url(); ?>set_sched"><i class="fa fa-fw fa-desktop"></i> Set Schedule</a>
                   </li>
                   <?php 
                                       if ($selected == 'view_req')     echo '<li class="active" >';
                                       else echo '<li>';
                                       ?>
                       <a href="<?php echo base_url(); ?>view_req"><i class="fa fa-fw fa-edit"></i> View Request</a>
                   </li> -->
                    
                    <?php 

                    if ($selected == 'Maintenance_view_equip' || $selected == 'Maintenance_add_report')  echo '<li class="active" >';
                    else echo '<li>';
                    ?>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-file"></i> Equipments <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>Maintenance/Maintenance_view_equip"> View Equipments</a>
                            </li>
                            <!--<li>
                                <a href="<?php echo base_url(); ?>Maintenance/Maintenance_add_report"> Add Repair Report</a>
                            </li>-->
                        </ul>
                    </li>

                    <?php 

                    if ($selected == 'Maintenance_repair_sched' || $selected == 'Maintenance_all_sched')  echo '<li class="active" >';
                    else echo '<li>';
                    ?>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-file"></i> View Schedule <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>Maintenance/Maintenance_repair_sched"> Repair Schedules</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>Maintenance/Maintenance_all_sched"> Summary Reports</a>
                            </li>
                        </ul>
                </ul>               
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <?php
        if($content == 'Maintenance_view_equip') { $this->load->view('Maintenance/Maintenance_view_equip_dt',array()); $selected = $content; $content='';}
        ?>
        <div id="foo-bottom">
        <a href="" id="txt-standard">
            MEWU 2019: Mechanical and Electrical Work Unit USTP
        </a>
        </div>
        
    </div>
    
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/morris/morris-data.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/DataTable/js/datatables.min.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>assets/DataTable/js/jquery.datatables.min.js"></script> 

    <script type="text/javascript">
        $(document).ready(function() {
        $('#book-table').DataTable({
        "ajax": {
            url : "<?php echo base_url();?>maintenance/equipment_page",
            type : 'GET'
        },
    });
    });
</script>

</body>

</html>
