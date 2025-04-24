<!-- /* edit_about.php */ -->
<?php
include("conn.php");
include("navbar.php");

$about_id = $_GET['about_id'];
$sql = "SELECT * FROM about WHERE about_id=$about_id";
$res = mysqli_query($conn, $sql);
$res = mysqli_fetch_assoc($res);
?>

<div class="form-container">
    <h1>Edit About</h1>
    <form action="about_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="about_id" value="<?=$about_id?>">

        <label>Enter Title</label>
        <input type="text" name="about_title" value="<?=$res['about_title']?>" required><br><br>
        
        <label>Enter Content</label>
        <textarea name="about_content" required><?=$res['about_content']?></textarea><br><br>
        
        <label>Upload New Image</label>
        <input type="file" name="about_image"><br><br>
        
        <label>Upload New CV/Resume</label>
        <input type="file" name="cv_resume"><br><br>
        
        <button type="submit">Update Data</button>
    </form>
</div>