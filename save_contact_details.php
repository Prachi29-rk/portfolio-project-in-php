<?php

include("admin/conn.php");


extract($_POST);

//upload file


//insert Data
$sql = "INSERT INTO contact(contact_name,contact_mobile,contact_email,contact_message)
        VALUES('$contact_name','$contact_mobile','$contact_email','$contact_message')";

        $res = mysqli_query($conn,$sql);
        if ($res) {
        	header("location:thankyou.php");
        } else {
        	echo "Failed";
        }
        
?>

<!-- CREATE TABLE contact(
project_id INT PRIMARY KEY AUTO_INCREMENT,
contact_name TEXT,
contact_email TEXT,
contact_message TEXT)  -->