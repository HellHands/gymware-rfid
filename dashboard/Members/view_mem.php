﻿
<?php
require 'db_conn.php';
page_protect();
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
<script type="text/javascript">
      function ConfirmDelete()
      {
            if (confirm("Delete Account?"))
                 return true;
else
return false;
      }
  </script>
</head>
<body>
	<div id="navigation">
		<div class="container-fluid">
			<a href="index.php" id="brand">
GymWare</a>			
			<ul class='main-nav'>
				<li>
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
<li class='active'>
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
						<h1>View All Members</h1>
					</div>
					<div class="pull-right">
						
						<ul class="stats"><li class='blue'>
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
        $revenue = $row['paid'] + $revenue;
    }
}
echo $revenue;
?></span>
									<span>Paid Income This Month</span>
								</div>
							</li><li class='brown'>
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
									<span>Total Members </span>
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
							<a href="#">View Members</a>
							
						</li>
						
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="icon-remove"></i>
						</a>
					</div>
				</div><br>
				<div id="errors">
				<?php 
				if(isset($_GET['msg']) && $_GET['msg'] === 'tbl_em'){?>
						<div class="alert alert-block alert-error">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <h4>Error</h4>
						  There are no unregistered RFID tags. Please scan atleast one tag.
						</div><?php
					}else if(isset($_GET['msg']) && $_GET['msg'] === 'success') {?>

						<div class="alert alert-block alert-success">
						  <button type="button" class="close" data-dismiss="alert">&times;</button>
						  <h4>Success</h4>
						  RFID Tag Issued!
						</div>
				<?php
				}else if(isset($_GET['msg']) && $_GET['msg'] === 'error'){?>
					<div class="alert alert-block alert-success">
					  <button type="button" class="close" data-dismiss="alert">&times;</button>
					  <h4>Error</h4>
					  Something Went Wrong.
					</div>
				<?php }
				else{
					echo "";
					} ?>
				</div>
				<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered">
							<div class="box-title">
								<h3>
									<i class="icon-inbox"></i>
									Members List
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-nomargin dataTable dataTable-tools  table-bordered">
									<thead>
										<tr>
											<th>Membership Expiry</th>
											<th>Name / Member ID</th>
											<th>RFID</th>
											<th>Address / Contact</th>
											<th>Proof</th>
											<th>E-Mail / Age / Sex</th>
											<th>Height / Weight</th>
											<th>Date Joined / Member Type</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
									<?php


$query  = "select * from user_data ORDER BY joining DESC";
//echo $query;
$result = mysqli_query($con, $query);
$sno    = 1;

if (mysqli_affected_rows($con) != 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $msgid   = $row['newid'];
        $query1  = "select * from subsciption WHERE mem_id='$msgid' AND renewal='yes'";
        $result1 = mysqli_query($con, $query1);
        if (mysqli_affected_rows($con) == 1) {
            while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
                
                
                echo "<tr><td>" . $row1['expiry'] . "</td>";
                $expiry        = $row1['expiry'];
                $sub_type_name = $row1['sub_type_name'];
                
                echo "<td>" . $row['name'] . " / " . $row['newid'] . "<img src='" . $row['pic_add'] . "'></td>";
                if($row['rfid']){
                	echo "<td>" . $row['rfid'] . "</td>";
                }else{
                	echo "<td>RFID Not Added Yet</td>";
                }
                echo "<td>" . $row['address'] . " / " . $row['contact'] . "</td>";
                echo "<td>" . $row['proof'] . " / " . $row['other_proof'] . "</td>";
                echo "<td>" . $row['email'] . " / " . $row['age'] . " / " . $row['sex'] . "</td>";
                echo "<td>" . $row['height'] . " / " . $row['weight'] . "</td>";
                echo "<td>" . $row['joining'] . " / " . $row1['sub_type_name'] . "</td>";
                $memid = $row['newid'] ;
                $sno++;
                
                echo "<td><form action='read_member.php' method='post'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='View History ' class='btn btn-info'/></form>
                	  <a style='margin-bottom:20px;'  href='add_rfid.php?id=".$memid."' class='btn btn-success'/>Add/Update RFID</a>
                	  
                	  <form action='edit_member.php' method='post'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Edit' class='btn btn-warning'/></form>
                	  <form action='del_member.php' method='post' onSubmit='return ConfirmDelete();'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Delete ' class='btn btn-danger'/></form></td></tr>";
                $msgid = 0;
            }
        }
    }
}

?>									
									</tbody>
								</table>
							</div>
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


