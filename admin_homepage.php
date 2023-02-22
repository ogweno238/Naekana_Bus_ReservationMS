<?php
	session_start();
	if($_SESSION['login_user']==null){
		header('location:index.php');
	}
?>
<html>
	<head>
		<title>
			Welcome Administrator
		</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
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
                        <li class="active">
                        <a href="admin_view_booked_tickets.php"><i class="fa fa-bus" aria-hidden="true"></i> View List of Booked Tickets</a>
				
				</li>
                
                <li><a href="add_bus.php"><i class="fa fa-bus" aria-hidden="true"></i> Add Bus </a>
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
                            <strong><i class="icon-user icon-large"></i>&nbsp;ACTIVATE BUS</strong>
                        </div>
                       <form action="add_flight_details_form_handler.php" method="post">
			<h2> </h2>
			<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color: green'>The Bus Schedule has been successfully added.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>*Invalid Flight Schedule Details, please enter again.</strong>
						<br>
						<br>";
				}
			?>
				<tr>
					<td class="fix_table">Bus Number</td>
                    <td class="fix_table">Tablet ID</td>
				</tr>
				<tr>
					<td class="fix_table"><input id="naekana" type="text" name="bus_no" placeholder="Bus No" required></td>
                    <td class="fix_table">
						<input type="text" id="naekana" name="tablet_id"  placeholder="Bus ID" required>
					</td>
				</tr>
				<tr>
					<td class="fix_table">Origin</td>
					<td class="fix_table">Destination</td>
				</tr>
				<tr>
					<td class="fix_table"><input id="naekana" type="text"  placeholder="From" name="origin" required></td>
					<td class="fix_table"><input id="naekana" type="text"  placeholder="To" name="destination" required></td>
				</tr>
				<tr>
					<td class="fix_table">Departure Date</td>
					<td class="fix_table">Arrival Date</td>
				</tr>
				<tr>
					<td class="fix_table"><input id="naekana"  placeholder="Depature date" type="date" name="dep_date" required></td>
					<td class="fix_table"><input id="naekana" type="date"  placeholder="Arrival Date" name="arr_date" required></td>
				</tr>
				<tr>
					<td class="fix_table">Departure Time</td>
					<td class="fix_table">Arrival Time</td>
				</tr>
				<tr>
					<td class="fix_table"><input id="naekana" type="time" name="dep_time" required></td>
					<td class="fix_table"><input id="naekana" type="time" name="arr_time" required></td>
				</tr>
				<tr>
					<td class="fix_table">Number of Seats in Economy Class</td>
					<td class="fix_table">Number of Seats in Business Class</td>
				</tr>
				<tr>
					<td class="fix_table"><input id="naekana" type="number"  placeholder="No Of Seats" name="seats_eco" required></td>
					<td class="fix_table"><input id="naekana" type="number"  placeholder="No Of Seats" name="seats_bus" required></td>
				</tr>
				<tr>
					<td class="fix_table">Ticket Price(Economy Class)</td>
					<td class="fix_table">Ticket Price(Business Class)</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input type="number" id="naekana" name="price_eco"  placeholder="Price" required>
					</td>
					<td class="fix_table">
						<input type="number" id="naekana" name="price_bus" placeholder="Price" required>
					</td>
				</tr>
			
			<br></table>
			<center><input type="submit" value="Submit" class="btn btn-primary" style="width:300px" name="Submit"></center>
		</form></div>
<style>
#naekana{
	width: 310px;
  	height: 30px;
  	border: 1px solid #dee0e4;
  	margin-bottom: 20px;
  	padding: 0 15px;}

</style>
	</body>
</html>