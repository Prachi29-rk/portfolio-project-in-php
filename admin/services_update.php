<?php
include("conn.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service_id = $_POST['service_id'];
    $service_title = $_POST['service_title'];
    $service_content = $_POST['service_content'];
    
    // Fetch the existing image path
    $query = "SELECT service_image FROM services WHERE service_id='$service_id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $existing_image = $row['service_image'];
    
    // Handle image upload if a new one is selected
    if ($_FILES['service_image']['name']) {
        $image_name = "uploads/" . basename($_FILES['service_image']['name']);
        move_uploaded_file($_FILES['service_image']['tmp_name'], $image_name);
        
        // Delete the old image
        if ($existing_image) {
            unlink($existing_image);
        }
    } else {
        $image_name = $existing_image;
    }
    
    // Update the service details
    $update_query = "UPDATE services SET service_title='$service_title', service_content='$service_content', service_image='$image_name' WHERE service_id='$service_id'";
    
    if (mysqli_query($conn, $update_query)) {
        echo "<script>alert('Service updated successfully!'); window.location.href='services.php';</script>";
    } else {
        echo "<script>alert('Error updating service.'); window.location.href='services.php';</script>";
    }
}
?>
