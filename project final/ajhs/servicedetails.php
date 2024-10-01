<?php include 'config.php';
$admin = new Admin();
if(!isset($_SESSION['U_id'])){
  header('location:login/index.php');
}
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



<div  >
  <section id="hero" class="" ><br> 
    <div class="" data-aos=""  ><br>

     

      

    </div>
  </section>

<section id="about" class="about">
      <div class="container" data-aos="fade-up">
<?php 
$pid = $_GET['p_id'];
$stmt = $admin->ret("SELECT * FROM `services` INNER JOIN `category` ON category.c_id = services.c_id INNER JOIN `sp` ON sp.s_id=services.s_id  WHERE services.se_id='$pid'");
$row1=$stmt->fetch(PDO::FETCH_ASSOC);

$sid = $row1['s_id'];

?>

        <div class="row">
          <div class="col-lg-6 order-1 " data-aos="fade-left" data-aos-delay="100">
          <img class="img-fluid" src="service_provider/controller/<?php echo $row1['se_image'] ; ?>" alt="" />
          </div>
          <h1 style="color:orange; margin-left:500px; margin-bottom:100px;"><b><u><?php echo $row1['c_name'];?></u></b></h1><br><br><br><br><br><br><br><br>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
          
           <span style="margin-top:-200px;">  <h5><b> Price: </b> </h5> <p style="margin-left:75px; margin-top:-30px; color:black;">  <?php echo $row1['se_price'] ; ?> </p>  </span><br><br>
           <span style="margin-top:-200px;">  <h5><b> Description: </b> </h5> <p style="margin-left:150px; margin-top:-30px;color:black;">  <?php echo $row1['se_description'] ; ?> </p>  </span><br><br>
           

           
          </div>
        </div>
        

      </div>
    </section>


    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">

        <?php 
        
$stmt2= $admin->ret("SELECT * FROM `sp` WHERE `s_id`='$sid'");
$row2=$stmt2->fetch(PDO::FETCH_ASSOC)

?>


          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
              <!-- <img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""> -->
              <img class="img-fluid" src="service_provider/controller/<?php echo $row2['s_image'] ; ?>" alt="" />
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $row2['s_name']; ?></h4>
                
                <!-- class="get-started-btn scrollto" style="color:black">Next</a> -->

                <a class="btn btn-info" href="bookingform.php?sid=<?php echo $row2['s_id'] ; ?>&p_id=<?php echo $row1['se_id'] ; ?>" >Send Request</a>

              </div>
            </div>
          </div>

          

            </div>
          </div>

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