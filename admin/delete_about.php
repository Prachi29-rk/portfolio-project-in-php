<!-- /* delete_about.php */ -->
<?php
include("conn.php");
include("navbar.php");
$about_id = $_GET['about_id'];

$sql = "DELETE FROM about WHERE about_id = '$about_id'";
$res = mysqli_query($conn, $sql);

if ($res)
    header("location:about.php");
else
    echo "Failed";
?>