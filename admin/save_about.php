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
        max-width: 600px;
        margin: auto;
        margin-top: 70px;
    }
    input, textarea {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border-radius: 5px;
        border: 1px solid #ddd;
    }
    button {
        background: linear-gradient(to right, #00c6ff, #0072ff);
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
    .file-input {
        border: none;
        background: #f8f8f8;
        padding: 10px;
        border-radius: 5px;
    }
</style>

<div class="form-container">
    <h1>Add About Section</h1>
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
        <input type="file" name="about_image" class="file-input" required>

        <label>Upload CV/Resume (PDF)</label>
        <input type="file" name="cv_resume" class="file-input" accept=".pdf" required>

        <button type="submit">Save Details</button>
    </form>
</div>
