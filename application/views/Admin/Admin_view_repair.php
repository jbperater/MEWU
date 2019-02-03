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
							<i class="fa fa-file"></i> View Maintenance Repair Schedule
						</li>
					</ol>
				</div>
			</div>
				<div class="month">      
				  <ul>
				    <li class="prev">&#10094;</li>
				    <li class="next">&#10095;</li>
				    <li>
				      August<br>
				      <span style="font-size:18px">2017</span>
				    </li>
				  </ul>
				</div>

				<ul class="weekdays">
				  <li>Mo</li>
				  <li>Tu</li>
				  <li>We</li>
				  <li>Th</li>
				  <li>Fr</li>
				  <li>Sa</li>
				  <li>Su</li>
				</ul>

				<ul class="days">  
				  <li>1</li>
				  <li>2</li>
				  <li>3</li>
				  <li>4</li>
				  <li>5</li>
				  <li>6</li>
				  <li>7</li>
				  <li>8</li>
				  <li>9</li>
				  <li><span class="active">10</span></li>
				  <li>11</li>
				  <li>12</li>
				  <li>13</li>
				  <li>14</li>
				  <li>15</li>
				  <li>16</li>
				  <li>17</li>
				  <li>18</li>
				  <li>19</li>
				  <li>20</li>
				  <li>21</li>
				  <li>22</li>
				  <li>23</li>
				  <li>24</li>
				  <li>25</li>
				  <li>26</li>
				  <li>27</li>
				  <li>28</li>
				  <li>29</li>
				  <li>30</li>
				  <li>31</li>
				</ul>
			</div>
			<br>
			<div class="row">
				<table>
				  <tr>
				    <th>Form No</th>
				    <th>Name of Event</th>
				    <th>Department</th>
				    <th>Date Reserved</th>
				    <th>Time Reserved</th>
				    <th>Date Actual Use</th>
				    <th>Time Actual Use</th>
				    <th>Purpose</th>
				    <th>Equipment Needed</th>
				    <th>Contact</th>
				    <th>Status</th>
				  </tr>
				  <tr>
				    <td>1</td>
				    <td>DOST Seminar</td>
				    <td>CITC</td>
				    <td>October 25, 2018</td>
				    <td>12:00</td>
				    <td>November 1, 2018</td>
				    <td>12:00</td>
				    <td>Seminar</td>
				    <td>Chair, Microphone</td>
				    <td>09169947508</td>
				    <td>Approved</td>
				  </tr>
				   <tr>
				    <td>2</td>
				    <td>Intramurals</td>
				    <td>CSM</td>
				    <td>November 25, 2018</td>
				    <td>12:00</td>
				    <td>November 1, 2018</td>
				    <td>12:00</td>
				    <td>Seminar, Aircon, Microphones</td>
				    <td>Chair</td>
				    <td>09169947508</td>
				    <td>Approved</td>
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
		