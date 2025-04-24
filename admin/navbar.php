
<?php
    session_start();

    if ($_SESSION['admin_id']) {
        //valid user
       
    } else {
        header("location:login.php");
    }
    
    // print_r($_SESSION);
    ?>

<style>
    .navbar {
        background: linear-gradient(to right, #ff416c, #ff4b2b);
        padding: 15px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .navbar a {
        color: white;
        text-decoration: none;
        font-size: 15px;
        font-weight: bold;
        padding: 7px 8px;
        margin: 5px;
        display: inline-flex;
        align-items: center;
        border-radius: 5px;
        transition: 0.3s;
    }
    .navbar a:hover {
        background: rgba(255, 255, 255, 0.2);
    }
    .navbar a i {
        margin-right: 8px;
    }
   .navbar .admin {
    text-align: center;
    font-weight: bold;
    font-family: Gadugi, sans-serif;
    font-size: 20px; /* Adjust font size if needed */
    background: linear-gradient(to right, #00ffaa, #0044ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    transition: color 0.3s ease-in-out;
}

.navbar .admin:hover {
        background: linear-gradient(to left, #00ffaa, #0044ff);
    -webkit-text-fill-color: #b50d45; 
}
.navbar .addmin:hover {
        background: linear-gradient(to left, #00ffaa, #0044ff);
    -webkit-text-fill-color: #39044a; 
}

</style>
<div class="navbar">
    <a href="index.php" class="admin"> Admin &nbsp; <span class="addmin">Panel</span></a>
    <a href="slider.php"><i class="fas fa-images"></i> Manage Slider</a>
    <a href="about.php"><i class="fas fa-user"></i> Manage About</a>
    <a href="services.php"><i class="fas fa-cogs"></i> Manage Services</a>
    <a href="servicedown.php"><i class="fas fa-tools"></i> Manage Counter</a>
    <a href="projects.php"><i class="fas fa-project-diagram"></i> Manage Projects</a>
    <a href="experience.php"><i class="fas fa-project-diagram"></i> Manage Experience</a>
    <a href="review.php"><i class="fas fa-project-diagram"></i> Manage Review</a>

</div>

<!-- Make sure to include FontAwesome for icons -->
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
