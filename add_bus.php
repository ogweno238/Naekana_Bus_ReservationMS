<?php
	session_start();
?>
<html>
	<head>
		<title>
			Add Bus Details
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
    <?php include'navhead_admin.php'?>
     <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
                <div>
                    <ul class="nav  nav-pills nav-stacked" style="background-color:#C96">
                        
                        <li>
                            <a href="admin_homepage.php"><i class="icon-home icon-large" style="color:#F00"></i>&nbsp;DASHBOARD
                                  
                            </a>

                        </li>
                        <li>
                        <a href="admin_view_booked_tickets.php"><i class="fa fa-bus" aria-hidden="true"></i> View List of Booked Tickets</a>
				
				</li>
                
                <li  class="active"><a href="add_bus.php"><i class="fa fa-bus" aria-hidden="true"></i> Add Bus </a>
				</li>
				<li><a href="add_bus_shedule.php"><i class="fa fa-bus" aria-hidden="true"></i> Add Bus Schedule</a>
				</li>
				<li><a href="delete_bus.php"><i class="fa fa-bus" aria-hidden="true"></i> Delete Bus Schedule</a>
				</li>
                <li><a href="activate_bus.php"><i class="fa fa-bus" aria-hidden="true"></i> Restore Bus Schedule</a>
				</li>
        
		
		</div> </div>
        <div class="span9" style="background-color:#033">
            <div class="hero-unit-3" style="background-color:#033">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;ENTER THE BUS SCHEDULE</strong>
                        </div>
		<form action="bus_detail.php" method="post">
			<h2>ENTER THE BUS DETAILS</h2>
			<div>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The Bus has been successfully added.</strong>
						<br><br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color:red'>*Bus ID already exists, please enter a new Bus ID.</strong>
						<br><br>";
				}
			?>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter a valid Bus ID</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" id="naekana" name="tablet_id" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Bus Model</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" id="naekana" name="tablet_type" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter Bus capacity</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="number" id="naekana" name="total_capacity" required></td>
				</tr>
			</table>
			<br>
			<br>
			<input type="submit" value="Submit" name="Submit">
			</div>
		</form><style>
        #naekana{
	width: 310px;
  	height: 30px;
  	border: 1px solid #dee0e4;
  	margin-bottom: 20px;
  	padding: 0 15px;}

</style>
	</body>
</html>