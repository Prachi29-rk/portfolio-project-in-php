<?php
include("conn.php");
// projects_update.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['project_id'];
    $title = $_POST['project_title'];
    $details = $_POST['project_details'];
    
    if (!empty($_FILES['project_image']['name'])) {
        $image = "uploads/" . basename($_FILES['project_image']['name']);
        move_uploaded_file($_FILES['project_image']['tmp_name'], $image);
        $sql = "UPDATE projects SET project_title='$title', project_details='$details', project_image='$image' WHERE project_id=$id";
    } else {
        $sql = "UPDATE projects SET project_title='$title', project_details='$details' WHERE project_id=$id";
    }
    mysqli_query($conn, $sql);
    header("Location: projects.php");
}
?>
