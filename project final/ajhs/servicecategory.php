<?php include 'config.php';
$admin = new Admin();

$cid=$_GET['cid'];


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>category</title>
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
</head>
<body>
    
<?php include 'header.php'; ?>

<div  >
  <section id="hero" class="" ><br> 
    <div class="" data-aos=""  ><br>

     

      

    </div>
  </section><!-- End Hero -->



<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <select onchange="filLoc(this.value,<?php echo $cid; ?>)">
          <option selected disabled>Filter Location</option>
          <?php $st=$admin->ret("SELECT * FROM `location`");
          while($r=$st->fetch(PDO::FETCH_ASSOC)){
            ?>
              <option value="<?php echo $r['l_id']; ?>"><?php echo $r['l_name']; ?></option>

            <?php
          }?>
        
        </select><br><br><br>

        <script>
          function filLoc(lid,cid){
            window.location.href="servicecategory.php?cid="+cid+"&lid="+lid;

          }
        </script>

        <div class="row">

<?php 
        // $p_id = $_SESSION['l_id'];
        // $stmt= $admin->ret("SELECT * FROM `product` where `l_id`=".$p_id);
        // $row=$stmt->fetch(PDO::FETCH_ASSOC)
?>

        <?php  

        if(isset($_GET['cid']) AND isset($_GET['lid'])){
          $cid=$_GET['cid'];
          $lid=$_GET['lid'];
          $stmt= $admin->ret("SELECT * FROM `services` INNER JOIN `category` ON category.c_id = services.c_id  INNER JOIN `sp` ON sp.s_id = services.s_id WHERE services.c_id = $cid AND sp.l_id='$lid'");
          $c=$stmt->rowCount();
          if($c==0){
            echo "<h5 style='color:red;'><b>No Records Found</b></h5>";
          }

        }else{
$stmt= $admin->ret("SELECT * FROM `services` INNER JOIN `category` ON category.c_id = services.c_id  INNER JOIN `sp` ON sp.s_id = services.s_id WHERE services.c_id = $cid ");
        }
// $stmt=$admin->ret("SELECT * FROM `product` WHERE `cid`='$cid'");
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){  

  // echo $row['s_id'] ;

?>
         <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
         <a href="servicedetails.php?&p_id=<?php echo $row['se_id'] ; ?> ">
 
         <div class="icon-box">
              <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
              <img class="img-fluid" src="service_provider/controller/<?php echo $row['s_image'] ; ?>" alt="" /><br><br>
              <h4 style="color:black"><?php echo $row['s_name'];?></h4><br>
              <p style="color:black"><?php echo $row['se_description'];?></p>  
               <!-- <a href="labourcategory.php?p_id=<?php echo $row['se_id']; ?>" class="get-started-btn scrollto" style="color:black">Booking</a> -->
            </div>
            </a>
          </div>
        
          <?php } ?>

          

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