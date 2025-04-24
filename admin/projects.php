<?php
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Projects</title>
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
</head>
<body>

<div class="form-container">
    <h1>Manage Projects</h1>
    <form action="save_projects.php" method="post" enctype="multipart/form-data">
        <label>Enter Title</label>
        <input type="text" name="project_title" required>

        <label>Enter Content</label>
        <input type="text" name="project_details" required>

        <label>Upload Image</label>
        <input type="file" name="project_image" required>

        <button type="submit">Save Projects</button>
    </form>
</div>

<?php
include("conn.php");
$sql = "SELECT * FROM projects";
$res = mysqli_query($conn, $sql);
?>

<table>
    <tr>
        <th style="width: 170px;">Actions</th>
        <th>Sr. No.</th>
        <th>Title</th>
        <th>Content</th>
        <th>Image</th>
    </tr>
    <?php foreach ($res as $key => $row) { ?>
    <tr>
        <td>
            <a href="projects_edit.php?project_id=<?= $row['project_id'] ?>">
                <button class="btn edit-btn">✏️ Edit</button>
            </a>
            <a href="projects_delete.php?project_id=<?= $row['project_id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                <button class="btn delete-btn">🗑️ Delete</button>
            </a>
        </td>
        <td><?= $key + 1 ?></td>
        <td><?= $row['project_title'] ?></td>
        <td><?= $row['project_details'] ?></td>
        <td><img src="<?= $row['project_image'] ?>" class="icon-img"></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
