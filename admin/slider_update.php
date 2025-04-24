<?php
include("conn.php");
include("navbar.php");

$slider_id = $_POST['slider_id'];
$slider_title = $_POST['slider_title'];
$slider_content = $_POST['slider_content'];

if (!empty($_FILES['slider_image']['name'])) {
    $slider_image = "uploads/" . basename($_FILES['slider_image']['name']);
    move_uploaded_file($_FILES['slider_image']['tmp_name'], $slider_image);
    $sql = "UPDATE slider SET slider_title='$slider_title', slider_content='$slider_content', slider_image='$slider_image' WHERE slider_id='$slider_id'";
} else {
    $sql = "UPDATE slider SET slider_title='$slider_title', slider_content='$slider_content' WHERE slider_id='$slider_id'";
}

$res = mysqli_query($conn, $sql);
if ($res) {
    header("location:slider.php");
    exit();
} else {
    echo "<div class='error-message'>❌ Failed to update: " . mysqli_error($conn) . "</div>";
}
?>
