<?php
include("conn.php");
include("navbar.php");

$id = $_GET['slider_id'];

$sql = "DELETE FROM slider WHERE slider_id = '$id'";
$res = mysqli_query($conn, $sql);

if ($res) {
    header("location:slider.php");
} else {
    echo "<div class='error-message'>❌ Failed to delete slider.</div>";
}
?>
