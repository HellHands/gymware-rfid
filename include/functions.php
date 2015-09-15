<?php 
function member_header($param){
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">GymWare</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <?php if(@$param == 'dashboard'){ ?>


        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Dashboard </a></li>
        <li><a href="payments.php"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>  Payments</a></li>
      <?php }elseif(@$param == 'payments'){ ?>

        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>  Dashboard </a></li>
        <li class="active"><a href="payments.php"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>  Payments</a></li>
		<?php } ?>        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-th-list"></span>   <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="view_mem.php">Members</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php
echo $_SESSION['full_name'];

?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="more-userprofile.php">Edit Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br><br><br><br><br><br>


<?php
}

function footer(){
	echo '<div class="alert alert-info" style="position: absolute; left: 0; bottom: 0; width: 100%; margin-bottom: 0; padding: 0;">
					<center>
						<h3><small>&copy; 2015</small></h3>
					</center>
				</div>';
}

