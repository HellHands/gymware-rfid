<?php session_start();
if (!isset($_SESSION['auth_level'])){
	include 'more-login.php';	
}else{
	$auth_l_x = $_SESSION['auth_level'];
    if ($auth_l_x == 5) {
        header("location: ../dashboard/Members");
    } else if ($auth_l_x == 4) {
        header("location: ../dashboard/Admin");
    } else {
        header("location: ../login/");
	}
}