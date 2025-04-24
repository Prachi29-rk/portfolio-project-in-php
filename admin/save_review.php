<?php

include("conn.php");

print_r($_FILES);
extract($_POST);

//upload file
$filename = "uploads.".rand(0,229999).".png";
move_uploaded_file($_FILES['r_image']['tmp_name'],$filename);

//insert Data
$sql = "INSERT INTO reviews(r_title,rs_title,r_details,r_image)
        VALUES('$r_title','$rs_title','$r_details','$filename')";

        $res = mysqli_query($conn,$sql);
        if ($res) {
        	header("location:review.php");
        } else {
        	echo "Failed";
        }
        
?>

<!-- CREATE TABLE reviews(
project_id INT PRIMARY KEY AUTO_INCREMENT,
r_title TEXT,
r_details TEXT,
r_image TEXT)  -->