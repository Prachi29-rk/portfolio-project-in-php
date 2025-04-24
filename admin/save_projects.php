<?php

include("conn.php");

print_r($_FILES);
extract($_POST);

//upload file
$filename = "uploads.".rand(0,229999).".png";
move_uploaded_file($_FILES['project_image']['tmp_name'],$filename);

//insert Data
$sql = "INSERT INTO projects(project_title,project_details,project_image)
        VALUES('$project_title','$project_details','$filename')";

        $res = mysqli_query($conn,$sql);
        if ($res) {
        	header("location:projects.php");
        } else {
        	echo "Failed";
        }
        
?>

<!-- CREATE TABLE projects(
project_id INT PRIMARY KEY AUTO_INCREMENT,
project_title TEXT,
project_details TEXT,
project_image TEXT)  -->