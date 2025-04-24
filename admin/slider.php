<!-- slider.php -->
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
    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        margin-top: 70px;
        border-radius: 8px;
    }
    th, td {
        padding: 12px;
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
</style>
<title>Manage Slider</title>
<?php
include("navbar.php");
?>

<div class="form-container">
    <h1>Manage Website Slider</h1>
    <form action="save_slider.php" method="post" enctype="multipart/form-data">
        <label>Enter Title</label>
        <input type="text" name="slider_title" required><br><br>
        <label>Enter Content</label>
        <textarea name="slider_content" required></textarea><br><br>
        <label>Upload Image</label>
        <input type="file" name="slider_image" required><br><br>
        <button type="submit">Save Data</button>
    </form>
</div>

<?php
include "conn.php";
$sql = "SELECT * FROM slider";
$res = mysqli_query($conn, $sql);
?>

<table>
    <tr>
        <th>Action</th>
        <th>Sr. No.</th>
        <th>Title</th>
        <th>Content</th>
        <th>Image</th>
    </tr>
    <?php foreach ($res as $key => $row) { ?>
    <tr>
        <td>
            <a href="slider_edit.php?slider_id=<?= $row['slider_id'] ?>">
                <button class="btn edit-btn">✏️ Edit</button>
            </a>
            <a href="slider_delete.php?slider_id=<?= $row['slider_id'] ?>">
                <button class="btn delete-btn">🗑️ Delete</button>
            </a>
        </td>
        <td><?= $key + 1 ?></td>
        <td><?= $row['slider_title'] ?></td>
        <td><?= $row['slider_content'] ?></td>
        <td><img src="<?= $row['slider_image'] ?>" width="100px"></td>
    </tr>
    <?php } ?>
</table>
