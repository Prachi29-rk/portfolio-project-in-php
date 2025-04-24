<!-- save_services.php -->
<?php
include("conn.php");
print_r($_POST);
print_r($_FILES);
extract($_POST);

//step 1
$filename= "uploads/".rand(0,23444).".png";
move_uploaded_file($_FILES['service_image']['tmp_name'],$filename);


//step 2
$sql = "INSERT INTO services (service_title,service_content,service_image)
         VALUES('$service_title','$service_content','$filename')";

 $res = mysqli_query($conn, $sql);
 if ($res) {
 	header("location:services.php");
 } else {
 	echo "Failed";
 }
 
	?>

<!-- 
CREATE TABLE service_id INT PRIMARY KEY AUTO_INCREMENT,
service_title TEXT,
service_content TEXT,
service_image TEXT -->