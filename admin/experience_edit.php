<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 20px;
    }
    h1 {
        color: #333;
        text-align: center;
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
        transition: 0.3s;
    }
    button:hover {
        opacity: 0.8;
    }
</style>
<?php
include("navbar.php");
include("conn.php");

// experience_edit.php
if (isset($_GET['e_id'])) {
    $id = $_GET['e_id'];
    $sql = "SELECT * FROM experience WHERE e_id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Experience</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="form-container">
    <h1>Edit Project</h1>
    <form action="experience_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="e_id" value="<?= $row['e_id'] ?>">
       <label>Enter Company Name</label>
        <input type="text" name="company_name" value="<?= $row['company_name'] ?>">

        <label>Enter Company Location</label>
        <input type="text" name="c_location" value="<?= $row['c_location'] ?>">

        <label>Enter Technologies</label>
        <input type="text" name="technologies" value="<?= $row['technologies'] ?>">

        <label>Enter Working Details</label>
        <textarea name="working_details">value="<?= $row['working_details'] ?>"</textarea>

        <label>Upload Company Image</label>
        <input type="file" name="company_image" value="<?= $row['company_image'] ?>">

         <label>Enter Joining Date</label>
        <input type="date" name="j_date" value="<?= $row['j_date'] ?>">

         <label>Select Leave Date</label>
        <input type="date" name="l_date" value="<?= $row['l_date'] ?>">

         

        <button type="submit">Update Experience</button>
    </form>
</div>
</body>
</html>
