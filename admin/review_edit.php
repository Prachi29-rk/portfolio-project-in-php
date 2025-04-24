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

// reviews_edit.php
if (isset($_GET['r_id'])) {
    $id = $_GET['r_id'];
    $sql = "SELECT * FROM reviews WHERE r_id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Review</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="form-container">
    <h1>Edit Review</h1>
    <form action="review_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="r_id" value="<?= $row['r_id'] ?>">
        <label>Enter Name</label>
        <input type="text" name="r_title" value="<?= $row['r_title'] ?>" >
         <label>Enter Sub Title</label>
        <input type="text" name="rs_title" value="<?= $row['rs_title'] ?>" >

        <label>Enter Content</label>
        <input type="text" name="r_details" value="<?= $row['r_details'] ?>" >
        <label>Upload Image</label>
        <input type="file" name="r_image">
        <button type="submit">Update Review</button>
    </form>
</div>
</body>
</html>
