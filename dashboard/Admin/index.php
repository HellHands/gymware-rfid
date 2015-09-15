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
	
	<link rel="stylesheet" href="../../css/bootstrap.css">

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
						
						<ul class="stats">
								
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
							
							
						</li></ul>
						
					

						</div> </div>
					<div class="row">
						

							<div id="container1" class="col-md-2">
								<div id="left_container">
							<ul style="margin-top:70px;"><li id="button1" class="stickybuttonsleft"><a href="new_entry.php"><span><i id="myicons" class="icon-money"></i></span> New Member </a></li>
								<li id="button2" class="stickybuttonsleft"><a href="new_plan.php"><span><i id="myicons" class="icon-shopping-cart"></i></span> New Plan &nbsp; </a></li>
								<li id="button3" class="stickybuttonsleft"><a href="change_values.php"><span><i id="myicons" class="icon-eye-open"></i></span> Edit Plan &nbsp;&nbsp; </a></li>
								<li id="button4" class="stickybuttonsleft"><a href="view_mem.php"><span><i id="myicons" class="icon-shopping-cart"></i></span> View/Edit Members</a></li>
								<li id="button5" class="stickybuttonsleft"><a href="more-userprofile.php"><span><i id="myicons" class="icon-cogs"></i></span>Settings</a></li>
								 </ul>	

								</div>

							</div>

							<div class="col-md-8" style="" >
									<div class="col-md-5" id="states" style="background-color: #B8C5A2;"> 


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
									</div>

								<div class="col-md-5" id="states" style="background-color: #C1C3C0;margin-left:5px;">

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


							</div>


								<div class="col-md-5" id="states" style="background-color: #A196A4;"> 

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

										
							</div>

								<div class="col-md-5" id="states" style="background-color: #9FA7AE;margin-left:5px;"> 

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
							</div>
						</div>

								<div id="container2" class="col-md-2">
									<div id="mycontainer">
							<ul style="margin-top:70px;" class="stickybar"><li id="right_button1" class="stickybuttons"><a href="sub_end.php"><span><i class="icon-star"></i></span> Ending Members </a></li>
								<li id="right_button2" class="stickybuttons"><a href="new_plan.php"><span><i id="myicons" class="icon-money"></i></span> Unpaid Members </a></li>
								<li id="right_button3"  class="stickybuttons"><a href="revenue_month.php"><span><i id="myicons" class="icon-bolt"></i></span> Revenue Graph </a></li>
								<li id="right_button4" class="stickybuttons"><a href="over_members_year.php"><span><i id="myicons" class="icon-calendar"></i></span>Members Graph</a></li>
								<li id="right_button5" class="stickybuttons"><a href="view_mem.php"><span><i class="icon-money"></i></span>Generate Invoice </a></li>
								<li id="right_button6" class="stickybuttons"><a href="payments.php"> <span><i id="myicons" class="icon-cogs"></i></span>Make Payments </a></li>
								 </ul>
								</div>

							</div>


						


					</div>
				</div>
			</div>
			
				<!-- <div class="alert alert-info">
					<center><h4>GymWare ,A Complete Fitness Management & Administration System</h4>
					<p><a href="http://techdynamics.org">Developed By TechDynamics INDIA</a> Powered By Saba Wasim</p></center>
				</div> -->
				<div class="alert alert-info">
					<center><h4>GymWare ,A Complete Fitness Management & Administration System</h4>
						<hr style="width:700px;">
						<h5> All rights reserved </h5></center>
					
				</div>
			</div>
		</div>
	</div>

</body>
</html>

