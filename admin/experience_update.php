<?php
include("conn.php");
// e_id_update.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['e_id'];
    $company_name = $_POST['company_name'];
    $location = $_POST['c_location'];
     $technologies = $_POST['technologies'];
    $working_details = $_POST['working_details'];
    $j_date = $_POST['j_date'];
    $l_date = $_POST['l_date'];
    
    if (!empty($_FILES['company_image']['name'])) {
        $image = "uploads/" . basename($_FILES['company_image']['name']);
        move_uploaded_file($_FILES['company_image']['tmp_name'], $image);
        $sql = "UPDATE experience SET company_name='$company_name', c_location='$location',working_details= '$working_details',j_date='$j_date',l_date,'$l_date'company_image='$image' WHERE e_id=$id";
    } else {
        $sql = "UPDATE experience SET company_name='$company_name', c_location='$location' WHERE e_id='$id'";
    }
    mysqli_query($conn, $sql);
    header("Location: experience.php");
}
?>
