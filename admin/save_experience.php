<!-- save_services.php -->
<?php
include("conn.php");
print_r($_POST);
print_r($_FILES);
extract($_POST);

//step 1
$filename= "uploads/".rand(0,23444).".png";
move_uploaded_file($_FILES['company_image']['tmp_name'],$filename);


//step 2
$sql = "INSERT INTO experience (company_name,c_location,technologies,working_details,company_image,j_date,l_date)
         VALUES('$company_name','$c_location','$technologies','$working_details','$filename','$j_date','$l_date')";

 $res = mysqli_query($conn, $sql);
 if ($res) {
 	header("location:experience.php");
 } else {
 	echo "Failed";
 }
 
	?>

<!-- 
CREATE TABLE service_id INT PRIMARY KEY AUTO_INCREMENT,
service_title TEXT,
service_content TEXT,
service_image TEXT -->