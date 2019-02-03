<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->library('session');
$user_detail = $this->session->userdata('user_data_session');
$username = $user_detail['username'];
$type = $user_detail['type'];


if($content == 'dashboard') { $this->load->view('home'); $selected = $content; $content='';}

if($content == 'Admin_pen_req') { $this->load->view('Admin/Admin_pen_req'); $selected = $content; $content='';}
if($content == 'Admin_set_event') { $this->load->view('Admin/Admin_set_event'); $selected = $content; $content='';}
if($content == 'Admin_pen_rep') { $this->load->view('Admin/Admin_pen_rep'); $selected = $content; $content='';}
if($content == 'Admin_set_event') { $this->load->view('Admin/Admin_set_event'); $selected = $content; $content='';}
if($content == 'Admin_set_repair') { $this->load->view('Admin/Admin_set_repair'); $selected = $content; $content='';}
if($content == 'Admin_view_sched') { $this->load->view('Admin/Admin_view_sched'); $selected = $content; $content='';}
if($content == 'Admin_view_repair') { $this->load->view('Admin/Admin_view_repair'); $selected = $content; $content='';}
if($content == 'Admin_add_equip') { $this->load->view('Admin/Admin_add_equip'); $selected = $content; $content='';}
if($content == 'Admin_view_equip') { $this->load->view('Admin/Admin_view_equip'); $selected = $content; $content='';}
if($content == 'Admin_add_event_equip') { $this->load->view('Admin/Admin_add_event_equip'); $selected = $content; $content='';}
if($content == 'Admin_view_event_equip') { $this->load->view('Admin/Admin_view_event_equip'); $selected = $content; $content='';}
if($content == 'Admin_add_venue') { $this->load->view('Admin/Admin_add_venue'); $selected = $content; $content='';}
if($content == 'Admin_view_venue') { $this->load->view('Admin/Admin_view_venue'); $selected = $content; $content='';}
if($content == 'approve_request') { $this->load->view('Admin/approve_request'); $selected = $content; $content='';}
if($content == 'Admin_forecast') { $this->load->view('Admin_forecast'); $selected = $content; $content='';}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">
	
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/css/plugins/morris.css" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/css.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/scripts/fullcalendar/fullcalendar.min.css" />
    

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
                <a class="navbar-brand" href="<?php echo base_url();?>home">Admin Panel</a>
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

                    if ($selected == 'Admin_pen_req' || $selected == 'Admin_pen_rep')  echo '<li class="active" >';
                    else echo '<li>';
                    ?>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-file"></i> View Requests <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/Admin_pen_req"> View Event Requests</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/Admin_pen_rep"> View Repair Requests</a>
                            </li>
                        </ul>
                    </li>

                    <?php 

                    if ($selected == 'Admin_set_event' || $selected == 'Admin_set_repair')  echo '<li class="active" >';
                    else echo '<li>';
                    ?>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-file"></i> Set Schedule <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/Admin_set_event"> Set Event Reservation</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/Admin_set_repair"> Set Repair Schedule</a>
                            </li>
                        </ul>
                    </li>
                    
                    <?php 
                    if ($selected == 'Admin_view_sched' || $selected == 'Admin_view_repair')  echo '<li class="active" >';
                    else echo '<li>';
                    ?>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo3"><i class="fa fa-fw fa-file"></i> View Schedule <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo3" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/Admin_view_sched">Event Schedule</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/Admin_view_repair">Repair Request</a>
                            </li>
                        </ul>
                    </li>

                    <?php 
                    if ($selected == 'Admin_add_equip' || $selected == 'Admin_view_equip')  echo '<li class="active" >';
                    else echo '<li>';
                    ?>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo4"><i class="fa fa-fw fa-file"></i> Equipment <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo4" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/Admin_add_equip"> Add Equipment</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/Admin_view_equip">View Equipment</a>
                            </li>
                        </ul>
                    </li>

                     <?php 
                    if ($selected == 'Admin_add_event_equip' || $selected == 'Admin_view_event_equip')  echo '<li class="active" >';
                    else echo '<li>';
                    ?>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo5"><i class="fa fa-fw fa-file"></i>Event Equipment <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo5" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/Admin_add_event_equip"> Add Equipment</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/Admin_view_event_equip">View Equipment</a>
                            </li>
                        </ul>
                    </li>

                    <?php 
                    if ($selected == 'Admin_add_venue' || $selected == 'Admin_view_venue')  echo '<li class="active" >';
                    else echo '<li>';
                    ?>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo6"><i class="fa fa-fw fa-file"></i> Venue <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo6" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/Admin_add_venue"> Add Venue</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/Admin_view_venue">View Venue</a>
                            </li>
                        </ul>
                    </li>

                    <?php 
                    if ($selected == 'Admin_forecast' || $selected == 'Admin_view_event_equip')  echo '<li class="active" >';
                    else echo '<li>';
                    ?>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo7"><i class="fa fa-fw fa-file"></i>Forecast <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo7" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>Admin/Admin_forecast"> View Forecast</a>
                            </li>
                            
                        </ul>
                    </li>

                </ul>				
            </div>
            <!-- /.navbar-collapse -->
        </nav>

		<div id="foo-bottom">
		<a href="" id="txt-standard">
			MEWU 2019: Mechanical and Electrical Work Unit USTP
		</a>
		</div>
		
    </div>
	
     jQuery
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    
    
    Bootstrap Core JavaScript
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    
    <script src="<?php echo base_url(); ?>assets/scripts/fullcalendar/lib/moment.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/scripts/fullcalendar/lib/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/fullcalendar/gcal.js"></script>

    <!--Morris Charts JavaScript
    <script src="<?php echo base_url();?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/morris/morris-data.js"></script>
     -->
</body>

</html>
