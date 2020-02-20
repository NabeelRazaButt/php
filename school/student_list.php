<?php
include 'config.php';
$sql="SELECT * FROM `student`";
$report=mysqli_query($conn,$sql);
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
	body {
    background-color:#393939;
}

.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: middle;
    border-top: 1px solid #ddd;
}

.switch {
  position: relative;
  display: inline-block;
  width: 45px;
  height: 20px;
  vertical-align: middle;
  margin-top: 8px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #A1A6AB;
  -webkit-transition: .4s;
  transition: .4s;

}

.slider:before {
  position: absolute;
  content: "";
 height: 16px;
width: 14px;
left: 2px;
bottom: 2px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #800080;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}


.table th, .table td { 
     border-top: none !important;
     border-left: none !important;
 }

.table-striped > tbody > tr:nth-of-type(2n+1) {
    background-color: #313131 ;
}

.table-call {
    min-height: .01%;
    overflow-x: auto;
    margin-top: 15px;
    border-radius: 6px;
}

.nav > li > a:focus, .nav > li > a:hover {
    text-decoration: none;
    background-color: black;
    color: white;
}


.table.table-bordered.vertical,
.table.table-bordered.vertical td,
.table.table-bordered.vertical th{
  border-top: 0px solid white !important;
  border-bottom: 0px solid white !important;
  border-right: 0px solid white !important;
  border-left: 0px solid white !important;
    }

.head {
  font-weight: normal;
  font-size: 16px;
}

</style>

<div class="container">
                <div class="row"  style="margin-top: 50px;">
                <div class="col-md-12 text-center">
                          <div class="outer-form">
                    <table class="table-striped table table-bordered vertical">
                    	<h1 style="color: white; font-weight: normal;" >Students Record</h1>
                          <thead style="color: white; font-weight: normal; background-color: black;" >
                            <tr>
		                         <th>Name</th>
		                         <th>Father Name</th>
		                         <th>Email</th>
		                         <th>Phone</th>
		                         <th>City</th>
		                         <th>Address</th>
		                         <th>Gender</th>
	                        </tr>
                          </thead>

                          <tbody style="border:1px solid transparent; background-color:#242424; color:#A1A6AB; text-align: left;">
                          	<?php while ($record=mysqli_fetch_array($report)) { ?>
                            <tr>
                            	<td><?php echo $record['name']; ?></td>
			                    <td><?php echo $record['f_name']; ?></td>
			                    <td><?php echo $record['email']; ?></td>
			                    <td><?php echo $record['phone']; ?></td>
			                    <td><?php echo $record['city']; ?></td>
			                    <td><?php echo $record['address']; ?></td>
			                    <td><?php echo $record['gender']; ?></td>
                               <label class="switch">
                               </label>
                              </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                      </div>
                  </div>
              </div>
          </div>
	