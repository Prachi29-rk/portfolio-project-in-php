<?php
include("conn.php");

if(isset($_GET['service_id'])) {
    $service_id = $_GET['service_id'];
    
    // Fetch the existing image to delete it from the server
    $query = "SELECT service_image FROM servicedown WHERE service_id='$service_id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    
    if($row) {
        unlink($row['service_image']); // Delete the image file
    }
    
    // Delete the service from the database
    $delete_query = "DELETE FROM servicedown WHERE service_id='$service_id'";
    if(mysqli_query($conn, $delete_query)) {
        echo "<script>alert('Service deleted successfully!'); window.location.href='services.php';</script>";
    } else {
        echo "<script>alert('Error deleting service.'); window.location.href='services.php';</script>";
    }
}
?>
