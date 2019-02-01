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
							<i class="fa fa-file"></i> View Event Schedule
						</li>
					</ol>
				</div>
			</div>
			<div class="row">
			    <div class="col-md-12">
				
			    <h1>Caelndar</h1>
				<div id="calendar"></div>

				<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Add Calendar Event</h4>
				      </div>
				      <div class="modal-body">
				      <?php echo form_open(site_url("calendar/add_event"), array("class" => "form-horizontal")) ?>
				      <div class="form-group">
				                <label for="p-in" class="col-md-4 label-heading">Event Name</label>
				                <div class="col-md-8 ui-front">
				                    <input type="text" class="form-control" name="name" value="">
				                </div>
				        </div>
				        <div class="form-group">
				                <label for="p-in" class="col-md-4 label-heading">Description</label>
				                <div class="col-md-8 ui-front">
				                    <input type="text" class="form-control" name="description">
				                </div>
				        </div>
				        <div class="form-group">
				                <label for="p-in" class="col-md-4 label-heading">Start Date</label>
				                <div class="col-md-8">
				                    <input type="datetime-local" class="form-control" name="start_date">
				                </div>
				        </div>
				        <div class="form-group">
				                <label for="p-in" class="col-md-4 label-heading">End Date</label>
				                <div class="col-md-8">
				                    <input type="datetime-local" class="form-control" name="end_date">
				                </div>
				        </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <input type="submit" class="btn btn-primary" value="Add Event">
				        <?php echo form_close() ?>
				      </div>
				    </div>
				  </div>
				</div>
			    </div>
		    </div>

		    <div class="row">
		    	<a data-toggle="modal" href="#addModal" class="btn btn-primary">Launch modal</a>
					<div class="modal fade" id="myModal">
					    <div class="modal-dialog">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					          <h4 class="modal-title">Modal title</h4>
					        </div>
					        <div class="modal-body">
					          Content for the dialog / modal goes here.
					        </div>
					        <div class="modal-footer">
					          <a href="#" data-dismiss="modal" class="btn">Close</a>
					          <a href="#" class="btn btn-primary">Save changes</a>
					        </div>
					      </div>
					    </div>
					</div>
		    </div>

		    <div id="calendarModal" class="modal fade">
				<div class="modal-dialog">
				    <div class="modal-content">
				        <div class="modal-header">
				            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
				            <h4 id="modalTitle" class="modal-title"></h4>
				        </div>
				        <div id="modalBody" class="modal-body"> </div>
				        <div class="modal-footer">
				            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div>
				    </div>
				</div>
				</div>
		</div>
	</div>
</div>


  <script src="<?php echo base_url(); ?>assets/scripts/fullcalendar/lib/moment.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/scripts/fullcalendar/lib/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/fullcalendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/fullcalendar/gcal.js"></script>

<script type="text/javascript">

var date_last_clicked = null;

$(document).ready(function() {

	/*$.post('<?php echo base_url() ?>calendar/get_eventss',
		function(data){
			alert(data);
		});*/
	$('#calendar').fullCalendar({
		header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay',
      },
      	
		 eventSources: [
            {
                 events: function(start, end, timezone, callback) {
                 $.ajax({
                 url: '<?php echo base_url() ?>calendar/get_events',
                 dataType: 'json',
                 data: {
                 // our hypothetical feed requires UNIX timestamps
                 start: start.unix(),
                 end: end.unix()
                 },
                 success: function(msg) {
                     var events = msg.events;
                     callback(events);
                 }
                 });
             }
            }
        ],

         dayClick: function(date, jsEvent, view) {
                date_last_clicked = $(this);
                $(this).css('background-color', '#bed7f3');
       
           console.log(date_last_clicked);
    	}

    	
    });



    
});
</script>

		