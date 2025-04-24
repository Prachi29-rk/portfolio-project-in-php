<?php
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Experience</title>
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
    <h1>Manage Experience</h1>
    <form action="save_experience.php" method="post" enctype="multipart/form-data">
        <label>Enter Company Name</label>
        <input type="text" name="company_name" required>

        <label>Enter Company Location</label>
        <input type="text" name="c_location" required>

        <label>Enter Technologies</label>
        <input type="text" name="technologies" required>

        <label>Enter Working Details</label>
        <textarea name="working_details"></textarea>

        <label>Upload Company Image</label>
        <input type="file" name="company_image" required>

         <label>Enter Joining Date</label>
        <input type="date" name="j_date" required>

         <label>Select Leave Date</label>
        <input type="date" name="l_date" >

         

        <button type="submit">Save Experience</button>
    </form>
</div>

<?php
include("conn.php");
$sql = "SELECT * FROM experience";
$res = mysqli_query($conn, $sql);
?>

<table>
    <tr>
        <th style="width: 170px;">Actions</th>
        <th>Sr. No.</th>
        <th>Company</th>
        <th>Location</th>
        <th>Technology</th>
        <th>Details</th>
        <th>Image</th>
        <th>Joining Date</th>
        <th>Leave Date</th>
    </tr>
    <?php foreach ($res as $key => $row) { ?>
    <tr>
        <td>
            <a href="experience_edit.php?e_id=<?= $row['e_id'] ?>">
                <button class="btn edit-btn">✏️ Edit</button>
            </a>
            <a href="experience_delete.php?e_id=<?= $row['e_id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                <button class="btn delete-btn">🗑️ Delete</button>
            </a>
        </td>
        <td><?= $key + 1 ?></td>
        <td><?= $row['company_name'] ?></td>
         <td><?= $row['c_location'] ?></td>
        <td><?= $row['technologies'] ?></td>
        <td><?= $row['working_details'] ?></td>
        <td><img src="<?= $row['company_image'] ?>" class="icon-img"></td>
        <td><?= $row['j_date'] ?></td>
        <td><?= $row['l_date'] ?></td>
        
    </tr>
    <?php } ?>
</table>

</body>
</html>
