<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 20px;
        }
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: auto;
            margin-top: 20px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        button {
            background: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            width: 100%;
            font-size: 16px;
        }
        button:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <?php
    include("conn.php");
    
    if(isset($_GET['service_id'])) {
        $service_id = $_GET['service_id'];
        $query = "SELECT * FROM services WHERE service_id='$service_id'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
    }
    ?>
 <div class="form-container">
        <h2>Edit Service</h2>
        <form action="services_update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="service_id" value="<?= $row['service_id'] ?>">
            <label>Title</label>
            <input type="text" name="service_title" value="<?= $row['service_title'] ?>" required>

            <label>Content</label>
            <textarea name="service_content" required><?= $row['service_content'] ?></textarea>

            <label>Current Icon</label><br>
            <img src="<?= $row['service_image'] ?>" width="100px"><br><br>
            
            <label>Upload New Icon</label>
            <input type="file" name="service_image">

            <button type="submit">Update Service</button>
        </form>
    </div>
</body>
</html>
