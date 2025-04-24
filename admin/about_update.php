<!-- /* update_about.php */ -->
<?php
include("conn.php");
include("navbar.php");
$about_id = $_POST['about_id'];
$about_title = $_POST['about_title'];
$about_content = $_POST['about_content'];

$updates = "UPDATE about SET about_title='$about_title', about_content='$about_content'";

if (!empty($_FILES['about_image']['name'])) {
    $about_image = "uploads/" . basename($_FILES['about_image']['name']);
    move_uploaded_file($_FILES['about_image']['tmp_name'], $about_image);
    $updates .= ", about_image='$about_image'";
}

if (!empty($_FILES['cv_resume']['name'])) {
    $cv_resume = "uploads/" . basename($_FILES['cv_resume']['name']);
    move_uploaded_file($_FILES['cv_resume']['tmp_name'], $cv_resume);
    $updates .= ", cv_resume='$cv_resume'";
}

$updates .= " WHERE about_id='$about_id'";
$res = mysqli_query($conn, $updates);

if ($res) {
    header("location:about.php");
    exit();
} else {
    echo "Failed to update: " . mysqli_error($conn);
}
?>
