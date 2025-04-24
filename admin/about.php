<?php
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage About</title>
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
    .profile-img {
            width: 80px;
            height: auto;
            border-radius: 5px;
        }
        .download-link {
            color: #007bff;
            font-weight: bold;
            text-decoration: none;
        }
        .download-link:hover {
            text-decoration: underline;
        }
</style>
</head>
<body>
    <div class="form-container">
        <h1>Manage About</h1>
        <form action="save_about.php" method="post" enctype="multipart/form-data">
            <label>Enter Title</label>
            <input type="text" name="about_title" required>

            <label>Enter Content</label>
            <textarea name="about_content" required></textarea>

            <label>LinkedIn Profile Link</label>
            <input type="url" name="linkedin_link" required>

            <label>GitHub Profile Link</label>
            <input type="url" name="github_link">

            <label>Twitter Profile Link</label>
            <input type="url" name="twitter_link">

            <label>YouTube Channel Link</label>
            <input type="url" name="youtube_link">

            <label>WhatsApp Number</label>
            <input type="tel" name="whatsapp_no" required>

            <label>Upload Profile Image</label>
            <input type="file" name="about_image" required>

            <label>Upload CV/Resume (PDF)</label>
            <input type="file" name="cv_resume" accept=".pdf" required>

            <button type="submit">Save About</button>
        </form>
    </div>

    <table>
        <tr>
            <th style="width: 170px;">Actions</th>
            <th>Sr.No.</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th>LinkedIn</th>
            <th>GitHub</th>
            <th>Twitter</th>
            <th>YouTube</th>
            <th>WhatsApp</th>
            <th>CV/Resume</th>
        </tr>
        <?php
        include("conn.php");
        $sql = "SELECT * FROM about";
        $res = mysqli_query($conn, $sql);
        foreach ($res as $key => $row) {
        ?>
        <tr>
            <td>
                <a href="about_edit.php?about_id=<?= $row['about_id'] ?>">
                    <button class="btn edit-btn">✏️ Edit</button>
                </a>
                <a href="about_delete.php?about_id=<?= $row['about_id'] ?>">
                    <button class="btn delete-btn">🗑️ Delete</button>
                </a>
            </td>
            <td><?= $key + 1 ?></td>
            <td><?= $row['about_title'] ?></td>
            <td><?= $row['about_content'] ?></td>
            <td><img src="<?= $row['about_image'] ?>" class="profile-img"></td>
            <td><a href="<?= $row['linkedin_link'] ?>" target="_blank" class="download-link">View</a></td>
            <td><a href="<?= $row['github_link'] ?>" target="_blank" class="download-link">View</a></td>
            <td><a href="<?= $row['twitter_link'] ?>" target="_blank" class="download-link">View</a></td>
            <td><a href="<?= $row['youtube_link'] ?>" target="_blank" class="download-link">View</a></td>
            <td><?= $row['whatsapp_no'] ?></td>
            <td><a href="<?= $row['cv_resume'] ?>" download class="download-link">Download PDF</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
