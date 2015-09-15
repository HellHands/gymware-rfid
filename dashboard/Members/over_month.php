﻿
<?php
require 'db_conn.php';
page_protect();

if (isset($_POST['from'])) {
?><!doctype html>


<head><title>GymWare ,A Complete Fitness Management & Administration System</title>
		<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<!-- Bootstrap -->
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="../../css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="../../css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="../../css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- dataTables -->
	<link rel="stylesheet" href="../../css/plugins/datatable/TableTools.css">
	<!-- chosen -->
	<link rel="stylesheet" href="../../css/plugins/chosen/chosen.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="../../css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="../../css/themes.css">

	<!-- jQuery -->
	<script src="../../js/jquery.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="../../js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<!-- slimScroll -->
	<script src="../../js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="../../js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="../../js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- dataTables -->
	<script src="../../js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="../../js/plugins/datatable/TableTools.min.js"></script>
	<script src="../../js/plugins/datatable/ColReorder.min.js"></script>
	<script src="../../js/plugins/datatable/ColVis.min.js"></script>
	<!-- Chosen -->
	<script src="../../js/plugins/chosen/chosen.jquery.min.js"></script>

	<!-- Theme framework -->
	<script src="../../js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="../../js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="../../js/demonstration.min.js"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>
<body>
	<div id="navigation">
		<div class="container-fluid">
			<a href="index.php" id="brand">
GymWare</a>			
			<ul class='main-nav'>
				<li class='active'>
					<a href="index.php">
						<i class="icon-home"></i>
						<span>Dashboard</span>
                        
					</a>
				</li>
                
				<li>
					<a href="new_entry.php">
						<i class="icon-edit"></i>
						<span>New Registration</span>
						
					</a>    
					
				</li><li>
					<a href="payments.php">
						<i class="icon-edit"></i>
						<span>Payments</span>
						
					</a>
					
				</li>
<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<i class="icon-edit"></i>
						<span>Members</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="view_mem.php">View Members</a>
						</li><li>
							<a href="table_view.php">View / Enter Schedule</a>
						</li>
						</ul>
</li>
<li>
					<a href="change_values.php">
						<i class="icon-edit"></i>
						<span>Edit Subsciption Details</span>
						
					</a>
					
				</li><li>
					<a href="new_plan.php">
						<i class="icon-edit"></i>
						<span>New Plan</span>
						
					</a>
					
				</li>
<li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<i class="icon-edit"></i>
						<span>Overview</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="over_members_month.php">Members per Month</a>
						</li><li>
							<a href="over_members_year.php">Members per Year</a>
						</li>
						<li>
							<a href="revenue_month.php">Income per month</a>
						</li>
</ul>
</li><li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<i class="icon-edit"></i>
						<span>Alerts</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="unpaid.php">Unpaid Members</a>
						</li><li>
							<a href="sub_end.php">Ending Membership</a>
						</li>
						</ul>
</li>
						<li>
							<a href="logout.php">Logout</a>
						</li>
						
					
				</li>
				
				
				
				
			</ul>
			<div class="user">
				<ul class="icon-nav">
					
					<li>
						<a href="logout.php" class='lock-screen' rel='tooltip' title="Sign Out" data-placement="bottom"><i class="icon-lock"></i></a>
					</li>
					
				</ul>
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown"><?php
    echo $_SESSION['full_name'];
    if ($_SESSION['sex'] == 'male') {
        echo "<img src='men-ava.jpg'></a>";
    } else {
        echo "<img src='women-ava.jpg'></a>";
    }
?> 
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="more-userprofile.php">Edit profile</a>
						</li>
						<li>
							<a href="../../login/lock.php">Lock Screen</a>
						</li>
						
					</ul>
				</div>
			</div>
			<a href="#" class='toggle-mobile'><i class="icon-reorder"></i></a>
		</div>
	</div>
	
<div class="container-fluid" id="content">
  <div id="main">
	  <div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Dashboard</h1>
					</div>
					<div class="pull-right">
						
						<ul class="stats"><li class='brown'><a href="revisit_reg.php">
								<i class="icon-bolt"></i>
								<div class="details">
									<span class="big"><?php
    $date  = date('Y-m');
    $query = "select COUNT(*) from user_data WHERE wait='no'";
    
    //echo $query;
    $result = mysqli_query($con, $query);
    $i      = 1;
    if (mysqli_affected_rows($con) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo $row['COUNT(*)'];
        }
    }
    $i = 1;
?></a>
		
<?php
    $from = $_POST['from'];
    $to   = $_POST['to'];
?>							<span>Total Members</span>
								</div>
							</li>
							<li class='blue'>
								<i class="icon-shopping-cart"></i>
								<div class="details">
									<span class="big"><?php
    $date  = date('Y-m');
    $query = "select COUNT(*) from user_data WHERE joining LIKE '$date%'";
    
    //echo $query;
    $result = mysqli_query($con, $query);
    $i      = 1;
    if (mysqli_affected_rows($con) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo $row['COUNT(*)'];
        }
    }
    $i = 1;
?></span>
									<span>Joined This Month</span>
								</div>
							</li>
							<li class='green'>
								<i class="icon-money"></i>
								<div class="details">
									<span class="big">PKR <?php
    $date  = date('Y-m');
    $query = "select * from subsciption WHERE  paid_date LIKE '$date%'";
    
    //echo $query;
    $result  = mysqli_query($con, $query);
    $revenue = 0;
    if (mysqli_affected_rows($con) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $revenue = $row['total'] + $revenue;
        }
    }
    echo $revenue;
?></span>
									<span>Income This Month</span>
								</div>
							</li>
							<li class='orange'>
								<i class="icon-calendar"></i>
								<div class="details">
									<span class="big"></span>
									<span><?php
    echo date('Z');
?></span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="index.php">Home</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="#">Dashboard</a>
							
						</li>
						
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="icon-remove"></i>
						</a>
					</div>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-inbox"></i>
									<?php
    $from = $_POST['from'];
    $to   = $_POST['to'];
?>							Members From :<?php
    echo $from;
?>   To : <?php
    echo $to;
?>
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-nomargin dataTable dataTable-tools  table-bordered">
									<thead>
										<tr>
											<th>S.No</th><th>Membership ID</th>									<th>Name</th>										<th>Age / Sex</th>										<th>Join On</th>									
										</tr>
									</thead>
									<tbody>
									<?php
    
    
    $query  = "select * from user_data WHERE joining BETWEEN '$from' AND '$to'";
    //echo $query;
    $result = mysqli_query($con, $query);
    $sno    = 1;
    
    if (mysqli_affected_rows($con) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            
            
            
            echo "<tr><td>" . $sno . "</td>";
            echo "<td>" . $row['newid'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['age'] . " / " . $row['sex'] . "</td>";
            echo "<td>" . $row['joining'] . "</td>";
            
            $sno++;
            
        }
        
        
    }
    
?>									
									</tbody>
								</table>
							</div><h4>Total Members in This Date Range :<?php
    echo $sno - 1;
?></h4>
						</div>
					</div>
					</div>
<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-inbox"></i>
									<?php
    $from = $_POST['from'];
    $to   = $_POST['to'];
?>							Members Payments :<?php
    echo $from;
?>   To : <?php
    echo $to;
?>
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-nomargin dataTable dataTable-tools  table-bordered">
									<thead>
										<tr>
											<th>S.No</th><th>Membership ID</th>									<th>Name</th>										<th>Total / Paid</th>										<th>Expiry</th>
<th>Payment Date</th><th>invoice</th>										
										</tr>
									</thead>
									<tbody>
									<?php
    
    
    $query  = "select * from subsciption WHERE paid_date BETWEEN '$from' AND '$to'";
    //echo $query;
    $result = mysqli_query($con, $query);
    $sno    = 1;
    $total  = 0;
    if (mysqli_affected_rows($con) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            
            
            
            echo "<tr><td>" . $sno . "</td>";
            echo "<td>" . $row['mem_id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['total'] . " / " . $row['paid'] . "</td>";
            echo "<td>" . $row['expiry'] . "</td>";
            echo "<td>" . $row['paid_date'] . "</td>";
            echo "<td>" . $row['invoice'] . "</td>";
            $total = $total + $row['total'];
            $sno++;
            
        }
        
        
    }
    
?>									
									</tbody>
								</table>
							</div><h4>Total Payments in This Date Range :<?php
    echo $sno - 1;
?></h4><h4>Total Income in This Date Range :<?php
    echo $total;
?></h4>
						</div>
					</div>
					</div>
				</div>
				
				
				</div>	</div>
				</div> <div class="alert alert-info">
					<center><h4>GymWare ,A Complete Fitness Management & Administration System</h4>
					
				</div>
			</div>
		</div></div>
		
	
		
	</body>

	</html>
<?php
}

?>

