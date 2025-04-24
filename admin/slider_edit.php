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
include("conn.php");
include("navbar.php");

$slider_id = $_GET['slider_id'];
$sql = "SELECT * FROM slider WHERE slider_id=$slider_id";
$res = mysqli_query($conn, $sql);
$res = mysqli_fetch_assoc($res);
?>

<div class="form-container">
    <h1>Edit Slider</h1>
    <form action="slider_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="slider_id" value="<?=$slider_id?>"> 

        <label>Enter Title</label>
        <input type="text" name="slider_title" value="<?=$res['slider_title']?>" required><br><br>
        <label>Enter Content</label>
        <textarea name="slider_content" required><?=$res['slider_content']?></textarea><br><br>
        <label>Upload New Image</label>
        <input type="file" name="slider_image"><br><br>
        <button type="submit">Update Data</button>
    </form>
</div>
