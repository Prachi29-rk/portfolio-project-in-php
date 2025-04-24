<?php
include("conn.php");

extract($_POST);

//uploads
$filename = "uploads/".rand(0,600000).".png";
move_uploaded_file($_FILES['slider_image']['tmp_name'],$filename);

//Insert
$sql = "INSERT INTO slider (slider_title,slider_content,slider_image)
VALUES('$slider_title','$slider_content','$filename')";

$res = mysqli_query($conn,$sql);
if ($res) {
	header("location:slider.php");
} else {
	echo "Failed";
}

?>

<!-- CREATE TABLE slider (
              slider_id INT PRIMARY KEY AUTO_INCREMENT,
              slider_title VARCHAR(100),
              slider_content TEXT,
              slider_image TEXT   
                     ) -->