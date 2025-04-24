<?php
include("conn.php");
// reviews_delete.php
if (isset($_GET['r_id'])) {
    $id = $_GET['r_id'];
    $sql = "DELETE FROM reviews WHERE r_id = $id";
    mysqli_query($conn, $sql);
    header("Location: review.php");
}
?>