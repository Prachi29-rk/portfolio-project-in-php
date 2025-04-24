<?php

session_start();
// print_r($_POST);
extract($_POST);
include"conn.php";

$sql = "SELECT * FROM admin WHERE admin_email= '$admin_email' AND 
                                 admin_password= '$admin_password'";

$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);

if ($row) {
	$_SESSION['admin_id'] = $row['admin_id'];
	header("location:index.php");
} else {
	echo "Login Failed";
}


?>