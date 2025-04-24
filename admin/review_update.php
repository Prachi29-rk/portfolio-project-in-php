<?php
include("conn.php");
// reviews_update.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['r_id'];
    $title = $_POST['r_title'];
    $s_title = $_POST['rs_title'];
    $details = $_POST['r_details'];
    
    if (!empty($_FILES['r_image']['name'])) {
        $image = "uploads/" . basename($_FILES['r_image']['name']);
        move_uploaded_file($_FILES['r_image']['tmp_name'], $image);
        $sql = "UPDATE reviews SET r_title='$title',rs_title='$s_title', r_details='$details', r_image='$image' WHERE r_id=$id";
    } else {
        $sql = "UPDATE reviews SET r_title='$title',rs_title='$s_title', r_details='$details' WHERE r_id=$id";
    }
    mysqli_query($conn, $sql);
    header("Location: review.php");
}
?>
