<?php include 'config.php';
$admin = new Admin();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>user</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.10.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<p></p><br><br><br>

<?php include 'header.php'; ?>



<section id="hero" class="d-flex align-items-center justify-content-center" ><br> 
    <div class="container" data-aos="fade-up"  ><br>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150"><br>
        <div class="col-xl-6 col-lg-8" >
          <h1>AUTOMATION JOB HIRING SYSTEM<span>.</span></h1>
          <h2>We are team of talented digital marketers</h2>
        </div>
      </div>

      <div class="row  justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="">Home Maintainance</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="">Building Construction</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="">Wiring and Installation</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a href="">Renovation and Painting</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-database-2-line"></i>
            <h3><a href="">Interior Design</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a href="">Tiling and painting</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section>

  <main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
        <img src="assets/img/g.jpg" class="img-fluid" alt="">
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
        <h3>Automation job hiring system</h3>
        <p class="fst-italic">
        Our automated job hiring system simplifies and accelerates the hiring process, ensuring efficiency and reducing administrative burdens.
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> It facilitates seamless communication between hiring managers and candidates through automated email notifications,ensuring efficient and transparent communication throughout the hiring process.</li>
          <li><i class="ri-check-double-line"></i> It help to reach a wider range of candidates by automatically searchin for reqired worker on  this websites, increasing the chances of finding the ideal candidate.</li>
          <li><i class="ri-check-double-line"></i> Our system provides a user-friendly interface for candidates, enabling them to easily submit applications, track their progress, and receive timely updates.</li>
        </ul>
        <p>
          

        </p>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Clients Section ======= -->

<!-- End Clients Section -->

<section id="services" class="testimonials">
      <div class="container" data-aos="zoom-in">

    

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
          <?php 
          
          $stmt=$admin->ret("SELECT * FROM `feedback` INNER JOIN `user` on feedback.u_id = user.u_id ");
          while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

          ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src=" reg/controler/<?php echo $row['u_image'] ; ?>" class="testimonial-img" alt="">
                <h3><?php echo $row['u_name'] ; ?></h3>
                <h4><?php echo $row['u_location'] ; ?></h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo $row['f_message'] ; ?>
                 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
            
            <!-- End testimonial item -->

            <?php } ?>
            <!-- End testimonial item -->
          </div>
          <!-- <div class="swiper-pagination"></div> -->
        </div>

      </div>
    </section>



     <!-- footer --> <?php  include 'footer.php' ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>