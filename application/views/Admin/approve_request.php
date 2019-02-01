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
              <i class="fa fa-file"></i> Assign Personnel
            </li>
          </ol>
        </div>
        
        <form method="post" action="<?php echo base_url(); ?>Admin/approve_request?approve=<?php echo $this->input->get('approve'); ?>">
              <table >
            <tr>
              <td>Assign Personnel </td>
              <td><input type="text" name="person_attend"/></td>
            </tr>
              <td><button class="btn btn-lg btn-primary btn-block btn-signin" float="right" name="submit" type="submit" value="Save Data">Submit</button></td>
              <!--<td colspan="2" align="left"><input type="submit" name="submit" value="Save Data"/></td>-->
            </tr>
          </table>
           
            </form>
      </div>
    </div>
  </div>
</div>
    