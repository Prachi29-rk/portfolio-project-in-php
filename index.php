<?php
include 'admin/conn.php';
?>

<!DOCTYPE html><html lang="en"><head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Personal, Portfolio, Creative">
        <meta name="description" content="Kalvin Portfolio Template">
        <meta name="author" content="cosmos-themes">

        <title>Prachi Ghodechor</title>

        <!-- favicon -->
        <link href="images/favicon.ico" rel="icon" type="image/png">

        <!--Font Awesome css-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--Bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!--Owl Carousel css-->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <!--Magnific Popup css-->
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800,900%7cOpen+Sans:400,600,700,800" rel="stylesheet">

        <!--Site Main Style css-->
        <link rel="stylesheet" href="css/style.css">

        

    </head>

    <body>

        <!--Preloader-->
        <div class="preloader">
            <div class="loader"></div>
        </div>
        <!--Preloader-->

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo" href="/">
                    Prachi N.G.
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" data-scroll-nav="0">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="1">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="2">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="3">Works</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="4">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-scroll-nav="5">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navbar End-->

<?php
$sql = "SELECT * FROM slider";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
?>

        <!--Home Section Start-->
        <section id="home" class="banner" style="background-image: url('admin/<?=$row['slider_image']?>')" data-stellar-background-ratio=".7" data-scroll-index="0">
            <div class="container">
                <!--Banner Content-->
                <div class="banner-caption">
                    <h1><?=$row['slider_title']?></h1>
                    <p class="cd-headline clip mt-30">
                        <span><?=$row['slider_content']?></span><br>
                        <!-- <span class="blc">Specialized in</span> -->
                       <!--  <span class="cd-words-wrapper">
                            <b class="is-visible">Creating Websites.</b>
                            <b>Designing Logo.</b>
                            <b>Designing UI/UX.</b>
                        </span> -->
                    </p>
                </div>
                <div class="arrow bounce">
                    <a class="fa fa-chevron-down fa-2x" href="#" data-scroll-nav="1"></a>
                </div>
            </div>
            <!--Creative Background Svg-->
            <svg id="home-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1400 300" preserveAspectRatio="none">
                <path class="p-curve" d="M0,96.1c109.9,67.5,145.1,201.1,329.6,202.5S1043.2,99.5,1400,0v300H0V96.1z"></path>
            </svg>
        </section>
        <!--Home Section End-->


<?php
$sql = "SELECT * FROM about";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
?>


        <!--About Section Start-->
        <section class="about pt-100 pb-100" data-scroll-index="1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <!--About Image-->
                        <div class="about-img">
                            <img src="admin/<?=$row['about_image']?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <!--About Content-->
                        <div class="about-content">
                            <div class="about-heading">
                                <h2>About Me.</h2>
                                <span><?=$row['about_title']?></span>
                            </div>
                            <p><?=$row['about_content']?></p>
                            <!--About Social Icons-->
                            <div class="social-icons">
                                <a href="<?=$row['linkedin_link']?>"target="_blank"><i class="fa fa-linkedin"></i></a>
                                <a href="<?=$row['github_link']?>"target="_blank"><i class="fa fa-github"></i></a>
                                <a href="<?=$row['twitter_link']?>"target="_blank"><i class="fa fa-twitter"></i></a>
                                <a href="<?=$row['youtube_link']?>"target="_blank"><i class="fa fa-youtube"></i></a>
                                <a href="https://wa.me/91<?=$row['whatsapp_no']?>"target="_blank"><i class="fa fa-whatsapp"></i></a>
                            </div>
                            <span class="about-button">
                                <a class="main-btn" href="<?=$row['cv_resume']?>" download>Download CV</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Section End-->


<?php
$sql = "SELECT * FROM services";
$res = mysqli_query($conn,$sql);
?>
        <!--Services Section Start-->
        <section class="services bg-gray pt-100 pb-50" data-scroll-index="2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading text-center">
                            <h6>Services</h6>
                            <h2>What I Can Do</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($res as $row) {
                        ?> <div class="col-md-4">
                        <!--Service Item-->
                        <div class="service-item">
                            <span class="icon">
                                <img src="admin/<?=$row['service_image']?>">
                            </span>
                            <h4><?=$row['service_title']?></h4>
                            <p><?=$row['service_content']?></p>
                        </div>
                    </div><?php
                    }
                    ?>
                   
                   
                   
                </div>
            </div>
        </section>
        <!--Services Section End-->


<?php
$sql = "SELECT * FROM servicedown";
$res = mysqli_query($conn,$sql);
?>
        <!--Stats Section Start-->
        <section class="stats pt-100 pb-100" style="background-image: url('images/stats-bg.jpg')">
            <div class="container">
                <div class="row">
                   
                     <?php
                    foreach ($res as $row) {
                        ?>  <div class="col-lg-3 col-md-6">
                        <!--Stats Item-->
                        <div class="single-stat">
                            <span class="stat-icon" style="color: white;">
                                <img src="admin/<?=$row['service_image']?>" style="width: 50px; filter: invert(1);">

                            </span>
                            <h2 class="counter" style="color: white; font-size: 20px;"><?=$row['service_title']?></h2>
                            <p><?=$row['service_content']?></p>
                        </div>
                    </div><?php
                    }
                    ?>
                   
                            
                </div>
            </div>
        </section>
        <!--Stats Section End-->

<?php
$sql="SELECT * FROM projects";
$res =mysqli_query($conn,$sql);
?>
        <!--Portfolio Section Start-->
        <section class="portfolio pt-100 pb-70" data-scroll-index="3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="heading text-center">
                            <h6>Portfolio</h6>
                            <h2>Work I Have Done</h2>
                        </div>
                       
                    </div>
                </div>
                <div class="row portfolio-items">
                    <!--Portfolio Item-->
                   
                  
                <?php
                  
                  foreach($res as $row){?>
                     <div class="col-lg-4 col-md-6 item application">
                        <div class="item-content">
                            <img src="admin/<?=$row['project_image']?>" alt="" style="width: 450px;height: 250px;">
                            <div class="item-overlay">
                                <h6><?=$row['project_title']?></h6>
                                <h6 style="font-weight: 100;font-size: 12px;padding: 10px;">
                                  <?=$row['project_details']?>  
                                </h6>
                            </div>
                        </div>
                    </div>
                  <?php
}
                ?>
                           
                </div>
            </div>
        </section>
        <!--Portfolio Section End-->


<?php
$sql="SELECT * FROM experience";
$res =mysqli_query($conn,$sql);
?>
        <!--Experince Section Start-->
        <section class="blogs pt-100 pb-100 bg-gray" data-scroll-index="4">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="heading text-center">
                            <h6>Experience</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <!--Blogs Item-->
                        <?php
                        foreach($res as $row)
                        {
                            ?>
                            <div class="blog-item">
                            <div class="blog-img">
                                
                                    <img src="admin/<?=$row['company_image']?>" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <h3><?=$row['company_name']?> - <?=$row['c_location']?></h3>
                                <p><?=$row['working_details']?></p>
                                <div class="blog-meta">
                                    <span class="more">
                                       
                                    </span>
                                    <span class="date">
                                        <?=date('d M Y' , strtotime($row['j_date']))?>
                                        to
                                        <?=($row['l_date']=='0000-00-00')?'Stil Working':date('d/M/Y',strtotime($row['l_date']))?>
                                    </span>
                                </div>
                            </div>
                        </div>
                       <?php }
                        ?>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <div class="blog-button pt-40">
                            <a class="main-btn" href="/blogs-page">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Section End-->

        <!--Testimonials Section Start-->


        <?php
$sql="SELECT * FROM reviews";
$res =mysqli_query($conn,$sql);
?>
        <section class="testimonials pt-100 pb-100" style="background-image: url('images/testimonials-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="owl-carousel owl-theme text-center">
                            <!--Testimonials Item-->
                            <?php
                            foreach ($res as $row) {
                               ?>
                               <div class="testimonial-item">
                                <div class="author-img">
                                    <img src="admin/<?=$row['r_image']?>" alt="">
                                </div>
                                <h5><?=$row['r_title']?></h5>
                                <span><?=$row['rs_title']?></span>
                                <p><?=$row['r_details']?></p>
                            </div>
                               <?php
                            }
                            ?>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonials Section End-->

        <!--Contact Section Start-->
        <section class="contact pt-100 pb-100" data-scroll-index="5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="heading">
                            <h6>Contact</h6>
                            <h2>Get In Touch</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <!--Contact Form-->
                        <form action="save_contact_details.php" method="POST">
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <!--name-->
                                    <input type="text" class="form-control con-validate" name="contact_name" placeholder="Name" minlength="3">
                                </div>
                                <div class="col-md-4 form-group">
                                    <!--contact_number-->
                                    <input type="number" class="form-control con-validate" name="contact_mobile" placeholder="Mobile" minlength="3">
                                </div>
                                <div class="col-md-4 form-group">
                                    <!--email-->
                                    <input type="email" class="form-control con-validate" name="contact_email"placeholder="Email">
                                </div>
                                <div class="col-md-12 form-group">
                                    <!--message box-->
                                    <textarea class="form-control con-validate" name="contact_message" placeholder="How can we help you?" rows="6"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <!--contact button-->
                                    <button id="contact-submit" class="mt-30 main-btn">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Section End-->

        <!--Footer Start-->
        <footer class="pt-50 pb-50">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Prachi N. G.</h5>
                            <p>Web developer And Designer.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Phone No.</h5>
                            <p>8767565434</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Email</h5>
                            <p>info@example.com</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Contant Item-->
                        <div class="contact-info">
                            <h5>Address</h5>
                            <p>Kukana , Tal: Newasa, Dist: Ahilyanagar 414604</p>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <hr>
                        <p class="copy pt-30">
                            Prachi N. G. � 2025. All Right Reserved, Designed By Creative Mind.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer End-->

        <!--Jquery js-->
        <script src="js/jquery.min.js"></script>
        <!--Bootstrap js-->
        <script src="js/bootstrap.min.js"></script>
        <!--Stellar js-->
        <script src="js/jquery.stellar.js"></script>
        <!--Animated Headline js-->
        <script src="js/animated.headline.js"></script>
        <!--Owl Carousel js-->
        <script src="js/owl.carousel.min.js"></script>
        <!--ScrollIt js-->
        <script src="js/scrollIt.min.js"></script>
        <!--Isotope js-->
        <script src="js/isotope.pkgd.min.js"></script>
        <!--Magnific Popup js-->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!--Site Main js-->
        <script src="js/main.js"></script>

    


</body></html>