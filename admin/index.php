




    <style type="text/css">
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }
    
    h1 {
        text-align: center;
        font-family: Gadugi, sans-serif;
        margin-top: 1px;
        font-size: 50px;
        background: linear-gradient(to right, #ff758c, #ff7eb3, #00c6ff, #0072ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        margin-top: 70px;
        border-radius: 8px;
    }
    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: center;
    }
    th {
        background: linear-gradient(to right, #00c6ff, #0072ff);
        color: white;
    }
    .btn {
        padding: 8px 12px;
        border: none;
        border-radius: 5px;
        font-size: 14px;
        cursor: pointer;
        transition: 0.3s;
    }
    .edit-btn {
        background-color: #28a745;
        color: white;
    }
    .delete-btn {
        background-color: #dc3545;
        color: white;
    }
    .btn:hover {
        opacity: 0.8;
    }
    .form-container {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        max-width: 500px;
        margin: auto;
         margin-top: 70px;
    }
    input, textarea {
        width: 100%;
        padding: 8px;
        margin: 8px 0;
        border-radius: 5px;
        border: 1px solid #ddd;
    }
    button {
        background-color: #007bff;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .icon-img {
            width: 80px;
            height: auto;
            border-radius: 5px;
        }
</style>

    <h1>Admin HomePage</h1>

<?php
include("navbar.php");
include("conn.php");
$sql = "SELECT * FROM contact";
$res = mysqli_query($conn, $sql);
?>


<table>
    <tr>
        <th>Sr. No.</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
    <?php foreach ($res as $key => $row) { ?>
    <tr>
       
        <td><?=$key + 1 ?></td>
        <td><?=$row['contact_name']?></td>
        <td><?=$row['contact_mobile']?></td>
        <td><?=$row['contact_email']?></td>
        <td><?=$row['contact_message']?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>

<!-- CREATE TABLE(  admin
admin_id INT PRIMARY KEY AUTO_INCREMENT,
admin_email VARCHAR(100),
admin_password VARCHAR(100)) -->


<!-- INSERT INTO admin (admin_email,admin_password) VALUES('rk@gmail.com','radheradhe') -->