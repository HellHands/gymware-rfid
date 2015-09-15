<?php
require 'db_conn.php';
page_protect();


$query1 = "SELECT tag FROM rfid_tags LIMIT 1";
$result1  = mysqli_query($con, $query1);
$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);

if($row1['tag']){
	$query2 = "DELETE FROM rfid_tags WHERE tag='$row1[tag]'";
	$result = mysqli_query($con, $query2);

	$query3 = "UPDATE user_data SET rfid='$row1[tag]' WHERE newid='$_GET[id]'";
	$udapteres  = mysqli_query($con, $query3);
	$update = mysqli_fetch_array($udapteres, MYSQLI_ASSOC);
	if (mysqli_affected_rows($con) == 1 ) {
    	header('Location: view_mem.php?msg=success');
	}else{
		header('Location: view_mem.php?msg=error');
	}
}else{
	header('Location: view_mem.php?msg=tbl_em');
}




